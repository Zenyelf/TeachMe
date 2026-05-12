<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EnrollmentController;

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

// Student Dashboard Butt

//Student
Route::get('/student/profile', [StudentController::class, 'profile'])->name('student.profile')->middleware('auth');
Route::put('/student/profile', [StudentController::class, 'updateProfile'])->name('student.profile.update')->middleware('auth');
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard')->middleware('auth');
Route::get('/student/my-course', [StudentController::class, 'myCourse'])->name('student.mycourse')->middleware('auth');

//Mentor
Route::get('/mentor/dashboard', [MentorController::class, 'dashboard'])->name('mentor.dashboard')->middleware('auth');
Route::get('/mentor/profile', [MentorController::class, 'profile'])->name('mentor.profile')->middleware('auth');
Route::get('/mentor/earnings', [MentorController::class, 'earnings'])->name('mentor.earnings')->middleware('auth');
Route::get('/mentor/schedule', [MentorController::class, 'schedule'])->name('mentor.schedule')->middleware('auth');
Route::get('/mentor/live', [MentorController::class, 'live'])->name('mentor.live')->middleware('auth');
Route::get('/mentor/create-course', [CourseController::class, 'create'])->name('mentor.newcourse');

Route::get('/mentor/create-course/step2', function() {
    return redirect()->route('mentor.newcourse')
        ->with('error', 'Please complete Step 1 first.');
})->name('courses.step2.get');

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

Route::post('/groups/create', [App\Http\Controllers\GroupController::class, 'store'])->name('groups.store')->middleware('auth');

Route::post('/groups/{id}/add', [App\Http\Controllers\GroupController::class, 'addMember'])->name('groups.add')->middleware('auth');

// Protect it with the auth middleware so only logged-in users can chat
Route::middleware(['auth'])->group(function () {
    Route::post('/api/messages/send', [MessageController::class, 'sendMessage']);
    Route::get('/mentor/profile', [MentorController::class, 'profile'])->name('mentor.profile');
    Route::put('/mentor/profile/update', [MentorController::class, 'updateProfile'])->name('mentor.profile.update');
});


// Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::get('/course', [CourseController::class, 'search']);

Route::get('/courses/{course}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');

Route::post('/courses/{course}/enroll', [EnrollmentController::class, 'store'])
    ->name('courses.enroll')
    ->middleware('auth'); // Only logged-in users can hit this

   