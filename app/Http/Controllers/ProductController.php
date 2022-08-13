<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $products = Product::all();
        return view('index',['products' => $products]);
    }

    public function showProduct($id){
        $products = Product::whereNot('id', $id)->get();
        $product = Product::where('id', $id)->get();
        return view('producto',['products' => $product]);
    }
}
