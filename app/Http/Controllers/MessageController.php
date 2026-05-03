<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Events\MessageSent;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // =========================================================================
    // 1. INDEX: Automatically loads enrolled contacts in the sidebar
    // =========================================================================
    public function index(Request $request)
    {
        $user = Auth::user();
        $currentUserId = $user->id;
        $role = strtolower($user->role);

        $allowedUserIds = collect();

        // Fetch allowed contacts based on active enrollments
        if ($role === 'student') {
            // Change student_id to user_id here:
            $enrolledCourseIds = Enrollment::where('user_id', $currentUserId)->pluck('course_id');
            $allowedUserIds = Course::whereIn('id', $enrolledCourseIds)->pluck('mentor_id');
            
        } elseif ($role === 'mentor') {
            $myCourseIds = Course::where('mentor_id', $currentUserId)->pluck('id');
            // Change student_id to user_id here:
            $allowedUserIds = Enrollment::whereIn('course_id', $myCourseIds)->pluck('user_id');
        }

        // Fetch the actual user data for the sidebar
        $contacts = User::whereIn('id', $allowedUserIds->unique())->get();

        // Determine active user
        $activeUserId = $request->query('user_id');
        
        foreach ($contacts as $contact) {
            if ($role === 'student') {
                // Find the course this Mentor teaches that the Student is enrolled in
                $sharedCourse = Course::where('mentor_id', $contact->id)
                    ->whereIn('id', function($query) use ($currentUserId) {
                        $query->select('course_id')->from('enrollments')->where('user_id', $currentUserId);
                    })->first();
                
                // Assuming your Course model has a 'title' column. Change to 'name' if necessary!
                $contact->shared_course = $sharedCourse ? $sharedCourse->title : 'Mentor';
                
            } elseif ($role === 'mentor') {
                // Find the course this Mentor teaches that this specific Student is enrolled in
                $sharedCourse = Course::where('mentor_id', $currentUserId)
                    ->whereIn('id', function($query) use ($contact) {
                        $query->select('course_id')->from('enrollments')->where('user_id', $contact->id);
                    })->first();
                
                $contact->shared_course = $sharedCourse ? $sharedCourse->title : 'Enrolled Student';
            }
        }

        // Security Check: If they force an ID in the URL, verify they are allowed to talk to them
        if ($activeUserId && !$contacts->contains('id', $activeUserId)) {
            $activeUserId = null; // Kick them out of the chat view for that user
        }

        $activeUser = $activeUserId ? $contacts->where('id', $activeUserId)->first() : null;

        // Fetch history
        $messages = [];
        if ($activeUserId) {
            $messages = Message::where(function ($query) use ($currentUserId, $activeUserId) {
                $query->where('sender_id', $currentUserId)->where('receiver_id', $activeUserId);
            })->orWhere(function ($query) use ($currentUserId, $activeUserId) {
                $query->where('sender_id', $activeUserId)->where('receiver_id', $currentUserId);
            })->orderBy('created_at', 'asc')->get();
        }

        return view('chat', compact('contacts', 'activeUser', 'messages'));
    }

    // =========================================================================
    // 2. SEARCH: Only find users connected via enrollments
    // =========================================================================
    public function search(Request $request)
    {
        $query = $request->get('q');
        if (!$query) return response()->json([]);

        $user = Auth::user();
        $role = strtolower($user->role);
        $allowedUserIds = collect();

        // Run the same check to see who they are allowed to search for
        if ($role === 'student') {
            $enrolledCourseIds = Enrollment::where('student_id', $user->id)->pluck('course_id');
            $allowedUserIds = Course::whereIn('id', $enrolledCourseIds)->pluck('mentor_id');
        } elseif ($role === 'mentor') {
            $myCourseIds = Course::where('mentor_id', $user->id)->pluck('id');
            $allowedUserIds = Enrollment::whereIn('course_id', $myCourseIds)->pluck('student_id');
        }

        // Search ONLY within their allowed contacts
        $users = User::whereIn('id', $allowedUserIds->unique())
                     ->where('name', 'LIKE', "%{$query}%")
                     ->take(10)
                     ->get(['id', 'name']);
                     
        return response()->json($users);
    }

    // =========================================================================
    // 3. SEND MESSAGE: The Ultimate Security Bouncer
    // =========================================================================
    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required',
            'message' => 'required|string',
        ]);

        $sender = Auth::user();
        $receiverId = $request->receiver_id;
        $role = strtolower($sender->role);

        $isAllowed = false;

        // Verify the connection actually exists in the database before sending
        if ($role === 'student') {
            $receiverCourses = Course::where('mentor_id', $receiverId)->pluck('id');
            // FIX: Changed student_id to user_id below
            $isAllowed = Enrollment::where('user_id', $sender->id)
                                   ->whereIn('course_id', $receiverCourses)
                                   ->exists();
        } elseif ($role === 'mentor') {
            $myCourses = Course::where('mentor_id', $sender->id)->pluck('id');
            // FIX: Changed student_id to user_id below
            $isAllowed = Enrollment::where('user_id', $receiverId)
                                   ->whereIn('course_id', $myCourses)
                                   ->exists();
        }

        // If they aren't connected through a course, block the message!
        if (!$isAllowed) {
            return response()->json([
                'status' => 'error',
                'message' => 'You can only message users connected through your enrolled courses.'
            ], 403);
        }

        $message = Message::create([
            'sender_id' => $sender->id,
            'receiver_id' => $receiverId,
            'message' => $request->message,
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully!',
            'data' => $message
        ]);
    }
}