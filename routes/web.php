<?php


use App\Models\User;
use App\Models\Category;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use Google\Service\ToolResults\SplashScreenController ;
// this use will be to SplashScreen.blade.php ,  is it correct ?  / Mai :)
use App\Http\Controllers\YourController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommonController;

use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AppointmentController;
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



//routers for user's registration and log in
// Splash Screen
Route::get('/', [SplashScreenController::class, 'firstPage'])->name('SplashScreen');


Route::get('/common/common_dashboard', [CommonController::class, 'showDashboard'])->name('common.dashboard');

Route::middleware(['auth', 'role:lawyer'])->group(function () {
    Route::get('/lawyers/lawyer_dashboard', [LawyerController::class, 'showLawyerDashboard'])->name('lawyers.lawyer_dashboard');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/client_dashboard', [CommonController::class, 'clientDashboard'])->name('client.client_dashboard');
});
Route::post('/search', [CommonController::class, 'search'])->name('lawyer.search.submit');

// Use a different path for the second common dashboard route



Route::get('/client/client_dashboard', [CommonController::class, 'clientDashboard']);
Route::get('/lawyers/lawyer_dashboard', [CommonController::class, 'lawyerDashboard']);
// Lawyer Dashboard Route


// Route::middleware(['auth', 'role:lawyer'])->group(function () {
//     Route::get('/lawyers/lawyer_dashboard', 'LawyerController@showLawyerDashboard');
//     // Add more routes for lawyers as needed
// });





Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// routes/web.php

Route::get('/client/dashboard', [ClientController::class,'dashboard'])->name('client.client_dashboard');
Route::get('/lawyers/lawyer_dashboard', [LawyerController::class,'showLawyerDashboard'])->name('lawyers.lawyer_dashboard');


// User Login // changed to login controller
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');


Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


//landing for client
Route::get('/landing', [LandingController::class, 'showLandingPage'])->name('landing');
Route::post('/submit-search', [LandingController::class, 'submitSearch'])->name('lawyer.search.submit');


//All appointments
//Single Appointment fetched by id in the url
Route::get('/appointments/{id}',[AppointmentController::class, 'show'])
    ->where('id', '[0-9]+');

//show create form
//Added middleware to prevent access to create form if not logged in
Route::get('/appointments/create', [ AppointmentController::class, 'create']);
Route::get('/appointments/confirm', [ AppointmentController::class, 'confirm']);


//Add Appointment to database
Route::post('/appointments', [AppointmentController::class, 'store'])->middleware('auth');

//Show edit form
Route::get('/appointments/{id}/edit',[AppointmentController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

//Update Appointment
Route::put('/appointments/{id}/update', [AppointmentController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

//Delete Appointment
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/appointments/manage', [AppointmentController::class, 'manage']);

//*Small fix. This route is used to catch any external links and redirect to them without getting stuck in the app.
Route::get('/external-link', function(){
    $url = request('url');
    return redirect()->away(url($url));
});

//vic part

//end of vic part


// The category route is already defined above. Remove the duplicate definition below.
Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/user/{userId}', [UserController::class, 'showUserDetails']);


//latest updates on register and log in routs
Route::get('/lawyers/create', [LandingController::class, 'showLawyer']);
// Add this in your web.php file
Route::get('/lawyers/lawyer_dashboard', [LawyerController::class, 'showLawyerDashboard'])->name('lawyer.dashboard');


Route::get('/appointments/create', [AppointmentController::class, 'createForm']);
// Submit appointment
Route::post('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
// Show confirmation page
Route::get('/appointments/confirm/{id}', [AppointmentController::class, 'confirm'])->name('appointments.confirm');
//*Using the User controller now

//Show register form
//Route::get('users/register/create', [UserController::class, 'create'])->middleware('guest');

//first registration page
// Route::get('/users/register', [UserController::class, 'create'])->middleware('guest'); 


//Add user to database
//Route::post('/users',[UserController::class, 'store'])->middleware('guest');

//Logout from user session
//Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
//Added a name to the route so that we can use it through middleware
//Route::get('/login', [UserController::class, 'login']);
   // ->name('login')
   // ->middleware('guest');

//log user in
//Route::post('/users/login', [UserController::class, 'authenticate'])->middleware('guest');





//Route::post('/search', 'LawyerController@search')->name('lawyer.search.submit');

//Route::get('/lawyers/search', [LawyerController::class, 'search'])->name('lawyers.lawyers.search');



//Route::get('/lawyers/search', [LawyerController::class, 'lawyers.search']);



// this Route will be to SplashScreen.blade.php ,  is it correct ?  / Mai :)

//Route::get('/', [SplashScreenController::class, 'firstPage']);

// Route::get('/users/register', [RegisterController::class, 'register']);

//Route::get('/splashScreen', [SplashScreenController::class, 'firstPage'])->name('splashScreen');



//// // test route
//// Route::get('/lawyers/test', [LawyerController::class, 'testcreatelawyer']);

//routers for lawyer's registration and login
//Route::get('/register2', [LawyerController::class, 'create'])->middleware('guest');
//Route::post('/register2', [LawyerController::class, 'store'])->middleware('guest');

//Route::get('/login', [LawyerController::class, 'login'])->name('login')->middleware('guest');
//Route::post('/login', [LawyerController::class, 'authenticate'])->middleware('guest');

//Route::get('/register', [RegisterController::class, 'register'])->name('register');

//Route::get('/register2', [Register2Controller::class, 'register2'])->name('register2')
//Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
//Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// User Registration
//Route::get('/register', 'UserController@create')->name('register')->middleware('guest');
//Route::post('/register', 'UserController@store')->middleware('guest');

// User Login
// Show login form
//Route::get('/login', [UserController::class, 'showLoginForm'])->name('login')->middleware('guest');

// Handle login form submission
//Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');


// User Logout


// Other Routes...test route
// User Registration



// lawyer profile

Route::get('/lawyers/lawyer_profile', [LawyerController::class, 'profile'])->name('lawyers.profile');
