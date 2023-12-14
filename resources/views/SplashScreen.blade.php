@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 9, 0.8), rgba(0, 0, 10, 0.8)),
                url('{{ asset('images/Logo_V0.3.png') }}');
            background-position: center;
            background-size: cover;
            position: relative;
            font-family: 'Arial', sans-serif;
            color: #82b7d8;
            /* Text color for the form */
        }

        .logo-container {
            text-align: center;
            transition: box-shadow 0.3s;
        }
        #logo {
        width: 400px; /* Increase the size of your logo */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Shadow effect */
        border-radius: 50%; /* Make the image round */
    }

        .buttons-container {
            display: flex;
            flex-direction: column; /* Arrange buttons vertically */
            margin-top: 20px; /* Adjust the top margin for spacing */
        }

        .button {
            margin: 10px;
            padding: 15px 30px; /* Adjust the padding for more space */
            font-size: 18px;
            color: #fff; /* Text color */
            background-color: #82b7d8; /* Button color */
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none; /* Remove underlines from the link */
            display: inline-block;
        }

        .button:hover {
            background-color: #3d5465; /* Button color on hover */
        }
    </style>
    <title>Splash Screen</title>
</head>

<body>
    <div class="logo-container">
        {{-- add logo path here --}}
        <img src="{{ asset('images/Logo_V0.3.png') }}" alt="Letz Lawyer Logo" id="logo">

        <div class="buttons-container" id="buttonsContainer">
            <a href="{{ route('register') }}" class="button"> Welcome to Letz Lawer </a>
        </div>
    </div>

    <script>
        function toggleButtons() {
            var buttonsContainer = document.getElementById('buttonsContainer');
            var logo = document.getElementById('logo');

            if (buttonsContainer.style.display === 'none' || buttonsContainer.style.display === '') {
                buttonsContainer.style.display = 'flex';
                logo.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.8)';
            } else {
                buttonsContainer.style.display = 'none';
                logo.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.5)';
            }
        }
    </script>

</body>

</html>

@endsection
