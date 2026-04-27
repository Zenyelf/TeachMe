<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('public.home'); #nama page
});

// Register
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::get('/logout', [AuthController::class, 'logout']);

// Home Buttons (Top)
Route::get('/courses', function () {
    return view('public.courses'); 
});
Route::get('/pricing', function () {
    return view('public.pricing'); 
});
Route::get('/blog', function () {
    return view('public.blog'); 
});

// Student Dashboard Buttons
Route::get('/my-course', function () {
    return view('student.mycourse'); 
});
Route::get('/settings', function () {
    return view('student.settings'); 
});
Route::get('/std-profile', function () {
    return view('student.studentprofile'); 
});
Route::get('/std-settings', function () {
    return view('student.settings'); 
});

// Feedback
Route::get('/feedback', function () {
    return view('feedback'); 
});

// Chat
Route::get('/chat', function () {
    return view('chat'); 
});

//GANTI
Route::get('/student/dashboard', function () { 
    return view('student.dashboard');
})->name('student.dashboard')->middleware('auth');

Route::get('/mentor/dashboard', function () { 
    return view('mentor.dashboard');
})->name('mentor.dashboard')->middleware('auth');
