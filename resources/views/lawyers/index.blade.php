@extends('layout')
{{-- this "layout" is form our layout.blade.php --}}
{{-- see it as a class inheritance --}}

@section('content')
{{-- "content" refers to the name given in the @yield of layout.blade.php --}}
{{-- don't forget the @endsection at the end ;) --}}

@include('partials._hero')
{{-- this is how we include a partial --}}

@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@if (count($lawyers) == 0)
    <p>No listing found</p>
@endif

@foreach ($lawyers as $lawyer)
{{-- :listing passes the current listing data to the component --}}
{{-- that way, listing-card can display the data dynamically --}}
    <x-lawyer-card class="bg-color-black" :lawyer="$lawyer" />
@endforeach
</div>

<div class="mt-6 p-4">
    {{$lawyers->links()}}
</div>
<a href="{{ route('search') }}">Search Lawyers</a>
@endsection
