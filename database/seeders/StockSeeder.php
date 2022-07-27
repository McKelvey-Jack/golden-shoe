<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    protected $stock = [
        [
            'product_id' => 1,
            'size_id' => 1,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ],
        [
            'product_id' => 1,
            'size_id' => 2,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ],
        [
            'product_id' => 1,
            'size_id' => 3,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ],
        [
            'product_id' => 1,
            'size_id' => 4,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ],
        [
            'product_id' => 1,
            'size_id' => 5,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ],
        [
            'product_id' => 1,
            'size_id' => 6,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ],
        [
            'product_id' => 1,
            'size_id' => 7,
            'quantity' => 5,
            'image_1' => 1,
            'image_2' => 2,
            'image_3' => 3,
            'image_4'=> 4,
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         foreach($this->stock as $stock) { 
            Stock::create($stock);
        }
    }
}
