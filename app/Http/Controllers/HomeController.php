<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function mobile(){
      $products = Product::whereHas('category', function ($query) {
    $query->where('category_id', '3');
})->get();

        return view('pages.products', compact('products'));

    }
    public function computer(){
      $products = Product::whereHas('category', function ($query) {
    $query->where('category_id', '1');
})->get();

        return view('pages.computers', compact('products'));

    }
    public function aboutus(){
      return view('pages.aboutus');
      
    }
}
