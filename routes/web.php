<?php

use App\Models\Lawyer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AppointmentController;

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
// index - Show all lawyers
// show - Show single Lawyer
// create - Show form to create new Lawyer
// store - Store new Lawyer in database
// edit - Show form to edit Lawyer
// update - Update Lawyer in database
// destroy - Delete Lawyer from database

//*Lawyer Routes
//All lawyers
Route::get('/', [LawyerController::class, 'index']);

//Single Lawyer fetched by id in the url
Route::get('/lawyers/{id}',[LawyerController::class, 'show'])
    ->where('id', '[0-9]+');

//show create form
//Added middleware to prevent access to create form if not logged in
Route::get('/lawyers/create', [LawyerController::class, 'create'])->middleware('auth');

//Add Lawyer to database
Route::post('/lawyers', [LawyerController::class, 'store'])->middleware('auth');

//Show edit form
Route::get('/lawyers/{id}/edit',[LawyerController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

//Update Lawyer
Route::put('/lawyers/{id}', [LawyerController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

//Delete Lawyer
Route::delete('/lawyers/{id}', [LawyerController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/lawyers/manage', [lawyerController::class, 'manage'])->middleware('auth');

//*Using the User controller now

//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

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
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');



//*Small fix. This route is used to catch any external links and redirect to them without getting stuck in the app.
Route::get('/external-link', function(){
    $url = request('url');
    return redirect()->away(url($url));
});


//here is a route for appointements
Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);
//search route to get alwyer by category
Route::get('/search', [SearchController::class, 'search'])->name('search');