<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    /**
     * Menampilkan halaman feedback
     */
    public function index()
    {
        return view('feedback'); // Pastikan nama file blade kamu 'feedback.blade.php'
    }

    /**
     * Menyimpan data feedback ke database
     */
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'category' => 'required|string',
            'comments' => 'required|string|min:5',
            'attachment' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Max 2MB
        ]);

        // 2. Handle Upload File jika ada
        $fileName = null;
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/feedbacks'), $fileName);
        }

        // 3. Simpan ke Database
        Feedback::create([
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'category' => $request->category,
            'comments' => $request->comments,
            'attachment' => $fileName,
            'status' => 'pending'
        ]);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Thank you! Your feedback has been received.');
    }
}