<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Show the form to create a new genre
    public function create()
    {
        return view('genre.create');
    }

    // Display all genres, sorted by name
    public function index()
    {
        $genres = Genre::all()->sortBy('name');
        return view('genre.index', compact('genres'));
    }

    public function show(Genre $genre){
        return view('genre.show', compact('genre'));
    }

    // Store a new genre in the database
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required'
        ]);

        // Create a new genre
        Genre::create([
            'name' => $request->name
        ]);

        // Redirect with success message
        return redirect()->route('homepage')->with('successMessage', 'Hai creato la tua categoria');
    }
}
