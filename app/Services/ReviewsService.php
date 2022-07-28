<?php

namespace App\Services;
use GuzzleHttp\Client;

/**
 * Class ReviewsService.
 */
class ReviewsService

{
    public function formatReviewData($data)
    {
        $total_reviews = $data->count();
        $stars_count = [
            5 => 0,
            4 => 0,
            3 => 0,
            2 => 0,
            1 => 0,
        ];
        $true_to_size_total = 0;
        $data->each(function ($item, $key) use (&$stars_count, &$true_to_size_total) {
            $stars_count[$item->stars]++;
            $true_to_size_total += $item->true_to_size_value;
        });

        $formatted_data = [
            'total_reviews' => $total_reviews,
            'stars_count' => $stars_count,
            'true_to_size_slider_value' => round(($true_to_size_total / ($total_reviews * 10) * 100)),
        ];

        return ($formatted_data);
    }
}