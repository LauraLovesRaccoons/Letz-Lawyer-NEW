@extends('layout')

@section('content')
    <style>
        body {
            background-color: #fdfcfa;
            /* Light gold background color */
        }
        main{

            background-color: #fdfcfa;
            /* Light gold background color */
        }



        .container {
            background-color: #fffefe;
            /* White background color for content */
            border-radius: 10px;
            /* Add some rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .container, h1 {
  background-color: #ffff;
}

        h1,
        h2,
        h3,
        h4,
        h5,
        p {
            color: #4b4a4a;
            /* Dark gray text color */
        }

        .container,
        h1 {
            background-color: #dcdfe6;
        }

        .btn-primary {
            background-color: #d5d7da;
            /* Light gold color for buttons */
            border-color: #d2d5dd;
            /* Border color for buttons */
            color: #ffffff;
            /* Dark gray text color for buttons */
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
                    <ul class="list-group" style="background-color: #c9a4a4 !important;">
                        @foreach ($results as $user)
                            <li class="list-group-item" style="background-color: rgb(250, 250, 250) !important;">
                                <h3 class="text-2xl font-bold mb-4">{{ $user->name }}</h3>
                                <p class="mb-2"><img style="max-width: 251px;" class="img-fluid"
                                        src="{{ asset('images/Logo_V0.3.png') }}" alt="{{ $user->name }}'s picture"></p>
                                <p style="margin: 5px 0;">Email: {{ $user->email }}</p>
                                <a href="/appointments/create" class="btn btn-primary btn-sm">View Profile</a>
                                <br>
                            </li>
                        @endforeach
                        <br>
                        <li class="list-group-item text-muted" style="background-color: #e6bcbc !important;">End of Results
                        </li>
                    </ul>
                @else
                    {{-- <div class="row">
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
                    </div> --}}
                    {{-- fake profiles --}}
                    <ul class="list-group" style="background-color: #c9a4a4 !important;">
                        {{-- 1 --}}
                        <li class="list-group-item" style="background-color: rgb(250, 250, 250) !important;">
                            <h3 class="text-2xl font-bold mb-4">Henry Masterlawyer</h3>
                            <p class="mb-2"><img style="max-width: 251px;" class="img-fluid"
                                    src="{{ asset('images/Logo_V0.3.png') }}" alt="XYZ's picture"></p>
                            <p style="margin: 5px 0;">Specialty: Family Law</p>
                            <p style="margin: 5px 0;">Email: henry@email.com</p>
                            <p style="margin: 5px 0;">Phone: +352 123 456</p>
                            <p style="margin: 5px 0;">Henry is a resolute and seasoned divorce lawyer with an unwavering commitment to navigating the intricacies of divorce with empathy and decisiveness. He possesses a proven track record of success in guiding clients through the complex process of divorce, ensuring that their legal rights and interests are safeguarded. Henry's dedication to professionalism, integrity, and client advocacy has earned him a reputation as a trusted advisor and formidable advocate in the legal arena.
                            </p>
                            <br>
                        </li>
                        {{-- 1 end --}}
                        {{-- 2 --}}
                        <li class="list-group-item" style="background-color: rgb(255, 255, 255);">
                            <h3 class="text-2xl font-bold mb-4">Anya Petrova</h3>
                            <p class="mb-2"><img style="max-width: 251px;" class="img-fluid"
                                    src="{{ asset('images/Logo_V0.3.png') }}" alt="XYZ's picture"></p>
                            <p style="margin: 5px 0;">Specialty: Divorce Law</p>
                            <p style="margin: 5px 0;">Email: anya.petrova@email.com</p>
                            <p style="margin: 5px 0;">Phone: +352 123 456 789</p>
                            <p style="margin: 5px 0;">Anya Petrova is a compassionate and experienced divorce lawyer with a
                                strong commitment to navigating the complexities of divorce with empathy and understanding.
                                She has a proven track record of success in helping clients achieve their desired outcomes
                                in divorce proceedings, including child custody arrangements, spousal support
                                determinations, and property division agreements. Anya is dedicated to guiding her clients
                                through this challenging time with professionalism, discretion, and a genuine concern for
                                their well-being.
                            </p>
                            <br>
                        </li>
                        {{-- 2 end --}}
                        <br>
                        <li class="list-group-item text-muted" style="background-color: #ffffff !important;">End of Results
                        </li>
                    </ul>
                    {{-- end fake --}}
                    <p class="text-muted mt-4">End of Posts</p>
                @endif
            </div>

            <div class="col-md-4">
                @if (auth()->check())
                    @if (auth()->user()->is_lawyer == 1)
                        <a href="/lawyers/lawyer_dashboard" class="btn btn-primary btn-lg btn-block mt-4">Go to Lawyer
                            Dashboard</a>
                    @else
                        <a href="/client/client_dashboard" class="btn btn-primary btn-lg btn-block mt-4">Go to Client
                            Dashboard</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
