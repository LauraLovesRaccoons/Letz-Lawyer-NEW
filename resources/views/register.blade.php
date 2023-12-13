@extends('layout')

@section('content')
<style>
    body {
        background-color: #e4dfd9; /* Light gold background color */
    }
    </style>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-4">Create an account to get started with Letz Lawyer</p>
        </header>

        <form action="{{ route('register') }}" method="post" class="bg-white p-6 rounded shadow-md max-w-md w-full">
            <div class="mb-6">
                <label for="is_lawyer" class="block text-lg mb-2 flex items-center">
                  <span class="ml-10">Are you a lawyer?</span>
                  <span class="ml-5" style="margin-bottom: -0.5px;">
                    <input type="checkbox" id="is_lawyer" name="is_lawyer" value="1" {{ old('is_lawyer') ? 'checked' : '' }}>
                  </span>
                </label>
              </div>
              
              
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-lg mb-2">Name</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:border-blue-500 transition duration-300" name="name" value="{{ old('name') }}" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:border-blue-500 transition duration-300" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-lg mb-2">Password</label>
                <input type="password" class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:border-blue-500 transition duration-300" name="password" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-lg mb-2">Confirm Password</label>
                <input type="password" class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:border-blue-500 transition duration-300" name="password_confirmation" value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="g-recaptcha" id="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            @error('g-recaptcha')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <br>
            <div class="btn-field">
                <button type="submit" id="signupBtn" name="action" value="signup" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Sign Up</button>
            </div>
        </form>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-500">Login</a>
            </p>
        </div>
    </div>
@endsection
