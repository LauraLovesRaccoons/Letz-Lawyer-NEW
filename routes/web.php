<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SplashScreenController;

Route::get('/', [SplashScreenController::class, 'firstPage']);

// Appointments Routes...
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])
    ->where('id', '[0-9]+');

Route::get('/appointments/create', [AppointmentController::class, 'create']);
Route::post('/appointments', [AppointmentController::class, 'store'])->middleware('auth');
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->middleware('auth');
Route::put('/appointments/{id}/update', [AppointmentController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->middleware('auth');
Route::get('/appointments/manage', [AppointmentController::class, 'manage'])->middleware('auth');

// User Routes...
Route::get('/users/register', [UserController::class, 'register']);
Route::get('/users/register/create', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::post('/users/login', [UserController::class, 'authenticate'])->middleware('guest');

// Other routes...
Route::get('/external-link', function () {
    $url = request('url');
    return redirect()->away(url($url));
});

// Landing Controller Routes...
Route::get('/landing', [LandingController::class, 'showLandingPage'])->name('landing');
Route::post('/lawyer/search/submit', [LandingController::class, 'submitSearch'])->name('lawyer.search.submit');
Route::get('/category', function () {
    return view('category');
})->name('category');
Route::post('/search', [LawyerController::class, 'search'])->name('lawyer.search');
Route::get('/lawyers/search', [LawyerController::class, 'search'])->name('lawyers.search');
Route::get('/lawyers/other-search', [LawyerController::class, 'search'])->name('other.lawyers.search');

// SplashScreen Routes...
Route::get('/splash-screen', [SplashScreenController::class, 'firstPage']);

// More routes...

