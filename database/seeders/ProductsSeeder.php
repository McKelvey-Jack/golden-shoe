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
            'type' => 'men',
            'price' => 24.99,
        ],
        [
            'name' => 'Shoe 2',
            'type' => 'men',
            'price' => 19.99,
        ],
        [
            'name' => 'Shoe 3',
            'type' => 'men',
            'price' => 65.99,

        ],
        [
            'name' => 'Shoe 4',
            'type' => 'men',
            'price' => 24.99,
        ],
        [
            'name' => 'Shoe 5',
            'type' => 'men',
            'price' => 27.99,
        ],
        [
            'name' => 'Shoe 6',
            'type' => 'men',
            'price' => 22.99,
        ],
        [
            'name' => 'Shoe 7',
            'type' => 'men',
            'price' => 29.99,

        ],
        [
            'name' => 'Shoe 7',
            'type' => 'men',
            'price' => 22.99,
         ],
         [
            'name' => 'Shoe 7',
            'type' => 'men',
            'price' => 24.99,
         ],
         [
            'name' => 'Shoe 8',
            'type' => 'men',
            'price' => 27.99,
         ],
         [
            'name' => 'Shoe 9',
            'type' => 'men',
            'price' => 24.99,
         ],
         [
            'name' => 'Shoe 10',
            'type' => 'men',
            'price' => 29.99,
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
            $details = [1 => 'Lace-up fastening', 2 => 'Round toe', 3 => 'Flat sole', 4 => 'Brogue detailing'];
            $product['details'] = json_encode($details);
            Product::create($product);
        }
    }
}
