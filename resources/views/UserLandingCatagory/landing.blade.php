<!-- resources/views/UserLandingCatagory/landing.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file for your app -->

@section('content')
    <h2>Welcome to the Landing Page</h2>

    <form method="POST" action="{{ route('lawyer.search.submit') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter name">
        </div>
        <div>
            <label for="specialty">Specialty:</label>
            <select id="specialty" name="specialty">
                <option value="">Select Specialty</option>
                @foreach($specialties as $specialty)
                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" placeholder="Enter location">
        </div>
        <input type="hidden" name="redirect_url" value="{{ route('category') }}">
        <button type="submit">Search</button>
    </form>
@endsection
