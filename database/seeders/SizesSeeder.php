<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;

class SizesSeeder extends Seeder
{
    protected $sizes = [
        [
            'name' => 6
        ],
        [
            'name' => 7
        ],
        [
            'name' => 8
        ],
        [
            'name' => 9
        ],
        [
            'name' => 10
        ],
        [
            'name' => 11
        ],
        [
            'name' => 12
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->sizes as $sizes) { 
            Size::create($sizes);
        }
    }
}
