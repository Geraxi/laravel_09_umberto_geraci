<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Controllers\PublicController;

class PublicController extends  Controller
{
    public function homepage () {
        return view('welcome');
}
}


public function chiSiamo()
{

    $array students=[
        ['name'=>'Leonardo','surname'=>'Di Napoli'],
        ['name'=>'Marco','surname'=>'Roma'],
        ['name'=>'Mattero','surname'=>'Pucci'],
        ['name'=>'Gianmarco','surname'=>'Agostino'],
        
    ];
    return view('chiSiamo',['students=>$arrayStudents']);
}


public function docenti()
{
$array Teachers=[
    ['name'=>'Nicola','surname'=>'Gusparro', 'subject'=>'HTML, CSS, Bootstrap'],
    ['name'=>'Fabrizio','surname'=>'Biancaniello', 'subject'=>'Javascript'],
    ['name'=>'Emilia','surname'=>'Salvo', 'subject'=>'PHP'],
    ['name'=>'Annalisa','surname'=>'Caldarulo', 'subject'=>'PHP, Laravel'],
    ['name'=>'Luca','surname'=>'Venturi', 'subject'=>'Laravel'],
];
return view('docenti',['teachers'=>$arrayTeachers]);
}
