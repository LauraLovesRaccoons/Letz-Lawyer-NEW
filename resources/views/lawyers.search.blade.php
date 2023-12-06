{{-- lawyers.search.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>

    {{-- Display search filters --}}
    <p>Category: {{ $selectedCategory ? $categories->find($selectedCategory)->name : 'All Categories' }}</p>
    <p>Name: {{ $searchName ?: 'All Names' }}</p>

    {{-- Display search results --}}
    @foreach($lawyers as $lawyer)
        <p>{{ $lawyer->name }} - {{ $lawyer->company }} - {{ $lawyer->location }}</p>
    @endforeach
@endsection
