@extends('layout')

@section('content')
    {{--      this is for flatpickr       --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{---------------------------------------------------}}
    <br>
    <br>

<!-- sidebar.blade.php -->

<div class="bg-white h-screen w-96 fixed top-0 left-0 flex flex-col items-center p-16 shadow-md" style="display: flex;flex-direction:column;">
    <!-- Avatar Icon (replace with your own) -->
    <img src="https://thispersondoesnotexist.com/" alt="Avatar" class="w-40 h-40 rounded-full mb-4">
    <br>

        <!-- Sidebar Links -->
    <div style="display: flex;flex-direction:column;justify-content:space-between; gap:30px">
        <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-2xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Dashboard</a>
            </div>
            
        </div>
        <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Clients</a>
            </div>
            
        </div>
        <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Lawyers</a>
            </div>
            
        </div>
        <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">MyProfile</a>
            </div>
            
        </div>
        <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Settings</a>
            </div>
            
        </div>
        <br>
        <form method="POST" action="{{-- route('logout') --}}">
            @csrf
            <button type="submit"  style="padding:11px;color:rgb(231, 66, 66);border-radius:20px;" class="text-gray-800 hover:text-gray-600">
                Logout
            </button>
        </form>
    </div>

    
</div>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4" style="text-align:right;justify-content:center;margin-right:200px">
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
<div id="component" style="display: flex;flex-direction:row; justify-content:center">
    <div class="flex items-center w-full justify-center" style="text-align:right;display:flex;flex-direction:column;margin-left:400px;width:600px">

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
    

    
    
    <div class="bg-white shadow-xl rounded-lg py-3" style="text-align:right;min-width:600px;border-radius:50px;height:700px;margin-right:300px;display:flex;flex-direction:column;align-items:center;">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <dotlottie-player src="https://lottie.host/87ecf3c7-46d9-4237-8f55-9acca4299c59/vU7HdT3rjA.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
        <p style="color: #50AD41; font-size:2em;text-align:center">Successfully Submited</p>
        <br>      
        <br>
        <br>  
        <p class="px-4 py-2 text-gray-500 font-semibold">Date and Time:    [Date and Time]</p>
        <p class="px-4 py-2 text-gray-500 font-semibold">myLawyer:       [Amount]</p>
        <p class="px-4 py-2 text-gray-500 font-semibold">Tag:     [Details]</p>
        <p class="px-4 py-2 text-gray-500 font-semibold">Location:      [Venue/Address]</p>
        <p class="px-4 py-2 text-gray-500 font-semibold">Booking Reference:     [Reference Number]</p>
        <br>
        <br>
        <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-base text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Edit</a>
            </div>
            <div class="text-center my-4">
                <a class="text-base text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Dashboard</a>
            </div>
        </div>
    </div>
</div>

@endsection
