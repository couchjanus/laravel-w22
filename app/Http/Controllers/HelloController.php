<?php

namespace App\Http\Controllers;

class HelloController
{
    public function index()
    {
        $name = 'Controller';
        
        return view('hello', compact('name'));
    }
}
