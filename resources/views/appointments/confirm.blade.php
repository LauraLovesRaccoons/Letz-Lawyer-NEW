@extends('layout')

@section('content')
    {{-- Flatpickr Styles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <!-- Sidebar -->
    @include('sidebar')

    <!-- Main Content -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4" style="text-align:right; justify-content:center; margin-right:200px">
        <!-- Days Schedule -->
        @foreach (['Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.'] as $day)
            <div class="col-span-1">
                <p class="font-semibold">{{ $day }}</p>
                <p>08:00-12:00</p>
                <p>13:00-17:00</p>
            </div>
        @endforeach
    </div>

    <!-- Main Content -->
    <div id="component" style="display: flex;flex-direction:row; justify-content:center">
        <!-- User Profile -->
        <div class="flex items-center w-full justify-center" style="text-align:right; display:flex; flex-direction:column; margin-left:400px; width:600px">
            <!-- Profile Details -->
            <div class="max-w-lg bg-white shadow-xl rounded-lg p-8" style="width:550px; border-radius:50px; height:700px; display:flex; flex-direction:column; justify-content:space-evenly; align-items:center;">
                <!-- User Photo -->
                <div class="photo-wrapper p-4">
                    <img class="w-48 h-48 rounded-full mx-auto" src="https://thispersondoesnotexist.com/" alt="John Doe">
                </div>
                <!-- User Information Table -->
                <div class="p-4">
                    <h3 class="text-center text-3xl text-gray-900 font-medium leading-8">John Doe</h3>
                    <!-- Additional User Details -->
                    <table class="text-base my-4">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 text-gray-500 font-semibold">Name</td>
                                <td class="px-4 py-2">Law Firm Sarl</td>
                            </tr>
                            <!-- Add more user details here -->
                        </tbody>
                    </table>
                    <!-- View Profile Link -->
                    <div class="text-center my-4">
                        <a class="text-base text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submission Confirmation -->
        <div class="bg-white shadow-xl rounded-lg py-3" style="text-align:right; min-width:600px; border-radius:50px; height:700px; margin-right:300px; display:flex; flex-direction:column; align-items:center;">
            <!-- Lottie Animation -->
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
            <dotlottie-player src="https://lottie.host/87ecf3c7-46d9-4237-8f55-9acca4299c59/vU7HdT3rjA.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
            <!-- Submission Details -->
            <p style="color: #50AD41; font-size:2em;text-align:center">Successfully Submitted</p>
            <br>      
            <!-- Add submission details here -->
            <br>
            <!-- Edit and Dashboard Links -->
   
