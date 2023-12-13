@extends('layout')

@section('content')
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background color */
        }

        .container {
            background-color: #ffffff; /* White background color for content */
            border-radius: 10px; /* Add some rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        h1, h2, h3, h4, h5, p {
            color: #495057; /* Dark gray text color */
        }

        label {
            font-weight: bold; /* Make labels bold */
            display: block; /* Ensure labels are on their own line */
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ced4da; /* Light gray border */
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            padding: 12px;
        }

        .bg-blue {
            background-color: #007bff; /* Blue background color for buttons */
            color: #ffffff; /* White text color for buttons */
        }

        .bg-blue:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }

        .btn-laravel {
            background-color: #f8d700; /* Light gold color for buttons */
            border-color: #f8d700; /* Border color for buttons */
            color: #495057; /* Dark gray text color for buttons */
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-laravel:hover {
            background-color: #c6a300; /* Darker gold color on hover */
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Blue background color for links */
            color: #ffffff; /* White text color for links */
            text-decoration: none; /* Remove underlines from the link */
            border-radius: 5px; /* Add rounded corners */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
            margin-top: 20px;
        }

        a:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }

    </style>

    <div class="container">
        <h1>Welcome to your Lawyer Dashboard, {{ Auth::user()->name }}!</h1>

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create your Lawyer profile
            </h2>
        </header>

        <form action="/lawyers" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="company">Company Name / Your Name</label>
                <input type="text" value="{{ old('company') }}" name="company" />
                @error('company')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="specialty">Select Specialties</label>
                <select name="specialty" size="6">
                    <!-- Options remain the same -->
                </select>
                @error('specialty')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Other form fields -->

            <div class="mb-6">
                <button class="btn-laravel">Upload Lawyer Profile</button>
                <br>
                <div>
                    <a href="/common/common_dashboard">See other's posts</a>
                </div>
                <a href="/" class="text-black ml-4">Back</a>
            </div>
        </form>

        <a href="/lawyers/lawyer_dashboard">Create New Post</a>
    </div>
@endsection
