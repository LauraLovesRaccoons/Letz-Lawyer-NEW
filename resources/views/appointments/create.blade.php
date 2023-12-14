@extends('layout')

@section('content')
    {{--      this is for flatpickr       --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{---------------------------------------------------}}
    <br>
    <br>
    <!-- Add this to your Blade file within the <head> section or include it in your stylesheet -->
<style>
    .alert {
        padding: 1em;
        margin: 1em 0;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
</style>

    

<!-- sidebar.blade.php -->

{{-- <div class="bg-white h-screen w-96 fixed top-0 left-0 flex flex-col items-center p-16 shadow-md" style="display: flex;flex-direction:column;"> --}}
    <!-- Avatar Icon (replace with your own) -->
    {{-- <img src="https://thispersondoesnotexist.com/" alt="Avatar" class="w-40 h-40 rounded-full mb-4">
    <br> --}}

        <!-- Sidebar Links -->
    {{-- <div style="display: flex;flex-direction:column;justify-content:space-between; gap:30px">
        </div> --}}
        {{-- settings link --}}
        {{-- <div style="display:flex;flex-direction: row ; gap:77px">
            <div class="text-center my-4">
                <a class="text-xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="/appointments/manage">Settings</a>
            </div>
        </div>
        <br> --}}
        {{-- settings link --}}
        {{-- route('logout') --}}
        {{-- <form method="POST" action="">
            @csrf
            <button type="submit"  style="padding:11px;color:rgb(231, 66, 66);border-radius:20px;" class="text-gray-800 hover:text-gray-600">
                Logout
            </button>
        </form> --}}
    {{-- </div> --}}

    
</div>
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
    <div class="flex items-center w-full justify-center" style="display:flex;flex-direction:column;margin-left:400px;width:600px">

        <div class="max-w-lg bg-white shadow-xl rounded-lg p-8" style="width:550px;border-radius:50px;height:700px;display:flex;flex-direction:column;justify-content:space-evenly;align-items:center;">
            <div class="photo-wrapper p-4">
                {{-- <img class="w-48 h-48 rounded-full mx-auto" src="https://thispersondoesnotexist.com/" alt="John Doe"> --}}
                <img class="w-48 h-48 rounded-full mx-auto" src="{{ asset('images/Logo_V0.3.png') }}" alt="'s picture is not loading properly.">
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
                            <td class="px-4 py-2">+352 691 123 456</td>
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

                
                {{-- settings link --}}
                {{-- <div style="display:flex;flex-direction: row ; gap:77px"> --}}
                    <div class="text-center my-4">
                        <a class="text-xl text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="/appointments/manage">Settings</a>
                    </div>
                {{-- </div> --}}
                <br>
                {{-- settings link --}}

            </div>
        </div>
    </div>
    
   
  
    
    <form id="appointmentsForm" action="{{ route('appointments.create') }}" method="GET" enctype="multipart/form-data" class="bg-white shadow-xl rounded-lg py-3" style="width:600px;padding:60px;border-radius:50px;height:700px;display:flex;flex-direction:column;justify-content:space-evenly;align-item:center;">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input 
                type="date" 
                name="selectedDate" 
                id="datePicker" 
                class="form-input block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                style="color:black;text-align:center;"
                required />
            <label 
                for="selectedDate" 
                class="peer-focus:font-medium absolute text-2xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Date
            </label>
        </div>
        
        
        <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_first_name" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_last_name" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
        </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <input type="tel" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
            <label for="floating_phone" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
        </div>
   
        <div class="relative inline-flex items-end" style="margin-left:100px">
            <button type="submit" class="relative bg-gradient-to-r from-sky-600 to-cyan-200 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Book Now
                <span class="absolute inline-flex h-3 w-3 top-0 right-0">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                </span>
            </button>
        </div>

    </form>
   
</div>
<br>
  

@endsection