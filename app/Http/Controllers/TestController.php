<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TestController extends Controller
{
    public function test() {
        foreach (Product::all() as $product) {
            var_dump($product);
        }
    }
}
