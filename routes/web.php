<?php


use App\Models\Appointment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\YourController;
// use Google\Service\ToolResults\SplashScreenController ;
// this use will be to SplashScreen.blade.php ,  is it correct ?  / Mai :)
use App\Http\Controllers\SplashScreenController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes:
// index - Show all appointments
// show - Show single Appointment
// create - Show form to create new Appointment
// store - Store new Appointment in database
// edit - Show form to edit Appointment
// update - Update Appointment in database
// destroy - Delete Appointment from database

//*Appointment Routes
//All appointments
Route::get('/register', [UserController::class, 'create']);

//Single Appointment fetched by id in the url
Route::get('/appointments/{id}',[appointmentController::class, 'show'])
    ->where('id', '[0-9]+');

//show create form
//Added middleware to prevent access to create form if not logged in
Route::get('/appointments/create', [ AppointmentController::class, 'create']);

//Add Appointment to database
Route::post('/appointments', [AppointmentController::class, 'store'])->middleware('auth');

//Show edit form
Route::get('/appointments/{id}/edit',[AppointmentController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

//Update Appointment
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

//Delete Appointment
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/appointments/manage', [AppointmentController::class, 'manage'])->middleware('auth');

//*Using the User controller now

//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//first registration page
// Route::get('/users/register', [UserController::class, 'create'])->middleware('guest'); 


//Add user to database
Route::post('/users',[UserController::class, 'store'])->middleware('guest');

//Logout from user session
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
//Added a name to the route so that we can use it through middleware
Route::get('/login', [UserController::class, 'login'])
    ->name('login')
    ->middleware('guest');

//log user in
Route::post('/users/login', [UserController::class, 'authenticate'])->middleware('guest');



//*Small fix. This route is used to catch any external links and redirect to them without getting stuck in the app.
Route::get('/external-link', function(){
    $url = request('url');
    return redirect()->away(url($url));
});


Route::get('/landing', function () {
    $specialties = Category::all(); // Fetch specialties from the database

    return view('UserLandingCatagory.landing', compact('specialties'));
});

Route::post('/search', 'LawyerController@search')->name('lawyer.search.submit');

Route::get('/category', function () {
    return view('category');
});

// routes/web.php



Route::get('/lawyers/search', [LawyerController::class, 'search'])->name('lawyers.search');



// this Route will be to SplashScreen.blade.php ,  is it correct ?  / Mai :)

Route::get('/SplashScreen', [SplashScreenController::class, 'firstPage']);


