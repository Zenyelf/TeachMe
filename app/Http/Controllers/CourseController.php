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

        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;

                $query->where(function($q) use ($searchTerm) {  
                    $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%')

                // Search by Mentor Name
                ->orWhereHas('mentor.user', function($userQuery) use ($searchTerm) {
                    $userQuery->where('name', 'like', '%' . $searchTerm . '%');
                })

                // NEW: Search by Category Name
                ->orWhereHas('category', function($categoryQuery) use ($searchTerm) {
                    $categoryQuery->where('name', 'like', '%' . $searchTerm . '%');
                });
            });
        }


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

        $courses = $query->with(['mentor.user', 'category'])->paginate(6)->appends($request->query());

        return view('courses.index', compact('courses'));
    }

    public function show(\App\Models\Course $course){
        // Load relationships to avoid "N+1" issues in the view
        $course->load(['mentor.user', 'category']);
    
        return view('courses.detail', compact('course'));
    }

    public function create(){
        # show create course page
        //return view('courses.create');
        return view('mentor.newcourse');
    }

    public function showStep2(Request $request) {
        // Validate Step 1 data
        $request->validate([
            'title' => 'required|string|max:60',
            'description' => 'required',
            'course-type' => 'required'
        ]);

        // Pass the Step 1 data to the Step 2 view
        $step1Data = $request->all();
        return view('mentor.newcourseStep2', compact('step1Data'));
    }

    public function store(Request $request){
               
        // Check if the logged-in user is actually a Mentor
        if (auth()->user()->role !== 'Mentor') {
            return redirect()->route('courses.index')->with('error', 'Only mentors can create courses!');
        }

        // 1. Validate the input
        $request->validate([
            'title' => 'required|string|max:60',
            'description' => 'required|string',
            'course-type' => 'required',
            'category_id' => 'required',
            'language' => 'required',
            'lessons' => 'required|integer|min:1',
            'slots' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'selected_sessions' => 'required' // The string from Flatpickr
        ]);

        // 2. Generate a unique ID (Consistent with your Auth style)
        // 1. Get today's date prefix (e.g., C20260501)
        $datePrefix = 'C' . date('Ymd');

        // 2. Count how many courses were already created today
        $todayCount = DB::table('courses')
            ->where('id', 'like', $datePrefix . '%')
            ->count();

        // 3. Increment the count and pad it (e.g., 1 becomes 01, 10 stays 10)
        $nextNumber = str_pad($todayCount + 1, 2, '0', STR_PAD_LEFT);

        // 4. Combine them
        $courseId = $datePrefix . $nextNumber; 

        $dates = explode(', ', $request->selected_sessions);

        // 3. Use INSERT instead of CREATE
        DB::table('courses')->insert([
            'id' => $courseId,
            'mentor_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->input('course-type'),
            'language' => $request->language,
            'slots' => $request->slots,
            'lessons' => $request->lessons, // Auto-count how many dates were picked
            'price' => $request->price,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach ($dates as $date) {
            DB::table('course_sessions')->insert([
                'course_id' => $courseId,
                'session_date' => $date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

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
        return view('public.courses1');
    }
}