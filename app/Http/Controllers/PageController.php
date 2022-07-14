<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = [
            'pageName' => 'Homepage',
            'pageTitle' => 'Sono la homepage'
        ];
        return view('home', $data);
    }

    public function movieList() {
        $movie = \App\Movie::all();
        //con lo slash iniziale il percorso è assoluito
        dd($movie);
    }
}
