<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = new review();
        $reviews = $review->getAllReviews();

        return view('reviews/index', ['reviews'=> $reviews]);
    }
}