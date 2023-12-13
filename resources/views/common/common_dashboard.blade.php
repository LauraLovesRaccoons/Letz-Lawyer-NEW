@extends('layout')

@section('content')
    <style>
        body {
            background-color: #e4dfd9; /* Light gold background color */
        }

        .container {
            background-color: #fff; /* White background color for content */
            border-radius: 10px; /* Add some rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        h1, h2, h3, h4, h5, p {
            color: #4b4a4a; /* Dark gray text color */
        }
        .container, h1{
            background-color: #8391b1; 
        }
        .btn-primary {
            background-color: #3e4f73; /* Light gold color for buttons */
            border-color: #3e4f73; /* Border color for buttons */
            color: #ffffff; /* Dark gray text color for buttons */
        }
    </style>

    <div class="container">
        @if (auth()->check())
            <h1 class="display-4">Welcome to the Common Dashboard, {{ Auth::user()->name }}!</h1>
        @else
            <p class="lead">Not logged in</p>
        @endif
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-primary" style="color: #584833 !important;">Latest Lawyer Posts:</h2>

                <hr class="my-4">

                @if (isset($results))
                    <ul class="list-group">
                        @foreach ($results as $user)
                            <li class="list-group-item">
                                <h3 class="text-2xl font-bold mb-4">{{ $user->name }}</h3>
                                <p class="mb-2"><img style="max-width: 251px;" class="img-fluid" src="{{ asset('images/Logo_V0.3.png') }}" alt="{{ $user->name }}'s picture"></p>
                                <p style="margin: 5px 0;">Email: {{ $user->email }}</p>
                                <a href="/appointments/create" class="btn btn-primary btn-sm">View Profile</a>
                                <br>
                            </li>
                        @endforeach
                        <br>
                        <li class="list-group-item text-muted">End of Results</li>
                    </ul>
                @else
                    <div class="row">
                        @foreach ($allLawyerPosts->take(4) as $post)
                            <div class="col-sm-6 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/placeholder.jpg') }}" class="card-img-top" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->name }}</h5>
                                        <p class="card-text">{{ $post->description }}</p>
                                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <p class="text-muted mt-4">End of Posts</p>
                @endif
            </div>

            <div class="col-md-4">
                @if (auth()->check())
                    @if (auth()->user()->is_lawyer == 1)
                        <a href="/lawyers/lawyer_dashboard" class="btn btn-primary btn-lg btn-block mt-4">Go to Lawyer Dashboard</a>
                    @else
                        <a href="/client/client_dashboard" class="btn btn-primary btn-lg btn-block mt-4">Go to Client Dashboard</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
