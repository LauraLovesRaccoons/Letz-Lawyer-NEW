@extends('Layout')
@section('title','login')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <style>
         body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #c3b8b8f8;
            background-image: linear-gradient(rgba(0,0,9,0.8),rgba(0,0,10,0.8)),url(pic/Firefly_mate_i_need_a_logo_for_a_lawyer_appointement_app_in_luxembourg_keep_it_simple_stupid_and_16b\(2\).jpg) ;
            background-position: center;
            background-size: cover;
            position: relative;
            font-family: 'Arial', sans-serif;
            color: #82b7d8; /* Text color for the form */
        }

        .form-box {
            width: 90%;
            max-width: 450px;
            margin: auto; /* Center the form box horizontally */
            background: #fff;
            padding: 50px 60px 70px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-box h1::after {
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #82b7d8;
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translate(-50%);
        }

        form p {
            text-align: left;
            font-size: 13px;
            color: black;
        }

        form p a {
            text-decoration: none;
            color: #82b7d8;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-field {
            margin-bottom: 20px;
            position: relative;
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;
        }

        .input-field input {
            width: 100%;
            padding: 18px 15px;
            border: none;
            border-bottom: 2px solid #82b7d8; /* Line color under the input */
            outline: 0;
            background: transparent;
        }

        .btn-field button.disable {
            background: #eaeaea;
            color: #555;
        }

        .input-group {
            height: 370px;
        }

        .btn-field {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn-field button {
            flex-basis: 48%;
            background: #82b7d8;
            color: #fff;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background 1s;
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            color: #82b7d8;
            margin-left: 15px;
        }


        .btn-back {
            background: #eaeaea;
            color: #555;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background 1s;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }

        .btn-back i {
            margin-right: 0px;
        }

        .btn-back:hover {
            background: #5a8fa8; /* Change color on hover if desired */
        }

     

    </style>
</head>
<body>

    <div class="form-box">

        <button class="btn-back" onclick="goBack()"><i class="fas fa-arrow-left-long"></i> Go Back</button>

        <!-- Sign Up Form -->
        <h1 id="title">Sign Up</h1>
        <form action="{{ route('register') }}" method="post">
            <div class="mb-6">
                <label for="is_lawyer" class="inline-block text-lg mb-2">Are you a lawyer?</label>
                <input type="checkbox" id="is_lawyer" name="is_lawyer" value="1" {{ old('is_lawyer') ? 'checked' : '' }}>
            </div>
            @csrf
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field" id="emailField">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field" id="passwordField">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>

                <div class="input-field" id="confirmPasswordField">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="btn-field">
                    <button type="submit" id="signupBtn" name="action" value="signup">Sign Up</button>
                </div>
            </div>
        </form>

        <!-- Sign In Form -->
        <h1 id="title">Sign In</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group">
                <div class="input-field" id="signInEmailField">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field" id="signInPasswordField">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="btn-field">
                    <button type="submit" id="signinBtn" name="action" value="signin">Sign In</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function goBack() {
            window.location.href ="/";
        }
    </script>

</body>
</html>


@endsection
