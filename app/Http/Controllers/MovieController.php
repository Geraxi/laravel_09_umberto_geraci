<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(MovieRequest $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('public/images'),
            'user_id' => Auth::id()
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo film!');
    }

    public function show(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        if ($movie->user_id == Auth::id()) {
            return view('movie.edit', compact('movie'));
        }

        return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa pagina');
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
        ]);

        if ($request->hasFile('img')) {
            $movie->update([
                'img' => $request->file('img')->store('public/images'),
            ]);
        }

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente modificato il film');
    }

    public function destroy(Movie $movie)
    {
        if ($movie->user_id == Auth::id()) {
            $movie->delete();
        }

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente eliminato il film');
    }
}
