<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Absolute check to ensure non-admins get locked out
        if (auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized access.');
        }

        // Get mentors from the database, newest registrations first
        $mentors = Mentor::with('user')->latest()->get();

        return view('admin.admin', compact('mentors'));
    }

    public function toggleVerify($id)
    {
        if (auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized access.');
        }

        $mentor = Mentor::findOrFail($id);

        // Toggle verification strings ('0' -> '1' and vice-versa)
        if ($mentor->verify === '1') {
            $mentor->verify = '0';
            $msg = 'Verification canceled.';
        } else {
            $mentor->verify = '1';
            $msg = 'Mentor approved successfully!';
        }

        $mentor->save();

        return redirect()->back()->with('success', $msg);
    }
}