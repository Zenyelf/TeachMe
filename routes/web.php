<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MentorController;

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
Route::get('/student/profile', [StudentController::class, 'profile'])
    ->name('student.profile')
    ->middleware('auth');
Route::get('/mentor/profile', [MentorController::class, 'profile'])
    ->name('mentor.profile')
    ->middleware('auth');
Route::get('/mentor/earnings', [MentorController::class, 'earnings'])
    ->name('mentor.earnings')
    ->middleware('auth');
Route::get('/mentor/schedule', [MentorController::class, 'schedule'])
    ->name('mentor.schedule')
    ->middleware('auth');
Route::get('/mentor/live', [MentorController::class, 'live'])
    ->name('mentor.live')
    ->middleware('auth');
Route::get('/mentor/create-course', [MentorController::class, 'createCourse'])
    ->name('mentor.newcourse')
    ->middleware('auth');

Route::get('/settings', function () {
    return view('settings'); 
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
