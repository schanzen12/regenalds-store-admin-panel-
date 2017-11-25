<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        $newArrivals = Product::orderBy('created_at', 'desc')->take(3)->get();

        return view('index',compact('categories','products','newArrivals'));
    }
}
