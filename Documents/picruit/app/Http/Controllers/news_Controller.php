<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\news;
use App\Models\Comments;
use Session;
use Illuminate\Support\Facades\Input;

class news_Controller extends Controller
{
     
    
    
    
    public function newspost(Request $request){
        $data=news::create($request->all());
        return $data; 
    }
    
   
    public function allnews(){
       $blogs=news::all();
       
       //return $blogs;
       return view('pages/news', compact('blogs'));
        
    }
    
    

}