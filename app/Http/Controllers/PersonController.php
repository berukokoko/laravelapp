<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function index(Requsest $request){
      $items = Person::all();
      return view('person.index',['items'=>$items]);
    }
}
