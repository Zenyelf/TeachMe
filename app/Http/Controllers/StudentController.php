<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function dashboard(){
        return view('student.dashboard');
    }

    public function profile(){
        $user = Auth::user();
        // Pastikan view-nya mengarah ke profile.blade.php
        return view('student.profile', compact('user'));
    }

    public function updateProfile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'major' => 'nullable|string|max:255',
        'learning_mode' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // 1. Photo Upload Logic
    if ($request->hasFile('avatar')) {
        // Create the custom filename: PP_USERID.extension
        $fileName = 'PP_' . $user->id . '.' . "jpg";
        
        // OPTIONAL: Delete old avatar file from storage if it exists 
        // and if it has a different extension than the new one
        if ($user->avatar && $user->avatar !== $fileName) {
            $oldPath = storage_path('app/public/avatars/' . $user->avatar);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        // Move to folder: storage/app/public/avatars
        $request->avatar->move(storage_path('app/public/avatars'), $fileName);
        
        // Save ONLY the filename to the database
        $user->avatar = "avatars/{$fileName}";
    }

    // 2. Update User data
    $user->name = $request->name;
    $user->save();

    // 3. Update Student data
    $user->student()->updateOrCreate(
        ['user_id' => $user->id],
        [
            'id' => $user->id, // Assuming student ID is same as user ID based on your snippet
            'major' => $request->major,
            'learning_mode' => $request->learning_mode,
        ]
    );

    return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
}
}