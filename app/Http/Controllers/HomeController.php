<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        // return View::make('home.index', ['title'=>'Home Page']);
        // return view('home.index', ['title'=>'Home Page']);
        // return view('home.index', compact('title'));
        // return view('home.index')->with('title', 'Home Page');
        return view('home.index')->withTitle('Home Page');
    }
}
