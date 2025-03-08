<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;


class MovieController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', ['movies' => $movies]);
    }

    // Show details of a single movie
    public function create()
    {
        return view('movie.create');

        }


    // Store new movie data
    public function store(MovieRequest $request)
    {
        // Validate the incoming request
        $movie= Movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('public/images')
        ]);

        
        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo film!');
    }
}

