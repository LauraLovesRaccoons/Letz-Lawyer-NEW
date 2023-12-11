@extends('layout')

@section('content')
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Log in
        </h2>
        <p class="mb-4">Log into your account to control your appointments</p>
    </header>
    
    <form action="{{ route('login') }}" method="post">
        @csrf

        @error('login')
            <p class="text-red-500 text-xs mt-1 mb-6">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email</label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2">
                Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="btn-field">
            <button type="submit" id="signinBtn" name="action" value="signin">Sign In</button>
        </div>

        <div class="mt-8">
            <p>
                Don't have an account?
                <a href="/register" class="text-laravel">Register</a>
            </p>
        </div>
    </form>
@endsection
