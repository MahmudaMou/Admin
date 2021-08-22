<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galarymodel;
use App\Categorymodel;

class galarycontroller extends Controller
{
    public function index()
    {
        return view('post');
    }
    public function store(Request $request)
    {
        $galary= new galarymodel();
        $galary->category_id= $request->input('category_id');
        $galary->title= $request->input('title');
        $galary->descrepeipn= $request->input('descrepeipn');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/galary/',$filename);
            $galary->image= $filename;
        }
        else{
            return $request;
            $galary->image='';
        }
        $galary->save();
        return view('post')->with('galary',$galary);
        

    }


    public function newview(){

        //where check cat
        
        $galary= galarymodel::all();


        
        $category= Categorymodel::all();

        return view('layout', compact('galary', 'category'));
    }

    public function categoyWiseData(Request $request,$id){
        //dd('dd');
        $category= Categorymodel::all();
        $galary= galarymodel::where('category_id',$id)->get();
                   return view('layout', compact('galary', 'category'));

         // id 
         // wherer Gallery Model 
        //Pass

    }
   


  
}

