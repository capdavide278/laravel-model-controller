<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = [
            'pageName' => 'Homepage',
            'pageTitle' => 'I film presenti sono'
        ];
        $movie = \App\Movie::all();
        return view('home', $data, compact('movie'));
    }
}
