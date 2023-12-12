<?php

namespace App\Http\Controllers;





use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;





class AppointmentController extends BaseController
{
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
 
     public function createForm()
     {
         return view('appointments.create');
     }
 
     public function create(Request $request)
     {
         // Your appointment creation logic here
         // ...
 
         // Assuming you have an Appointment model
         $appointment = new Appointment();
         $appointment->fill($request->all());
         $appointment->save();
 
         // Redirect to the confirmation page with the appointment ID
         return redirect()->route('appointments.confirm', ['id' => $appointment->id]);
     }
 
     public function confirm($id)
     {
         // Fetch the appointment by ID
         $appointment = Appointment::findOrFail($id);
 
         return view('appointments.confirm', compact('appointment'));
     }
    public function manage()
    {
        return view('appointments.manage');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
