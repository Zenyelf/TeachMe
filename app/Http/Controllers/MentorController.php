<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Mentor;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function dashboard()
    {
        $mentor = auth()->user()->mentor;
        
        $myCourses = $mentor->courses()->withCount('enrollments')->orderBy('created_at', 'desc')->get();
        $activeCoursesCount = $mentor->courses()->count();
        
        $courseIds = $mentor->courses()->pluck('id');
        $totalStudents = $courseIds->isNotEmpty() 
            ? Enrollment::whereIn('course_id', $courseIds)->distinct('user_id')->count() 
            : 0;

        $recentMessages = Message::with('sender')
            ->where('receiver_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('sender_id')
            ->take(4);

        return view('mentor.dashboard', compact(
            'mentor',
            'recentMessages',
            'totalStudents',
            'activeCoursesCount',
            'myCourses'
        ));
    }

    public function myCourses()
    {
        $mentor = auth()->user()->mentor;
        $courses = $mentor->courses()->withCount('enrollments')->orderBy('created_at', 'desc')->paginate(10);
        return view('mentor.courses.index', compact('courses'));
    }

    public function updateProfile(Request $request)
{
    $user = Auth::user();

    // 1. Validasi (Samakan nama input dengan Blade, misal 'avatar')
    $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'nullable|string|max:255',
        'bio' => 'nullable|string|max:500',
        'academic_degree' => 'nullable|string',
        'contact_email' => 'nullable|email',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Pastikan di blade namanya 'avatar'
        'linkedin_url' => 'nullable|string',
        'portfolio_url' => 'nullable|string',
        'twitter_handle' => 'nullable|string',
    ]);

    // 2. Logic Update ke table USERS (Nama & Foto)
    $userData = [
        'name' => $request->name,
    ];

    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        // Pake time() biar gak kena cache browser
        $fileName = 'PP_' . $user->id . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path('app/public/avatars'), $fileName);
        
        $userData['avatar'] = $fileName;
    }

    // Eksekusi update ke tabel users
    \Illuminate\Support\Facades\DB::table('users')
        ->where('id', $user->id)
        ->update($userData);

    // 3. Update ke table MENTORS (Data spesifik mentor + Alamat)
    $user->mentor()->updateOrCreate(
        ['user_id' => $user->id],
        [
            'title' => $request->title,
            'academic_degree' => $request->academic_degree,
            'bio' => $request->bio,
            'contact_email' => $request->contact_email,
            'address' => $request->address, // Karena tadi deal-nya address di mentor saja
            'linkedin_url' => $request->linkedin_url,
            'portfolio_url' => $request->portfolio_url,
            'twitter_handle' => $request->twitter_handle,
            'preferred_learning' => $request->preferred_learning
        ]
    );

    return redirect()->back()->with('success', 'Profile updated successfully!');
}

    public function myBookings()
    {
        return view('mentor.bookings');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('mentor.profile', compact('user'));
    }

    public function earnings()
    {
        return view('mentor.earnings');
    }

    public function schedule()
    {
        return view('mentor.schedule');
    }

    public function live()
    {
        return view('mentor.live');
    }

    public function createCourse()
    {
        return view('mentor.newcourse');
    }
}