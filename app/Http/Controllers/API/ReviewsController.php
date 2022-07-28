<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function getReviews(Request $request, int $id)
    {
        dd($id);
    }
}
