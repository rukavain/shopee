<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;

class ReviewController extends Controller
{
    // ReviewController.php

    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|min:3|max:240',
            'product_id' => 'required|exists:products,id',
        ]);

        $review = Review::create([
            'feedback' => $request->input('feedback'),
            'product_id' => $request->input('product_id'),
        ]);

        return redirect()->back()->with('success', 'Review added successfully.');
    }
}
