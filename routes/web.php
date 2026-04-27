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


//GANTI
Route::get('/student/dashboard', function () { 
    if (auth()->user()->role !== 'Student') {
        return redirect('/')->with('error', 'Access denied.');
    }
    return view('student.dashboard');
})->name('student.dashboard')->middleware('auth');

Route::get('/mentor/dashboard', function () { 
    if (auth()->user()->role !== 'Mentor') {
        return redirect('/')->with('error', 'Access denied.');
    }
    return view('mentor.dashboard');
})->name('mentor.dashboard')->middleware('auth');
