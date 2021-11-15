<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductControlle extends Controller
{
    public function index()
    {
        $product = Product::all();
        return response()->json([
            'code'=> 200,
            'data'=>$product
        ],200);
    }
}
