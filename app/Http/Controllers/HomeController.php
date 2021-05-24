<?php

namespace App\Http\Controllers;
class HomeController extends Controller
{

    public function __invoke()
    {
        $name = 'lintang';
        return view('home', compact('name'));
    }
}
