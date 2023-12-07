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
            background: #f0f0f0; /* Background color for the shadow */
            background-image: linear-gradient(rgba(0,0,9,0.8),rgba(0,0,10,0.8)),url({{ asset('images/Logo_V0.3.png') }}) ;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .logo-container {
            position: relative;
            cursor: pointer;
            text-align: center; /* Center the logo and buttons */
        }

        .logo-container img {
            width: 550px; /* Adjust the size of your logo */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Shadow effect */
            border-radius: 50%; /* Make the image round */
            transition: box-shadow 0.3s;
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
        }

        .button:hover {
            background-color: #3d5465; /* Button color on hover */
        }
    </style>
    <title>Splash Screen</title>
</head>
<body>
    <div class="logo-container" >
        {{-- add logo path here --}}
        <img src="{{ asset('images/Logo_V0.3.png') }}"  id="logo">


        <div class="buttons-container" id="buttonsContainer">
            <button class="button" onclick="goToPage('Clients.html')">Clients</button>
            <button class="button" onclick="goToPage('Lawyers.html')">Lawyers</button>
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

        function goToPage(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>

@endsection
