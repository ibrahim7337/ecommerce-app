<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        $product = Product::with('images' , 'category')->find($id);
        return view('site.layout.layout' , compact('product'));
    }
}