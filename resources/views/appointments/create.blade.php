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
    <div class="flex items-center w-full justify-center" style="display:flex;flex-direction:column;">

        <div class="max-w-lg bg-white shadow-xl rounded-lg p-8" style="width:550px;border-radius:50px;height:700px;display:flex;flex-direction:column;justify-content:space-evenly;align-items:center;">
            <div class="photo-wrapper p-4">
                <img class="w-48 h-48 rounded-full mx-auto" src="https://thispersondoesnotexist.com/" alt="John Doe">
            </div>
            <div class="p-4">
                <h3 class="text-center text-2xl text-gray-900 font-medium leading-8">John Doe</h3>
                <div class="text-center text-gray-400 text-sm font-semibold">
                    <p>Attorney</p>
                </div>
                <table class="text-sm my-4">
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
                    <a class="text-sm text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    

    
    
    <form method="POST" class="bg-white shadow-xl rounded-lg py-3" style="width:600px;padding:60px;border-radius:50px;height:700px;display:flex;flex-direction:column;justify-content:space-evenly;align-item:center;">
        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input 
                type="date" 
                name="selectedDate" 
                id="datePicker" 
                class="form-input block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                style="color:black;text-align:center;"
                required />
            <label 
                for="selectedDate" 
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Date
            </label>
        </div>
        
        
        <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
        </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
        </div>
        </div>
        <div class="relative inline-flex items-end" style="margin-left:100px">
            <button type="submit" class="relative bg-gradient-to-r from-sky-600 to-cyan-200 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#datePicker", {
            // Additional options if needed

            
            // enableTime: true,
            dateFormat: "j F , Y",
         
            // Open the calendar when the page loads
            open: true,
        });
    });
</script>

@endsection
