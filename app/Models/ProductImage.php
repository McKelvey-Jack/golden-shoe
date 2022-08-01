<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $timestamps = false;
    protected $primaryKey = ['product_id', 'image_id'];
    public $incrementing = false;
    use HasFactory;
}
