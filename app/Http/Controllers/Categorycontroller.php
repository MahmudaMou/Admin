<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorymodel;

class Categorycontroller extends Controller
{
    public function newctg(){
        $category= Categorymodel::all();
        return view('category')->with('category',$category);
    }
}
