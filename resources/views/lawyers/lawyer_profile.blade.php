@extends('layout')

@section('content')
    <h1 class="display-4" style="margin-left: 10px;">This is your lawyer profile page</h1>
    <br>
    <ul class="list-group" style="background-color: #b8c9a4 !important;">
        {{-- 1 --}}
        <li class="list-group-item" style="background-color: rgb(162, 197, 243) !important;">
            <h3 class="text-2xl font-bold mb-4">Henry Masterlawyer</h3>
            <p class="mb-2"><img style="max-width: 251px;" class="img-fluid" src="{{ asset('images/Logo_V0.3.png') }}"
                    alt="XYZ's picture"></p>
            <p style="margin: 5px 0;">Specialty: Family Law</p>
            <p style="margin: 5px 0;">Email: henry@email.com</p>
            <p style="margin: 5px 0;">Phone: +352 123 456</p>
            <p style="margin: 5px 0;">Henry is a passionate and experienced lawyer with a
                strong commitment to justice and client satisfaction. She has a proven track record of
                success in a variety of legal matters, including family law, personal injury, and criminal
                defense. Anya is known for her compassionate approach to her clients, her strategic
                thinking, and her ability to achieve positive outcomes in even the most challenging cases.
            </p>
            <br>
        </li>
        {{-- 1 end --}}

    </ul>
    {{-- end fake --}}

    <br>
    {{-- return --}}
    <div class="mb-6">
        <a href="/lawyers/lawyer_dashboard" class="text-black ml-4" style="background-color:#007bff; padding: 5px; margin: 2px; border-radius: 10px;"><span style="color:#f8f9fa;">Edit your profile</span></a>
    </div>
@endsection
