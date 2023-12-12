@extends('layout')

@section('content')
    <h1>Welcome to the Client Dashboard, {{ Auth::user()->name }}!</h1>


    </div>

    <div style="padding: 55px; max-width: 450px;"> {{-- design padding and width limit for select specality --}}


        <br>
        {{-- For now I'm doing a query that just checks for the name in the user's table and checks for is lawyer = true --}}
        {{-- smth like this - WORKING QUERY --}}
        {{-- SELECT * FROM users WHERE name = 'Laura' AND is_lawyer = 1; --}}

        <form method="POST" action="/search">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter lawyer's name"
                    class="border border-gray-300 rounded-md p-2">
            </div>
            <br>

            <div class="mb-6">
                <label for="specialty" class="inline-block text-lg mb-2">Select Specialties</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="specialty">
                    <option value="" selected disabled hidden>Select specialty</option>
                    <option value="2">Family Law</option>
                    <option value="3">Criminal Law</option>
                    <option value="4">Civil Law</option>
                    <option value="5">Intellectual Property Law</option>
                    <option value="6">Real Estate Law</option>
                    <option value="7">Tax Law</option>
                    <option value="8">Immigration Law</option>
                    <option value="9">Labor and Employment Law</option>
                    <option value="10">Health Law</option>
                    <option value="11">Environmental Law</option>
                    <option value="12">Bankruptcy Law</option>
                    <option value="13">Personal Injury Law</option>
                    <option value="14">Estate Planning Law</option>
                    <option value="15">Business Law</option>
                    <option value="16">Entertainment Law</option>
                    <option value="17">Sports Law</option>
                    <option value="18">Fashion Law</option>
                    <option value="19">Art Law</option>
                    <option value="20">Education Law</option>
                    <option value="21">Government Law</option>
                    <option value="22">International Law</option>
                    <option value="23">Non-Profit Law</option>
                    <option value="24">Intellectual Property</option>
                    <option value="25">Technology Law</option>
                    <option value="26">Media Law</option>
                    <option value="27">Telecommunications Law</option>
                    <option value="28">Energy Law</option>
                    <option value="29">Construction Law</option>
                    <option value="30">Transportation Law</option>
                    <option value="31">Agriculture Law</option>
                    <option value="32">Corporate Lawyer</option>
                    <option value="33">Mergers and Acquisitions Lawyer</option>
                    <option value="34">Finance Lawyer</option>
                    <option value="35">Securities Lawyer</option>
                    <option value="36">Banking Lawyer</option>
                    <option value="1">Other</option>
                </select>
                @error('specialty')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter location"
                    class="border border-gray-300 rounded-md p-2">
            </div>
            <br>

            <input type="submit" value="Find your lawyer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>

    </div> {{-- end of design padding and width limit for select specality --}}
@endsection
