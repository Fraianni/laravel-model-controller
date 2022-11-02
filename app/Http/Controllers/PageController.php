<?php

// use App\Movie;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{

    public function index()
    {

        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }
}
