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
                Log in
            </h2>
            <p class="mb-4">Log into your account to control your appointments</p>
        </header>

        <form action="{{ route('login') }}" method="post" class="bg-white p-6 rounded shadow-md max-w-md w-full">
            @csrf

            @error('login')
                <p class="text-red-500 text-xs mt-1 mb-6">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="email" class="block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:border-blue-500 transition duration-300" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:border-blue-500 transition duration-300" name="password" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="btn-field">
                <button type="submit" id="signinBtn" name="action" value="signin" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Sign In</button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-blue-500">Register</a>
                </p>
            </div>
        </form>
    </div>
@endsection
