<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Review;

class ReviewsController extends Controller
{
    public function makereview(Review $review){

        request()->validate([
            'review'=>'required|min:3'
        ]);

        $review = Review::create([
            'review' => request()->get('review', '')
        ]);

        return view('view', [
            'review'=>Review::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
