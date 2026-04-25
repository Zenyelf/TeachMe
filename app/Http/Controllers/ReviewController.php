<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($mentor_id){
        # show review form
    }

    public function store(Request $request){
        # save review
    }

    public function update(Request $request, $review_id){
        # edit review
    }

    public function delete($review_id){
        # delete review
    }

    public function mentorReviews($mentor_id){
        # show mentor reviews
    }
}
