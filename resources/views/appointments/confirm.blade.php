@extends('layout')

@section('content')
    {{--      this is for flatpickr       --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{---------------------------------------------------}}
    <br>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4" style="margin-left:233px">
        <!-- Monday -->
        <div class="col-span-1">
            <p class="font-semibold">Lun.</p>
            <p>08:00-12:00</p>
            <p>13:00-17:00</p>
        </div>
    
        <!-- Tuesday -->
        <div class="col-span-1">
            <p class="font-semibold">Mar.</p>
            <p>08:00-12:00</p>
            <p>13:00-17:00</p>
        </div>
    
        <!-- Wednesday -->
        <div class="col-span-1">
            <p class="font-semibold">Mer.</p>
            <p>08:00-12:00</p>
            <p>13:00-17:00</p>
        </div>
    
        <!-- Thursday -->
        <div class="col-span-1">
            <p class="font-semibold">Jeu.</p>
            <p>08:00-12:00</p>
            <p>13:00-17:00</p>
        </div>
    
        <!-- Friday -->
        <div class="col-span-1">
            <p class="font-semibold">Ven.</p>
            <p>08:00-12:00</p>
            <p>13:00-17:00</p>
        </div>
    </div>
<br>
<br>
<br>
<br>
<div id="component" style="display: flex;flex-direction:row;">
    <div class="flex items-center w-full justify-center" style="display:flex;flex-direction:column;margin-left:300px;width:600px">

        <div class="max-w-lg bg-white shadow-xl rounded-lg p-8" style="width:550px;border-radius:50px;height:700px;display:flex;flex-direction:column;justify-content:space-evenly;align-items:center;">
            <div class="photo-wrapper p-4">
                <img class="w-48 h-48 rounded-full mx-auto" src="https://thispersondoesnotexist.com/" alt="John Doe">
            </div>
            <div class="p-4">
                <h3 class="text-center text-3xl text-gray-900 font-medium leading-8">John Doe</h3>
                <div class="text-center text-gray-400 text-sm font-semibold">
                    <p>Attorney</p>
                </div>
                <table class="text-base my-4">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Name</td>
                            <td class="px-4 py-2">Law Firm Sarl</td>
                        </tr>
    
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Description</td>
                            <td class="px-4 py-2">Established since 1983</td>
                        </tr>
    
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Speciality</td>
                            <td class="px-4 py-2">Tax, Health, Criminal</td>
                        </tr>
    
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Langages</td>
                            <td class="px-4 py-2">French, English, Lux</td>
                        </tr>
    
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Location</td>
                            <td class="px-4 py-2">Belval, Esch-sur-Alzette</td>
                        </tr>
    
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Phone</td>
                            <td class="px-4 py-2">+352 691 522</td>
                        </tr>
    
                        <tr>
                            <td class="px-4 py-2 text-gray-500 font-semibold">Email</td>
                            <td class="px-4 py-2">email@example.com</td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="text-center my-4">
                    <a class="text-base text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    

    
    
    <div class="bg-white shadow-xl rounded-lg py-3" style="width:600px;padding:60px;border-radius:50px;height:700px;display:flex;flex-direction:column;justify-content:space-evenly;align-item:center;position:relative">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <dotlottie-player src="https://lottie.host/bb645be0-ad6d-4930-9b31-01d166e870a3/1quFN5fUeg.json" background="transparent" speed="1" style="position:absolute;top:100px;left:150px;width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <br>
        <p style="color: #01ABC0; font-size:2em">Appointment Successfully Booked</p>
        
    </div>
</div>


@endsection
