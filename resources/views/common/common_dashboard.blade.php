@extends('layout')

@section('content')
    <div class="container">
        <h1>Welcome to the Common Dashboard, {{ Auth::user()->name }}!</h1>

       
    </div>
@endsection