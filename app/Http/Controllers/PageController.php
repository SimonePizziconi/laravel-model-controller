<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use App\Models\Serie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
    public function serieTv()
    {
        $series = Serie::all();
        return view('serietv', compact('series'));
    }
    public function details($id)
    {
        $serie = Serie::find($id);

        return view('details', compact('serie'));
    }
}
