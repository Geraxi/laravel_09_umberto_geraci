<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;



class MovieController extends Controller

{
    public $movies =[
        ['id'=> '1', 'title'=> 'Interstellar', 'director'=> 'Christopher Nolan', 'img'=> '/media/interstellar.png' , 'genres'=>'Sci-Fi'],
        ['id'=> '2', 'title'=> 'Harry Potter 6', 'director'=> 'David Yates', 'img'=> '/media/hp.png', 'genres'=>'Fantasy'],
        ['id'=> '3', 'title'=> 'The Fog', 'director'=> 'John Carpenter', 'img'=>'/media/fog.png' , 'genres'=>'Horror'],
        ['id'=> '4', 'title'=> 'A Queit Place', 'director'=>'John Krasinski', 'img'=>'/media/aqp.png', 'genres'=>'Horror'],
        ['id'=> '5', 'title'=> 'Red Notice' , 'director'=>'Rawson Marshall Thruber' , 'img'=>'/media/rednotice.png', 'genres'=>'Action Comedy'],
    ];
   public function movieList()
   {
     $movies=Movie::all();
        
        return view('movie.movies', ['movies'=>$movies]);
    }

    public function movieDetail($id){
         foreach($this->movies as $movie){
            if($id == $movie['id']){
                return view('movie-detail' , ['movie'=>$movie]);
            }
        }

    }

    public function create(){
        return view('movie.create');
    }



    public function store(Request $request)
{
    $movie=Movie::create([
        'title'=>$request->title,
        'director'=>$request->director,
        'year'=>$request->year,
        'plot'=>$request->plot
    ]);

    return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo film');
}
}

