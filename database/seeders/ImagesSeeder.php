<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImagesSeeder extends Seeder
{
      protected $images = [
        [
            'path' => 'black-1',
        ],
        [
            'path' => 'black-2',
        ],
        [
            'path' => 'black-3',
        ],
        [
            'path' => 'black-4',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         foreach($this->images as $image) { 
            Image::create($image);
        }
    }
}
