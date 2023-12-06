@extends('layout')

@section('content')
    {{--      this is for flatpickr       --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{---------------------------------------------------}}
    
<div style="border: solid 2px black;width:100px;">
    <h2>Lawyer name :{{-- {{ $lawyer->name }} --}}</h2>
    <p>Email: {{-- {{ $lawyer->email }} --}}</p>
    <p>Phone:{{--  {{ $lawyer->phone }} --}}</p>
</div>        
<br>
<br>

<!-- Add more details as needed -->
<form method="post">
    <input type="date" id="datePicker" name="selectedDate" class="form-input">
    <br>
    <button type="submit">Take an Appointment</button>
</form>    


<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#datePicker", {
            // Additional options if needed
            // enableTime: true,
            // dateFormat: "Y-m-d H:i",
            // ...

            // Open the calendar when the page loads
            open: true,
        });
    });
</script>

@endsection
