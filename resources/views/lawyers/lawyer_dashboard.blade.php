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
                    <option value="0" data-id="0" selected disabled hidden>Select 1 specialty</option>
                    <option value="2" data-id="2">Family Law</option>
                    <option value="3" data-id="3">Criminal Law</option>
                    <option value="4" data-id="4">Civil Law</option>
                    <option value="5" data-id="5">Intellectual Property Law</option>
                    <option value="6" data-id="6">Real Estate Law</option>
                    <option value="7" data-id="7">Tax Law</option>
                    <option value="8" data-id="8">Immigration Law</option>
                    <option value="9" data-id="9">Labor and Employment Law</option>
                    <option value="10" data-id="10">Health Law</option>
                    <option value="11" data-id="11">Environmental Law</option>
                    <option value="12" data-id="12">Bankruptcy Law</option>
                    <option value="13" data-id="13">Personal Injury Law</option>
                    <option value="14" data-id="14">Estate Planning Law</option>
                    <option value="15" data-id="15">Business Law</option>
                    <option value="16" data-id="16">Entertainment Law</option>
                    <option value="17" data-id="17">Sports Law</option>
                    <option value="18" data-id="18">Fashion Law</option>
                    <option value="19" data-id="19">Art Law</option>
                    <option value="20" data-id="20">Education Law</option>
                    <option value="21" data-id="21">Government Law</option>
                    <option value="22" data-id="22">International Law</option>
                    <option value="23" data-id="23">Non-Profit Law</option>
                    <option value="24" data-id="24">Intellectual Property</option>
                    <option value="25" data-id="25">Technology Law</option>
                    <option value="26" data-id="26">Media Law</option>
                    <option value="27" data-id="27">Telecommunications Law</option>
                    <option value="28" data-id="28">Energy Law</option>
                    <option value="29" data-id="29">Construction Law</option>
                    <option value="30" data-id="30">Transportation Law</option>
                    <option value="31" data-id="31">Agriculture Law</option>
                    <option value="32" data-id="32">Corporate Lawyer</option>
                    <option value="33" data-id="33">Mergers and Acquisitions Lawyer</option>
                    <option value="34" data-id="34">Finance Lawyer</option>
                    <option value="35" data-id="35">Securities Lawyer</option>
                    <option value="36" data-id="36">Banking Lawyer</option>
                    {{-- 1 is other if someone messes with stuff as well as for stuff that isn't listed here --}}
                    <option value="1" data-id="1">Other</option>
                    {{-- not selected is an empty entry will be handled below --}}
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


    </div>
@endsection
