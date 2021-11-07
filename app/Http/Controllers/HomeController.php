<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\{Product};
class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        $products = Product::all();
        // return response()->json(['products'=>$products]);
        return view('home.index')->withTitle('Home Page');
    }

    public function products()
    {
        $products = Product::all();
        return response()->json(['products'=>$products]);
    }
}
