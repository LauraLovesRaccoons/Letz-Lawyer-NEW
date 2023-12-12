@extends('layout')

@section('content')
    <div class="container">
        <h1>Welcome to the Common Dashboard, {{ Auth::user()->name }}!</h1>

    </div>

    <div style="margin-left: 20px;">
    <br>
    <h2>All Lawyer Posts:</h2>
    <br>
    <hr>
    <br>
    <ul>
        @foreach ($results as $user)
            <li>
                <h3>{{ $user->name }}</h3>
                <p>{{ $user->email }}</p>
                {{-- <p>{{ $post->description }}</p>
                <p>{{ $post->email }}</p>
                <p>{{ $post->location }}</p> --}}
                <br>
                <hr>
                <br>
            </li>
        @endforeach
        <h4>End of Results</h4>
    </ul>
    <br>

    @if (auth()->user()->is_lawyer ==1)
        <a href="/lawyers/lawyer_dashboard" class="btn btn-primary">Go to Lawyer Dashboard</a>
    @else
        <a href="/client/client_dashboard" class="btn btn-primary">Go to Client Dashboard</a>
    @endif
</div>

   

@endsection