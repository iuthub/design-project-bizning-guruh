<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
    public function index(){
      $products = Product::all();

      return view('pages.home', compact('products'));

    }
    public function products(){
      $products = Product::all();
        return view('pages.products', compact('products'));

    }

    public function product(Product $product){
      return view('pages.product', compact('product'));
    }
}
