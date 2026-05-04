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
        // Pastikan view-nya mengarah ke settings.blade.php
        return view('settings', compact('user'));
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

    // 1. Logika Upload Foto (Gunakan move agar nama file bersih)
    if ($request->hasFile('avatar')) {
        // Buat nama file unik
        $fileName = time().'.'.$request->avatar->extension();
        
        // Pindahkan langsung ke folder public/avatars
        $request->avatar->move(storage_path('app/public/avatars'), $fileName);
        // Simpan hanya NAMA FILENYA saja ke database
        $user->avatar = $fileName;
    }

    // 2. Update data User
    $user->name = $request->name;
    $user->save();

    // 3. Update data Student
    $user->student()->updateOrCreate(
        ['user_id' => $user->id],
        [
            'id' => $user->id,
            'major' => $request->major,
            'learning_mode' => $request->learning_mode,
        ]
    );

    return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
}
}