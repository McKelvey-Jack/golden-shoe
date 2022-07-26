<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    protected $products = [
        [
            'name' => 'Shoe 1',
            'type' => 'male',
        ],
        [
            'name' => 'Shoe 2',
            'type' => 'male',
        ],
        [
            'name' => 'Shoe 3',
            'type' => 'male',
        ],
        [
            'name' => 'Shoe 4',
            'type' => 'male',
        ],
        [
            'name' => 'Shoe 5',
            'type' => 'male',
        ],
        [
            'name' => 'Shoe 6',
            'type' => 'male',
        ],
        [
            'name' => 'Shoe 7',
            'type' => 'male',
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->products as $product) { 
            Product::create($product);
        }
    }
}
