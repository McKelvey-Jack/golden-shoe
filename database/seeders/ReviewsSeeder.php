<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    protected $reviews = [
        [
            'product_id' => '1',
            'true_to_size_value' => '5',
            'stars' => 5
        ],
        [
            'product_id' => '1',
            'true_to_size_value' => '7',
            'stars' => 4
        ],
        [
            'product_id' => '1',
            'true_to_size_value' => '7',
            'stars' => 4
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->reviews as $review) { 
            Review::create($review);
        }
    }
}
