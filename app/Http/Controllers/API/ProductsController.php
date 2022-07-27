<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;

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

    public function getProduct(request $request, int $id) 
    {
        $product_stock = Stock::where('product_id', $id)->join('sizes', 'sizes.id', 'stock.size_id')->select('sizes.name as size', 'stock.quantity')->get();
        $product_info = Product::where('id', $id)->select('details', 'name')->first();
        

        $data = [
            'stock' => $product_stock,
            'info' => $product_info,
        ];

        return response($data);
    }
}
