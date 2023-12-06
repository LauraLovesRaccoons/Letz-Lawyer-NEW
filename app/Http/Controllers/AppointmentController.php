<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.show', compact('appointment'));
    }
}
