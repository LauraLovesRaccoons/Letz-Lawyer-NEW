<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;
use Illuminate\Support\Facades\Session;

class AuthManger extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $credentials = $request->only(['email', 'password']); 
    

        // is Auth here is correct or we have to write all the path like App\
        if('Auth'::attempt($credentials)){ 
            return redirect()->intended(route('home'))->with("success", "Login details are valid");
        }
    
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required ¦ email ¦ unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data); // Assuming your model is named 'User'

        if (!$user) {
            return redirect(route('login'))->with("success", "Registration success, login to access the app");
        }

        function logout(){
            // Clear specific session data
            Session::forget('user');
        
            // Alternatively, you can flush the entire session if needed
            // Session::flush();
        
            Auth::logout();
        
            return redirect(route('login'));
        }
    
    

    }
}

  




