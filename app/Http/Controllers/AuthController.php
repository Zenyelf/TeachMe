<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    #
    public function showRegister() { # show register page
        return view('auth.register');         
    }

    #
    public function register(Request $request){ # create new user
         
        if (strcmp($request->password, $request->password2) != 0) {
            return back()->with('error', 'Passwords do not match!');
        }

        if (strlen($request->password) < 6) {
            return back()->with('error', 'Password must be at least 6 characters');
        }

        if (User::where('email', $request->email)->exists()) {
            return back()->with('error', 'Email already exists');
        }

        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'role' => 'required'
        ]);

        $userId = $this->generateUserId($request->role);

        DB::table('users')->insert([
            'id' => $userId,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Auth::loginUsingId($userId);

        if ($request->role === 'Mentor') {
            return redirect()->route('mentor.dashboard')->with('success', 'Welcome to the Mentor Dashboard!');
        }

        return redirect()->route('student.dashboard')->with('success', 'Welcome to the Student Dashboard!');
    }
    

    #
    private function generateUserId($role){

    $prefix = ($role === 'Mentor') ? 'M' : 'S';
    $year   = date('Y');

    // Count existing users in this year & role
    $count = DB::table('users')
                ->where('role', $role)
                ->whereYear('created_at', $year)
                ->count() + 1;

    // Format -> 2 digits: 01, 02, 03
    $number = str_pad($count, 2, '0', STR_PAD_LEFT);

    return $prefix . $year . $number;
    }

    #
    public function showLogin(){ # show login page
        return view('auth.login');   
    }

    #
    public function login(Request $request){

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        // get the logged-in user
        $user = Auth::user();

        // redirect based on role
        if ($user->role === 'Student') {
            return redirect()->route('student.dashboard'); //harusnya begini, lihat di web.php
            
        }

        if ($user->role === 'Mentor') {
            return redirect()->route('mentor.dashboard'); //harusnya begini, lihat di web.php
            
        }

        // fallback if role is unexpected
        return redirect('/home');
    }

    return back()->with('error', 'Wrong email or password');
    }

    #
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
    public function profile()
{
    $user = auth()->user();

    // Matching the capital 'S' from your database
    if ($user->role === 'Student') {
        return view('student.profile'); 
    } elseif ($user->role === 'Mentor') {
        return view('mentor.profile'); 
    }

    return redirect('/')->with('error', 'Unauthorized access.');
}
}
