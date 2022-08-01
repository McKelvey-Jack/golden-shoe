<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImagesSeeder extends Seeder
{
   protected $product_images =[ 
        [
            'product_id' => '1',
            'image_id' => '1',
            'default' => 'y',
        ],
        [
            'product_id' => '2',
            'image_id' => '2',
            'default' => 'y',
        ],
        [
            'product_id' => '3',
            'image_id' => '3',
            'default' => 'y',
        ],
        [
            'product_id' => '4',
            'image_id' => '4',
            'default' => 'y',
        ],
        [
            'product_id' => '5',
            'image_id' => '1',
            'default' => 'y',
        ],
         [
            'product_id' => '6',
            'image_id' => '1',
            'default' => 'y',
        ],
        [
            'product_id' => '7',
            'image_id' => '2',
            'default' => 'y',
        ],
        [
            'product_id' => '8',
            'image_id' => '2',
            'default' => 'y',
        ],
        [
            'product_id' => '9',
            'image_id' => '3',
            'default' => 'y',
        ],
        [
            'product_id' => '10',
            'image_id' => '1',
            'default' => 'y',
        ],
        [
            'product_id' => '1',
            'image_id' => '2',
            'default' => 'n',
        ],
        [
            'product_id' => '1',
            'image_id' => '3',
            'default' => 'n',
        ],
        [
            'product_id' => '1',
            'image_id' => '4',
            'default' => 'n',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->product_images as $product_image) {
            ProductImage::create($product_image);
        }
    }
}
