<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = json_decode(file_get_contents('http://127.0.0.1:8000/api/product'));
        $products = $products->data;
        return view('products.index',compact('products'));
    }
}
