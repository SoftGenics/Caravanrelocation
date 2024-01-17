<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\savetutions;
use App\Models\savejob;
use App\Models\enewjobs;
use App\Models\srequirement;
use App\Models\savetutors;

use Illuminate\Support\Facades\DB;

class saveController extends Controller
{
    public function savejob(Request $request ,$id){
         $user=session()->get('users');
         
         
        $emp=enewjobs::find($id);
        $save=savejob::where('user_id',$user->id)->where('job_id',$id)->first();
        if($save){
         return redirect()->back();   
        }
        else{
          $savejob=new savejob();
       $savejob-> user_id=$user->id;
        $savejob->job_id=$id;
        $savejob->emp_id=$emp->user_id;
         $result=$savejob->save();
         return redirect()->back();  
        }
        
        
    }
    public function savetutor(Request $request ,$id){
         $user=session()->get('users');
         
         
        
        $save=savetutors::where('user_id',$user->id)->where('tutor_id',$id)->first();
        if($save){
         return redirect()->back();   
        }
        else{
          $savejob=new savetutors();
       $savejob-> user_id=$user->id;
        $savejob->tutor_id=$id;
     
         $result=$savejob->save();
         return redirect()->back();  
        }
        
        
    }
    
     public function savetuition(Request $request, $id){
         $savetution=new savetutions();
          $user=session()->get('users');
         
         
        $emp=srequirement::find($id);
        
        $save=savetutions::where('user_id',$user->id)->where('tuetion_id',$id)->first();
        if($save){
         return redirect()->back();   
        }
        else{
          $savejob=new savetutions();
       $savejob-> user_id=$user->id;
        $savejob->tuetion_id=$id;
        $savejob->std_id=$emp->user_id;
         $result=$savejob->save();
         return redirect()->back();  
        }
    }
    public function comjob(Request $request){
       $user=session()->get('users');
     if($request->job_id || $request->jobpost_id || $request->status || $request->title || $request->salary){
            $candidate = DB::select( DB::raw("SELECT * FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE candiate_models.apply_status=1 AND enewjobs.title = '$request->title' or candiate_models.job_id = '$request->job_id' or enewjobs.salary = '$request->salary'  ORDER BY candiate_models.id DESC"));
        }else{
            $candidate = DB::select( DB::raw("SELECT * FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE candiate_models.apply_status=1  ORDER BY candiate_models.id DESC"));
        }
       
       return view('jobseeker/comjobs', compact('candidate'));
   }
    
   public function savejobfind(Request $request){
       $user=session()->get('users');
     if($request->job_id || $request->jobpost_id || $request->status || $request->title || $request->salary){
           $persanal = savejob::where('user_id',$user->id)->get()->sortByDesc('updated_at');
        }else{
            $persanal = DB::select( DB::raw("SELECT * FROM savejobs JOIN enewjobs ON savejobs.job_id = enewjobs.id WHERE savejobs.user_id='$user->id'  ORDER BY savejobs.id DESC"));
        }
       return view('jobseeker/sjjobs',compact('persanal'));
      
   }
   public function savetutorfind(Request $request){
       $user=session()->get('users');
     if($request->job_id || $request->jobpost_id || $request->status || $request->title || $request->salary){
           $persanal = savetutors::where('user_id',$user->id)->get()->sortByDesc('updated_at');
        }else{
            $persanal = DB::select( DB::raw("SELECT * FROM savetutors JOIN enewjobs ON savetutors.job_id = enewjobs.id WHERE savejobs.user_id='$user->id'  ORDER BY savetutors.id DESC"));
        }
       return view('jobseeker/sjjobs',compact('persanal'));
      
   }
   
}
