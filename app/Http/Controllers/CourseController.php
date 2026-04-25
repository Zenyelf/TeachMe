<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        # show all courses
    }

    public function show($id){
        # show single course
    }

    public function create(){
        # show create course page
    }

    public function store(Request $request){
        # save course to database
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
