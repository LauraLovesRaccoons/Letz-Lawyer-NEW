<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules\Password;
use App\Models\Post;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        // dd($request->session());

        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(2), 'confirmed'],
            'is_lawyer' => 'boolean',
        ]);

        
        // Captcha API
        // send and receive data from google recaptcha
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $params = [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ];

        // api json received
        $response = Http::get($url, $params);
        // api json decoding
        $responseData = json_decode($response->body());

        // error msg if captcha is not checked or failed
        if (!$responseData->success) {
            // reCAPTCHA validation failed
            return redirect('/register')->withErrors([
                'g-recaptcha' => 'Please verify that you are not a robot.'  // Error message
            ]);
        }
        // End Captcha API
        

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'is_lawyer' => $request->input('is_lawyer', false),
        ]);

        auth()->login($user);

        if ($user->is_lawyer) {
            return redirect('/lawyers/lawyer_dashboard')->with('message', 'Lawyer registered Successfully!');
        } else {
            return redirect('/client/client_dashboard')->with('message', 'User registered Successfully!');
        }
    }
    

   

    public function search()
    {
        return view('UserLandingCatagory.lawyersSearch');
    }

    public function landing()
    {
        return view('UserLandingCatagory.landing');
    }

   

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User logged out Successfully!');
    }

    //public function login()
    //{
    //    return view('login');
  //  }

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
              
              return redirect('/lawyers/lawyer_dashboard')->with('message', 'Lawyer logged in Successfully!');
          } else {
             
              return redirect('/client/client_dashboard')->with('message', 'client logged in Successfully!');
          }
      }
  
      return back()->withErrors(['login' => 'Invalid Credentials']);
  }
  

    public function showUserDetails($userId)
    {
        $user = User::find($userId);
        $appointmentsAsClient = $user->appointmentsAsClient;
        $appointmentsAsLawyer = $user->appointmentsAsLawyer;
        $posts = $user->posts;
        $categories = $user->categories;

        return view('user.details', compact('user', 'appointmentsAsClient', 'appointmentsAsLawyer', 'posts', 'categories'));
    }

    
    


}
