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
        
        // Ambil kursus milik mentor
        $myCourses = $mentor->courses()->withCount('enrollments')->orderBy('created_at', 'desc')->get();
        $activeCoursesCount = $mentor->courses()->count();
        
        // Kira jumlah pelajar yang unik
        $courseIds = $mentor->courses()->pluck('id');
        $totalStudents = $courseIds->isNotEmpty() 
            ? Enrollment::whereIn('course_id', $courseIds)->distinct('user_id')->count() 
            : 0;

        // Ambil mesej terbaru
        $recentMessages = Message::with('sender')
            ->where('receiver_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('sender_id')
            ->take(4);

        return view('mentor.dashboard', compact(
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

// --- FUNGSI UPDATE UNTUK ALEX JOHNSON ---
   public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // 1. Validasi (Pastikan profile_photo ada di sini)
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'academic_degree' => 'nullable|string',
            'contact_email' => 'nullable|string',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi foto
            'linkedin_url' => 'nullable|string',
            'portfolio_url' => 'nullable|string',
            'twitter_handle' => 'nullable|string',
        ]);

        // 2. Update nama di table Users
        $user->update([
            'name' => $request->name
        ]);

        // 3. LOGIC MENANGKAP FOTO (Ini yang paling penting)
        // Ambil foto yang sudah ada di database dulu sebagai default
        $photoPath = $user->mentor->profile_photo; 


        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');

            $fileName = 'PP_' . $user->id . '.' . $file->getClientOriginalExtension();
    
            $file->move(storage_path('app/public/avatars'), $fileName);
    
            $photoPath = $fileName;
        }

        // 4. Update data di table Mentors
        $user->mentor()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'title' => $request->title,
                'academic_degree' => $request->academic_degree,
                'bio' => $request->bio,
                'contact_email' => $request->contact_email,
                'profile_photo' => $photoPath, // <--- INI HARUS ADA SUPAYA GAK NULL
                'linkedin_url' => $request->linkedin_url,
                'portfolio_url' => $request->portfolio_url,
                'twitter_handle' => $request->twitter_handle,
                'is_online' => $request->has('is_online'),
                'is_offline' => $request->has('is_offline'),
                'skills' => $request->skills, 
            ]
        );

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    // --- FUNGSI TAMPILAN (VIEW) LAIN ---

    public function myBookings()
    {
        return view('mentor.bookings');
    }

    public function profile()
    {
        return view('mentor.profile');
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