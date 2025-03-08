<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;



class PublicController extends Controller
{
    public $users=[
        ['name'=> 'Mario', 'surname'=>'Rossi', 'role'=>'Senior Manager'],
        ['name'=> 'Serena', 'surname'=>'Verdi', 'role'=>'HR'],
        ['name'=> 'Walter', 'surname'=>'Bianhi', 'role'=>'Developer'],
    ];
    public function homepage(){
        return view('welcome');
    }
  public function aboutUs()
  {
    
    return view('about-us',['users'=>$this->users]);
   }
   

  public function aboutUsDetail($name)
 {
    
    foreach($this->users as $user){
      if($name == $user['name']){
          return view('about-us-detail', ['user'=>$user]);
      }
    }
  }

  public function contacts()
  {
    return view('contacts');
  } 
  
  public function contactUs(Request $request)
  {
    $user= $request->input('user');
    $email=$request->input('email');
    $message= $request->input('message');


   try{
    Mail::to($email)->send(new ContactMail());

  }catch(Exception $e){
     return redirect()->route('homepage')->with('emailError',"C'é stato un problema con l'invio della mail, per favore riprova più tardi");
   
    }
      return redirect()->route('homepage')->with('emailSent',"Hai correttamente inviato un email");
    }

  }
   
  










