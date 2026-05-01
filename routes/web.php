<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MessageController;

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

Route::get('/student/profile', [StudentController::class, 'profile'])->name('student.profile')->middleware('auth');

Route::get('/mentor/profile', [MentorController::class, 'profile'])->name('mentor.profile')->middleware('auth');
Route::get('/mentor/earnings', [MentorController::class, 'earnings'])->name('mentor.earnings')->middleware('auth');
Route::get('/mentor/schedule', [MentorController::class, 'schedule'])->name('mentor.schedule')->middleware('auth');
Route::get('/mentor/live', [MentorController::class, 'live'])->name('mentor.live')->middleware('auth');
Route::get('/mentor/create-course', [CourseController::class, 'create'])->name('mentor.newcourse');
Route::post('/mentor/create-course/step2', [CourseController::class, 'showStep2'])->name('courses.step2');

Route::get('/settings', function () {
    return view('settings'); 
});

// Feedback
Route::get('/feedback', function () {
    return view('feedback'); 
});

// Chat
Route::get('/chat', [MessageController::class, 'index'])->middleware('auth')->name('chat');

Route::get('/api/users/search', [MessageController::class, 'search'])->middleware('auth');

// Protect it with the auth middleware so only logged-in users can chat
Route::middleware(['auth'])->group(function () {
    Route::post('/api/messages/send', [MessageController::class, 'sendMessage']);
});


//GANTI
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard')->middleware('auth');

Route::get('/mentor/dashboard', [MentorController::class, 'dashboard'])->name('mentor.dashboard')->middleware('auth');

/////////////////////////////////////////////////////


// Grouping them for clarity
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::get('/course', [CourseController::class, 'search']);