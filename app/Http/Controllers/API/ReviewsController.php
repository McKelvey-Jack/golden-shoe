<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Services\ReviewsService;

class ReviewsController extends Controller
{
    protected ReviewsService $reviewsService;

    public function __construct(ReviewsService $reviewsService) 
    {
        $this->reviewsService = $reviewsService;
    }

    public function getReviews(Request $request, int $id)
    {
        $review_data = Review::where('product_id', $id)->select('stars', 'true_to_size_value')->get();

        if ($review_data->isEmpty()) { 
            return response(null);
        }

        $formatted_data = $this->reviewsService->formatReviewData($review_data);

        return response($formatted_data);

    }
}
