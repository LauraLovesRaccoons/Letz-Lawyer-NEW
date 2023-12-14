<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;
use Illuminate\Routing\Controller as BaseController;





class AppointmentController extends BaseController
{
    

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

   
 
     private $userController;

    public function __construct(UserController $userController)
    {
        $this->userController = $userController;
    }

    public function create(Request $request)
    {
        return view('appointments.create');
    }

  

    // ...
    
    public function createAppointment(Request $request)
    {
        // Your appointment creation logic here
    
        $userId = auth()->id();
    
        // Assuming you have an Appointment model
        $appointment = new Appointment();
        $appointment->fill($request->all());
        $appointment->start_datetime = now();
        $appointment->end_datetime = now();
        $appointment->user_id = $userId;
        $appointment->save();


        session()->flash('success_message', 'Appointment booked successfully!');

        // Redirect back to the appointments.create view
        return redirect('appointments.create');
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
    public function manage(Request $request)
    {
        return view('appointments.manage');
    }
}
