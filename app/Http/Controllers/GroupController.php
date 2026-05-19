<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function store(Request $request)
    {
        $mentor = Auth::user();

        // 1. Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id'
        ]);

        // 2. Security Check
        $course = \App\Models\Course::where('id', $request->course_id)->where('mentor_id', $mentor->id)->firstOrFail();

        // 3. Create the Group
        $group = \App\Models\Group::create([
            'name' => $request->name,
            'mentor_id' => $mentor->id
        ]);

        // 4. AUTO-INVITE: Get all enrolled students + the mentor
        $enrolledStudentIds = \App\Models\Enrollment::where('course_id', $course->id)->pluck('user_id')->toArray();
        $allMembers = array_merge([$mentor->id], $enrolledStudentIds);
        
        $group->users()->attach($allMembers);

        return redirect()->back()->with('success', 'Group created and students invited automatically!');
    }

    public function addMember(Request $request, $id)
    {
        $group = \App\Models\Group::findOrFail($id);
        
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        // Check if user is already in the group
        if (!$group->users->contains($request->user_id)) {
            $group->users()->attach($request->user_id);
            return redirect()->back()->with('success', 'User added successfully!');
        }

        return redirect()->back()->with('info', 'User is already in the group.');
    }
}