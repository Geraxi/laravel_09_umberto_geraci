<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Show the list of movies
    public function movieList()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies')); // Returns the 'movies.index' view
    }

    // Show details of a single movie
    public function movieDetail($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return redirect()->route('movies.index')->with('errorMessage', 'Movie not found.');
        }

        return view('movies.show', compact('movie')); // Returns the 'movies.show' view
    }

    // Show the form to create a movie
    public function create()
    {
        return view('movies.create');
    }

    // Store new movie data
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'plot' => 'nullable|string',
        ]);

        Movie::create($request->only(['title', 'director', 'year', 'plot']));

        return redirect()->route('movies.index')->with('successMessage', 'Movie added successfully!');
    }
}

