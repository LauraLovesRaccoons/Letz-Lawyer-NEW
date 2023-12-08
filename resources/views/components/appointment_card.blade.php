@props(['appointments'])

<x-card>


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

</x-card>