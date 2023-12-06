<!-- resources/views/welcome.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file for your app -->

@section('content')
    <form method="POST" action="{{ route('lawyer.search.submit') }}">
        @csrf
        <h2>Search for a Lawyer</h2>
        {{-- <input type="radio" name="search_type" value="search"> Search --}}
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter name">
        </div>
        <p>
            <span>OR</span>
        </p>
        <div>
            {{-- Double check with Laura --}}
            <label for="specialty">Specialty:</label>
            <select id="specialty" name="specialty">
                <option value="">Select Specialty</option>
                @foreach ($specialties as $specialty)
                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                @endforeach
            </select>
            {{-- end db data --}}
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" placeholder="Enter location">
        </div>
        <button type="submit">Search</button>
    </form>
@endsection
