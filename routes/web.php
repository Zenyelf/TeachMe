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

//GANTI
Route::get('/student/dashboard', function () { 
    return view('student.dashboard');
})->name('student.dashboard')->middleware('auth');

Route::get('/mentor/dashboard', function () { 
    return view('mentor.dashboard');
})->name('mentor.dashboard')->middleware('auth');
