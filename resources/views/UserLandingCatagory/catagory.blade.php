@extends('layout')

@section('content')

<div style="padding: 100px;">
    <h2 class="text-3xl">Lawyers in the Selected Category</h2>
    
    @if(isset($lawyers) && count($lawyers) > 0)
        <ul>
            @foreach($lawyers as $lawyer)
                <li>
                    <h3>{{ $lawyer->name }}</h3>
                    <p>Location: {{ $lawyer->location }}</p>
                    <p>Specialty: {{ $lawyer->specialty }}</p>
                    <!-- Include other lawyer details here -->
                </li>
            @endforeach
        </ul>
    @else
        <p>No lawyers found in this category.</p>
    @endif

</div>

@endsection
