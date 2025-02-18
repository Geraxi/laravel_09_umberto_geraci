<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MovieController extends Controller

{
    public $movies =[
        ['id'=> '1', 'title'=> 'Interstellar', 'director'=> 'Christopher Nolan', 'img'=> '/media/interstellar.png' , 'genres'=>'Sci-Fi'],
        ['id'=> '2', 'title'=> 'Harry Potter 6', 'director'=> 'David Yates', 'img'=> '/media/hp.png', 'genres'=>'Fantasy'],
        ['id'=> '3', 'title'=> 'The Fog', 'director'=> 'John Carpenter', 'img'=>'/media/fog.png' , 'genres'=>'Horror'],
        ['id'=> '4', 'title'=> 'A Queit Place', 'director'=>'John Krasinski', 'img'=>'/media/aqp.png', 'genres'=>'Horror'],
        ['id'=> '5', 'title'=> 'Red Notice' , 'director'=>'Rawson Marshall Thruber' , 'img'=>'/media/rednotice.png', 'genres'=>'Action Comedy'],
    ];
   public function movieList(){
        
        return view('movies', ['movies'=>$this->movies]);
    }

    public function movieDetail($id){
         foreach($this->movies as $movie){
            if($id == $movie['id']){
                return view('movie-detail' , ['movie'=>$movie]);
            }
        }
    }
}
