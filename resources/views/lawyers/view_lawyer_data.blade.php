@extends('layout')

@section('content')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">This is your Lawyer Profile</h2>
        </header>

        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name / Your Name</label>
            <input type="text" value="{{ $lawyer->company }}" class="border border-gray-200 rounded p-2 w-full" disabled />
        </div>

        <div class="mb-6">
            <label for="specialty" class="inline-block text-lg mb-2">Selected Specialties</label>
            <ul>
                @foreach ($lawyer->specialties as $specialty)
                    <li>{{ $specialty->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Your Location</label>
            <input type="text" value="{{ $lawyer->location }}" class="border border-gray-200 rounded p-2 w-full"
                disabled />
        </div>

        <div class="mb-6">
            <label for="languages" class="inline-block text-lg mb-2">Languages you speak</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" rows="6" disabled>{{ $lawyer->languages }}</textarea>

        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
            <input type="text" value="{{ $lawyer->email }}" class="border border-gray-200 rounded p-2 w-full" disabled />
        </div>

        <div class="mb-6">
            <label for="phone" class="inline-block text-lg mb-2">Contact Phone Number</label>
            <input type="text" value="{{ $lawyer->phone }}" class="border border-gray-200 rounded p-2 w-full" disabled />
        </div>

        {{-- website - can be NULL in db --}}
        <div class="mb-6">
            <label for="url" class="inline-block text-lg mb-2">Website URL</label>
            <input type='url' value='{{ $lawyer->url ?? "You have no website" }}'   {{-- ?? means if empty display that 'string' --}}
                class="border border-gray-200 rounded p-2 w-full" disabled />
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">Company Logo / Your Photo</label>
            <img src="{{ asset('images/' . $lawyer->logo) }}" alt="{{ $lawyer->company }}" class="w-24 logo">
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">About me</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" rows="6" disabled>{{ $lawyer->description }}</textarea>
        </div>

        {{-- Edit and Delete buttons --}}
        <div class="flex justify-between items-center">
            <a href="/lawyers/{{ $lawyer->id }}/edit" class="button">Edit your lawyer profile</a>
            <form method="POST" action="/lawyers/{{ $lawyer->id }}">
                @csrf
                @method('DELETE')
                <button class="button"><strong>DELETE ACCOUNT - PERMANENTLY</strong></button>
            </form>


    </x-card>
@endsection
