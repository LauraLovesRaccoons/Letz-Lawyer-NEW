<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login'); 
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (auth()->attempt($formFields)) {
            $user = auth()->user();
    
            if ($user->is_lawyer) {
                
                return redirect()->route('lawyers.create_lawyer_data')->with('message', 'Lawyer logged in Successfully!');
            } else {
               
                return redirect()->route('UserLandingCatagory.landing')->with('message', 'User logged in Successfully!');
            }
        }
    
        return back()->withErrors(['login' => 'Invalid Credentials']);
    }
    
}
