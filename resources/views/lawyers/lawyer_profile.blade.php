@extends('layout')

@section('content')
    <h1 class="display-4" style="margin-left: 10px;">This is your lawyer profile page</h1>
    <br>
    <div style="padding: 2px; margin: 15px 0px;">
    <ul class="list-group" style=
    "background-color: #b8c9a4 !important;">
        {{-- 1 --}}
        <li class="list-group-item" style="background-color: rgb(245, 245, 245) !important;">
            <h3 class="text-2xl font-bold mb-4">Henry Masterlawyer</h3>
            <p class="mb-2"><img style="max-width: 251px;" class="img-fluid" src="{{ asset('images/Logo_V0.3.png') }}"
                    alt="XYZ's picture"></p>
            <p style="margin: 5px 0;">Specialty: Family Law</p>
            <p style="margin: 5px 0;">Email: henry@email.com</p>
            <p style="margin: 5px 0;">Phone: +352 123 456</p>
            <p style="margin: 5px 0;">Henry is a resolute and seasoned divorce lawyer with an unwavering commitment to navigating the intricacies of divorce with empathy and decisiveness. He possesses a proven track record of success in guiding clients through the complex process of divorce, ensuring that their legal rights and interests are safeguarded. Henry's dedication to professionalism, integrity, and client advocacy has earned him a reputation as a trusted advisor and formidable advocate in the legal arena.
            </p>
            <br>
        </li>
        {{-- 1 end --}}

    </ul>
    {{-- end fake --}}
</div>
    <br>
    {{-- return --}}
    <div class="mb-6">
        <a href="/lawyers/lawyer_dashboard" class="text-black ml-4" style="background-color:#007bff; padding: 5px; margin: 2px; border-radius: 10px; margin-left: 10px;"><span style="color:#f8f9fa;">Edit your profile</span></a>
    </div>
@endsection
