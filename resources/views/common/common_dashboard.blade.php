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
                <p><img style="width: 157px; box-sizing: border-box; padding: 10px 0;" src="{{ asset('images/Logo_V0.3.png') }}" alt="{{ $user->name }}'s picture is not loading properly."></p>
                <p>{{ $user->email }}</p>
                <a href="/appointments/create" class="btn btn-primary" style="margin: 5px 0;">View Profile</a>
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