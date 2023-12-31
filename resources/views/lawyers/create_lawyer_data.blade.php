@extends('layout')


@section('content')
    
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create your Lawyer profile
            </h2>
        </header>

        <form action="/lawyers" method="post" enctype="multipart/form-data">
            {{-- this directive will be in all laravel forms --}}
            {{-- it prevents cross site scripting attacks --}}
            {{-- basically people stealing our form and messing with it --}}
            @csrf

            {{-- Company Name / Lawyer Name --}}
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name / Your Name</label>
                <input type="text" value="{{ old('company') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="company" />
                @error('company')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Specialty --}}
            <div class="mb-6">
                <label for="specialty" class="inline-block text-lg mb-2">Select Specialties</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="specialty" size="6">
                    <option value="0" data-id="0" selected disabled hidden>Select 1 specialty</option>
                    <option value="2" data-id="2">Family Law</option>
                    <option value="3" data-id="3">Criminal Law</option>
                    <option value="4" data-id="4">Civil Law</option>
                    <option value="5" data-id="5">Intellectual Property Law</option>
                    <option value="6" data-id="6">Real Estate Law</option>
                    <option value="7" data-id="7">Tax Law</option>
                    <option value="8" data-id="8">Immigration Law</option>
                    <option value="9" data-id="9">Labor and Employment Law</option>
                    <option value="10" data-id="10">Health Law</option>
                    <option value="11" data-id="11">Environmental Law</option>
                    <option value="12" data-id="12">Bankruptcy Law</option>
                    <option value="13" data-id="13">Personal Injury Law</option>
                    <option value="14" data-id="14">Estate Planning Law</option>
                    <option value="15" data-id="15">Business Law</option>
                    <option value="16" data-id="16">Entertainment Law</option>
                    <option value="17" data-id="17">Sports Law</option>
                    <option value="18" data-id="18">Fashion Law</option>
                    <option value="19" data-id="19">Art Law</option>
                    <option value="20" data-id="20">Education Law</option>
                    <option value="21" data-id="21">Government Law</option>
                    <option value="22" data-id="22">International Law</option>
                    <option value="23" data-id="23">Non-Profit Law</option>
                    <option value="24" data-id="24">Intellectual Property</option>
                    <option value="25" data-id="25">Technology Law</option>
                    <option value="26" data-id="26">Media Law</option>
                    <option value="27" data-id="27">Telecommunications Law</option>
                    <option value="28" data-id="28">Energy Law</option>
                    <option value="29" data-id="29">Construction Law</option>
                    <option value="30" data-id="30">Transportation Law</option>
                    <option value="31" data-id="31">Agriculture Law</option>
                    <option value="32" data-id="32">Corporate Lawyer</option>
                    <option value="33" data-id="33">Mergers and Acquisitions Lawyer</option>
                    <option value="34" data-id="34">Finance Lawyer</option>
                    <option value="35" data-id="35">Securities Lawyer</option>
                    <option value="36" data-id="36">Banking Lawyer</option>
                    {{-- 1 is other if someone messes with stuff as well as for stuff that isn't listed here --}}
                    <option value="1" data-id="1">Other</option>
                    {{-- not selected is an empty entry will be handled below --}}
                </select>
                @error('specialty')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                {{-- Laura's special function --}}
                {{-- Move to controller --}}
                {{-- @php
                    // ! Why 13? because this ensure everyone has a 0 for a no specialty search
                    // This uses the Laravel count function and this php script makes it so that if less than 12 (13 technically) specialties are selected, it will fill the remaining entries with 0 instead of NULL for the db because data integrity mate
                    // Get the number of selected specialties
                    $selectedSpecialtiesCount = count($request->get('specialty'));
                    // count the number of non selected entries
                    $remainingEntries = 13 - $selectedSpecialtiesCount; // 13 because 12 is the max number of specialties and 13 is non selected for the search function
                                                                        // -> resulting in everyone having at least one 0 in their specialty array
                    // Fill the remaining entries with 0                -> including the 13th entry
                    for ($i = 1; $i <= $remainingEntries; $i++) {
                        $request->merge(['specialty' => ['0']]);
                    }
                @endphp --}}
            </div>


            {{-- Location --}}
            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Your Location</label>
                <input type="text" value="{{ old('location') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="location" placeholder="Example: 666 Route d'Esch, Belvaux, Luxembourg" />
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Languages --}}
            <div class="mb-6">
                <label for="languages" class="inline-block text-lg mb-2">Languages you speak</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="languages" rows="2"
                    placeholder="Example: Luxembourg, English, German, French, Dutch, Romanian - type in manually.">{{ old('languages') }}</textarea>
                @error('languages')
                    <p class="text-red-500 text-xs m-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Contact Email --}}
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" value="{{ old('email') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="email" placeholder="Example: yourbusiness@email.lu" />
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Contact Phone Number --}}
            {{-- Make it so it's saved properly so you can click on it in the browser --}}
            <div class="mb-6">
                <label for="phone" class="inline-block text-lg mb-2">Contact Phone Number</label>
                <input type="text" value="{{ old('phone') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="phone" placeholder="Example: +352 00 00 00" />
                @error('phone')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Company Logo / Lawyer Photo --}}
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo / Your Photo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description / About Me --}}
            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    About me
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="6"
                    placeholder="I'm Narelle Baker a divorce lawyer with 20 years of experience. I did my college in Melbourne at the University of fine lawyers. I'm well versed in international divorce laws with a focus on Luxembourg. etc.">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs m-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Website --}}
            {{-- this is optional (nullable) --}}
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL (Optional)
                </label>
                <input type="text" value="{{ old('website') }}" class="border border-gray-200 rounded p-2 w-full"
                    name="website" nullable />
                @error('website')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>



            {{-- Submit Button --}}
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Upload Lawyer Profile
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
   
@endsection
