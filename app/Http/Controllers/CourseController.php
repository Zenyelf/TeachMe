<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request){
        # show all courses
        // Start the query
        $query = \App\Models\Course::query();

        // Check the "sort" parameter from the URL
        if ($request->has('sort')) {
            if ($request->sort == 'price_low') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort == 'price_high') {
                $query->orderBy('price', 'desc');
            } elseif ($request->sort == 'newest') {
                $query->orderBy('created_at', 'desc');
            }
        } else {
            // Default sort: show newest first
            $query->orderBy('created_at', 'desc');
        }

        $courses = $query->get();

        return view('courses.index', compact('courses'));
    }

    public function show($id){
        # show single course
    }

    public function create(){
        # show create course page
        return view('courses.create');
    }

    public function store(Request $request){
               
        // Check if the logged-in user is actually a Mentor
        if (auth()->user()->role !== 'Mentor') {
            return redirect()->route('courses.index')->with('error', 'Only mentors can create courses!');
        }

        // 1. Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        // 2. Generate a unique ID (Consistent with your Auth style)
        $courseId = 'C' . date('Ymd') . rand(10, 99); 

        // 3. Use INSERT instead of CREATE
        DB::table('courses')->insert([
            'id' => $courseId,
            'mentor_id' => auth()->id(), // Gets the logged-in Mentor's ID (e.g., M202601)
            'category_id' => '1',        // Hardcoded for now
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'created_at' => now(),       // Manual timestamp required for insert
            'updated_at' => now(),       // Manual timestamp required for insert
        ]);

        // 4. Redirect
        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
}

    public function edit($id){
        # show edit course page
    }

    public function update(Request $request, $id){
        # update course
    }

    public function destroy($id){
        # delete course
    }

    public function search(Request $request){
        # search courses
    }
}
