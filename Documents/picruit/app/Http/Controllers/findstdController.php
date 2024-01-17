<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class findstdController extends Controller
{
    public function findstudet(Request $request){
        if($request){
        $persanal = DB::select( DB::raw("SELECT * FROM users JOIN profiles ON users.id = profiles.user_id WHERE users.category=1 ORDER BY users.id DESC"));
        }
        
          
        else{
$persanal = DB::select( DB::raw("SELECT * FROM users JOIN profiles ON users.id = profiles.user_id WHERE users.category=1 ORDER BY users.id DESC"));
        }
       
      return view('tutor/studentlist',compact('persanal')); 
       
    
}

public function saveStudent(Request $request){
     $user=session()->get('users');
    $id=$user->id;
    $persanal = DB::select( DB::raw("SELECT * FROM linked_tutors JOIN profiles ON linked_tutors.std_id = profiles.user_id WHERE linked_tutors.tutor_id=$id ORDER BY linked_tutors.id DESC"));
    
   return view('tutor/hslist',compact('persanal')); 
}

public function stutor(Request $request){
     $user=session()->get('users'); 
    $id=$user->id;
    $persanal = DB::select( DB::raw("SELECT * FROM savetutors JOIN persanal_infos ON savetutors.tutor_id = persanal_infos.user_id WHERE savetutors.user_id=$id ORDER BY savetutors.id DESC"));
    
   return view('student/stutors',compact('persanal')); 
}

public function ftutor(Request $request){
     $user=session()->get('users');
    $id=$user->id;
    $persanal = DB::select( DB::raw("SELECT * FROM linked_tutors JOIN profiles ON linked_tutors.std_id = profiles.user_id WHERE linked_tutors.tutor_id=$id ORDER BY linked_tutors.id DESC"));
    
   return view('student/ftutors',compact('persanal')); 
}
public function recentCtutor(Request $request){
     $user=session()->get('users');
    $id=$user->id;
    $persanal = DB::select( DB::raw("SELECT * FROM recentcheckeds JOIN persanal_infos ON recentcheckeds.checked_id = persanal_infos.user_id JOIN applications
  ON persanal_infos.user_id = applications.user_id WHERE recentcheckeds.user_id=$id ORDER BY recentcheckeds.id DESC"));
    
   return view('student/rtutors',compact('persanal')); 
}

}