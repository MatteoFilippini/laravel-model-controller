<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il modello
use App\Models\Movie;

class MovieController extends Controller
{
    //movies
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    //movie
    public function show($id)
    {
        $movies = Movie::findOrFail($id);
        return view('movie', compact('movies'));
    }
}
