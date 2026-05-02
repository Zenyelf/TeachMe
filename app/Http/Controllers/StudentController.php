<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- Added this import
use Illuminate\Support\Facades\Storage; // <-- baru justin tambahin

class StudentController extends Controller
{
    public function dashboard(){
        return view('student.dashboard');
    }

    public function browseCourses(){
        # show all courses
    }

    public function myBookings(){
        # student bookings
    }

    public function profile(){
    $user = Auth::user();

    return view('student.profile', compact('user'));
}
public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'major' => 'nullable|string|max:255',
        'learning_mode' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // 1. Cek jika ada upload foto
    if ($request->hasFile('avatar')) {
        $fileName = time() . '.' . $request->avatar->extension();
        $request->avatar->move(storage_path('app/public/avatars'), $fileName);
        
        // Simpan nama file baru ke variabel agar bisa diupdate
        $user->avatar = $fileName;
    }

    // 2. Update SEMUA data sekaligus (Teks + Avatar jika ada)
    $user->update([
        'name' => $request->name,
        'major' => $request->major,
        'learning_mode' => $request->learning_mode,
        'avatar' => $user->avatar, // Ini akan berisi nama file baru (jika upload) atau tetap yang lama
    ]);

    return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
}
}