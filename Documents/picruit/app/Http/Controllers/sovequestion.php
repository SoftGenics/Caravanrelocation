<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solve_questions;

use App\Models\Profile;

class sovequestion extends Controller
{
    
    public function sendQuestion(Request $request){
        $user=session()->get('users');
        $name=Profile::where('user_id',$user->id)->first();
        if($request->mediafile){
            $img_name = 'img_'.time().'.'.$request->mediafile->getClientOriginalExtension();
        $request->mediafile->move(public_path('questions/'), $img_name);
        $imagePath = 'img/'.$img_name;
        if($name){
         $question=new solve_questions();
         $question->sname=$name->name; 
         $question->user_id=$user->id;
         $question->title=$request->title;
         $question->mediafile=$imagePath;
         $question->aboutProblem=$request->aboutProblem;
         
        $result= $question->save();
        }
        else{
            $question=new solve_questions();
          
         $question->user_id=$user->id;
         $question->title=$request->title;
         $question->mediafile=$imagePath;
         $question->aboutProblem=$request->aboutProblem;
         
        $result= $question->save();
            
        }
        }
        else{
            $question=new solve_questions();
          
         $question->user_id=$user->id;
         $question->title=$request->title;
        
         $question->aboutProblem=$request->aboutProblem;
         
        $result= $question->save();
        }
        
        return $result;
        
    }
      
    
    
}
