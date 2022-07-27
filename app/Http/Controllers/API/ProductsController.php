<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function getProducts(request $request)
    {
        $validated = $request->validate([
            'type' => 'exists:products'
        ]);


        $type = $request->get('type');
        $products = Product::where('type', $type)
            ->join('images', 'images.id', 'products.list_image')
            ->select('products.id','products.name', 'images.path as list_image_path', 'products.price')
            ->get();

        return response($products);

    }
}
