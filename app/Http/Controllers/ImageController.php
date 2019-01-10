<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagee;

class ImageController extends Controller
{
        public function image(){
            $images= Imagee::all();
            return view ('welcome')->with('images',$images);
        }


        public function store(Request $request){
            
           $this->validate($request,[
               'title' => 'required',
               'image' => 'required | mimes:jpeg,jpg,png',
           ]);

        $image= new Imagee; //model name Imagee
         $image->title = $request->title;
         if($request->hasFile('image')){
             //store
            $image->image= $request->image->store('public/images');
         }
         $image->save();
         return redirect()->route('image');
       
        }
}
