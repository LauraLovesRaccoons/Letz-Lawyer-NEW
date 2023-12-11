<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    protected function showRegistrationForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'is_lawyer' => 'boolean',
        ]);

        

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'is_lawyer' => $request->input('is_lawyer', false), // Default to false if not provided
        ]);


        // Captcha API
        // $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $params = [
        //     'secret' => env('RECAPTCHA_SECRET_KEY'),
        //     'response' => $request->input('g-recaptcha-response')
        // ];

        // $response = Http::get($url, $params);
        // $responseData = json_decode($response->body());

        // if (!$responseData->success) {
        //     // reCAPTCHA validation failed
        //     return redirect('/register')->withErrors([
        //         'g-recaptcha' => 'Please verify that you are not a robot.'
        //     ]);
        // }
        // End Captcha API
        

        return redirect('/')->with('message', 'User registered Successfully!');
    }
}
