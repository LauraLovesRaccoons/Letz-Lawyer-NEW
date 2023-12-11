<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

       

        return redirect('/')->with('message', 'User registered Successfully!');
    }
}
