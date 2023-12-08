@extends('layout')

@section('content')

<div style="padding: 50px;">
    <h2 class="text-3xl mb-4">Search Results</h2>

    @if($lawyers->isEmpty())
        <p>No lawyers found matching your search criteria.</p>
    @else
        <ul>
            @foreach($lawyers as $lawyer)
                <li>{{ $lawyer->name }} - {{ $lawyer->specialty }} - {{ $lawyer->location }}</li>
            @endforeach
        </ul>
    @endif

</div>

@endsection
