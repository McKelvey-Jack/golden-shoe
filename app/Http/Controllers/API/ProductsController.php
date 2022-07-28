<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use App\Models\ProductImage;

class ProductsController extends Controller
{
    public function getProducts(request $request)
    {
        $validated = $request->validate([
            'type' => 'exists:products'
        ]);

        $type = $request->get('type');
        $products = Product::where('type', $type)->join('product_images', function($join){
            $join->on('product_images.product_id', 'products.id');
            $join->where('product_images.default', 'y');
        })->join('images', 'images.id', 'product_images.image_id')
        ->select('products.id','products.name', 'images.path as list_image_path', 'products.price')
        ->get();


        return response($products);

    }

    public function getProduct(request $request, int $id) 
    {
        $product_stock = Stock::where('product_id', $id)
            ->join('sizes', 'sizes.id', 'stock.size_id')
            ->select('sizes.name as size', 'stock.quantity')
            ->get();

        $product_info = Product::where('id', $id)
            ->select('details', 'name', 'price')
            ->first();

        $images = ProductImage::where('product_id', $id)
            ->join('images', 'images.id', 'product_images.image_id')
            ->select('images.path')
            ->pluck('images.path');

        $data = [
            'stock' => $product_stock,
            'info' => $product_info,
            'images'=> $images
        ];

        return response($data);
    }
}
