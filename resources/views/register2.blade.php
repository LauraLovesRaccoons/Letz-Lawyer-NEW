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

    <h1 id="title">Sign Up</h1>
    <form>
        <div class="input-group">
            <div class="input-field" id="nameField">
                <!-- adding an Icons from fontawesome -->
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Name">
            </div>

            <div class="input-field" id="emailField">
                <!-- adding an Icons from fontawesome -->
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email">
            </div>

            <div class="input-field" id="passwordField">
                <!-- adding an Icons from fontawesome -->
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>

            <div class="input-field" id="confirmPasswordField">
                <!-- adding an Icons from fontawesome -->
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Confirm Password">
            </div>

            <!-- maybe we can add this sentence  line 155 -->
            <!-- <p> Lost password <a href="#"> Click Here !</a></p> -->
        </div>
        <div class="btn-field">
            <button type="button" id="signupBtn">Sign Up</button>
            <button type="button" id="signinBtn" class="disable">Sign In</button>
        </div>
    </form>
</div>

<script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let emailField = document.getElementById("emailField");
    let passwordField = document.getElementById("passwordField");
    let confirmPasswordField = document.getElementById("confirmPasswordField");
    let title = document.getElementById("title");

    signinBtn.onclick = function () {
        nameField.style.maxHeight = "0";
        emailField.style.maxHeight = "60px"; // Show the email field
        passwordField.style.maxHeight = "60px";
        confirmPasswordField.style.maxHeight = "0"; // Hide the confirm password field
        title.innerHTML = "Sign In";
        signupBtn.classList.add("disable");
        signinBtn.classList.remove("disable");
    };

    signupBtn.onclick = function () {
        nameField.style.maxHeight = "60px";
        emailField.style.maxHeight = "60px";
        passwordField.style.maxHeight = "60px";
        confirmPasswordField.style.maxHeight = "60px"; // Show the confirm password field
        title.innerHTML = "Sign Up";
        signupBtn.classList.remove("disable");
        signinBtn.classList.add("disable");
    };

     
    function goBack() {
        window.location.href = "splashscreen.php";
        }
</script>

</body>
</html>
@endsection