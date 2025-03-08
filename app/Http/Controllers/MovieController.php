<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
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

    // Show the movie creation form
    public function create()
    {
        return view('movies.create');
    }

    // Store new movie data
    public function store(MovieRequest $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'plot' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle image upload (if an image was uploaded)
        $imagePath = $request->hasFile('img') ? $request->file('img')->store('movies', 'public') : null;

        // Create the movie record in the database
        Movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $imagePath
        ]);

        // Redirect to the movie list with a success message
        return redirect()->route('movies.index')->with('successMessage', 'Movie added successfully!');
    }
}

