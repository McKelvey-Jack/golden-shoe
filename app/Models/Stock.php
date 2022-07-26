<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = false;
    protected $primaryKey = ['product_id', 'size_id'];
    public $incrementing = false;
    public $table = 'stock';
    use HasFactory;
}
