<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enewjobs;
use App\Models\linkedTutors;
use App\Models\jobshikharprofile;
use App\Models\srequirement;
use Illuminate\Database\Query\Builder;
use App\Models\CandiateModel;
use Illuminate\Support\Facades\DB;



class findjobController extends Controller
{
     public function filter_result(Request $request)
    {  
          if ($request['title']!==null && $request['salary']!==null && $request['location']!==null ){
               $persanal = enewjobs::where('title', $request['title'])->orwhere('location', $request['location'])->orwhere('salary', $request['salary'])->where('status', true)->get()->sortByDesc('updated_at');
              
          }
           else if($request['title']){
          $persanal = enewjobs::where('title', $request['title'])->where('status', true)->get()->sortByDesc('updated_at');

        }
         else if($request->minsalary || $request->maxsalary){
          $persanal = enewjobs::where('minsalary', $request['minsalary'])->where('status', true)->orwhere('minsalary', $request['maxsalary'])->get()->sortByDesc('updated_at');

        }
        else if($request->location){
            $persanal = enewjobs::where('location', $request['location'])->where('status', true)->get()->sortByDesc('updated_at');
        
            
        }
        
        else {
            $persanal = enewjobs::where('status', true)->get()->sortByDesc('id');
        }
      return view('pages/find-job', compact('persanal'));
      
    }
    
    //jobshikher
    
     public function filter_jobshikher(Request $request)
    {  
        //$search = $request['city'] ?? "";
        
        if($request->title || $request->salary || $request->city){
            $persanal = enewjobs::where('title', $request['title'])->orWhere('location', $request['city'])->orWhere('status',true)->orWhere('salary','<',$request['salary'])->get();
           
        }else{
            $persanal = enewjobs::where('status',true)->get()->sortByDesc('updated_at');
        }
        return view('jobseeker/ajobs', compact('persanal'));
    }
    // apply job
     public function filter_applyjob(Request $request)
    {  
        
         $user_id=session()->get('users')->id;
        //$search = $request['city'] ?? "";
        
       if($request->apply_id || $request->job_id || $request->jobpost_id || $request->for || $request->status){
           
            $candidate = CandiateModel::where('apply_id', $request['apply_id'])->orWhere('job_id', $request['job_id'])->orWhere('jobpost_id', $request['jobpost_id'])->orWhere('for', $request['for'])->orWhere('status', $request['status'])->where('user_id',$user_id)->get();
           
        }else{
            $candidate = DB::select( DB::raw("SELECT * FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE candiate_models.apply_id=$user_id ORDER BY candiate_models.id DESC"));
        }
        return view('jobseeker/apjobs', compact('candidate'));
    }
    
    public function filter_work(Request $request){
        if($request->city || $request->gender){
            $persanal = enewjobs::where('city', $request['city'])->orWhere('gender', $request['gender'])->get();
           
        }else{
            $persanal = enewjobs::all();
        }
        return view('jobseeker/ajobs', compact('persanal'));
    }
    
   public function  filter_tuision(Request $request){
       if($request->city){
           $persanal = srequirement::where('city', $request['city'])->get();
           
       }
       else if($request->subject){
           $persanal = srequirement::where('subject', $request['subject'])->get();
           
       }  
        else if($request->class){
            $persanal = srequirement::where('class', $request['class'])->get();
           
        }
         else if($request->mode){
             $persanal = srequirement::where('mode', $request['mode'])->get();
           
         } 
         else if($request->pincode){
            $persanal = srequirement::where('pincode', $request['pincode'])->get();
           
        }else{
            $persanal = srequirement::all()->sortByDesc('updated_at');
        }
        return view('pages/browse-tutor', compact('persanal'));
   }
   
    public function tutorsgetData(Request $request, $id){
        $data=srequirement::find($id);
        
        return $data;
    }
    public function findjobgetData(Request $request,$id){
         $data=enewjobs::find($id);
        
        return $data;
        
    }
    public function findworkgetData(Request $request,$id){
         $data=enewjobs::find($id);
        
        return $data;
        
    }
    
    public function filter_requirement(Request $request){
        $user=session()->get('users');
     if($request->s_name || $request->mode || $request->subject || $request->pincode || $request->city){
            $persanal = srequirement::where('s_name', $request['s_name'])->orWhere('mode', $request['mode'])->orWhere('subject', $request['subject'])
            ->orWhere('pincode', $request['pincode'])->orWhere('city', $request['city'])->get()->sortByDesc('updated_at');
        }else{
            $persanal = srequirement::where('user_id',$user->id)->get()->sortByDesc('updated_at');
        }
        return view('student/apostnew', compact('persanal'));
   }
   
    public function filter_postjob(Request $request)
    {  
        $user=session()->get('users');
        //$search = $request['city'] ?? "";
        
        if($request->title || $request->salary){
            $persanal = enewjobs::where('title', $request['title'])->where('status',true)->orWhere('salary',$request['salary'])->get();
           
        }else{
            $persanal = enewjobs::where('user_id',$user->id)->where('status',true)->get()->sortByDesc('updated_at');
        }
        return view('employer/ajobs', compact('persanal'));
    }
    //delete job
     public function deletejob(Request $request, $id)
    {  
        
        
        $user=session()->get('users');
        $job=enewjobs::find($id);
        if($user){
        if($job){
            
        $job->status=false;
        $result=$job->update();
        }else{
            $result = "not delete";
        }}else{
            return "please login";
        }
        return $result;
    }
    
    public function filter_postclose(Request $request)
    {  
        $user=session()->get('users');
        //$search = $request['city'] ?? "";
        
        if($request->title || $request->salary){
            $persanal = enewjobs::where('title', $request['title'])->orWhere('salary','<',$request['salary'])->get();
           
        }else{
            $persanal = enewjobs::where('user_id',$user->id)->where('status',false)->get()->sortByDesc('updated_at');
        }
        return view('employer/rjobs', compact('persanal'));
    }
   
   public function filter_condidate(Request $request)
    {  
        $user=session()->get('users');
        
        
        if($request->city || $request->gender || $request->qualification){
            $persanal = jobshikharprofile::where('city', $request['city'])->orWhere('gender',$request['gender'])->orWhere('qualification',$request['qualification'])->get();
           
        }else{
           $persanal = jobshikharprofile::all();
           // $persanal = enewjobs::where('user_id',$user->id)->where('status',true)->get()->sortByDesc('updated_at');
        }
        return view('employer/candidates', compact('persanal'));
    }
    
   public function applyTuition(Request $request){
       $filesPath=null;
       $user=session()->get('users');
        if($request->file('doc')){
        $img_name = 'file_'.time().'.'.$request->file('doc')->getClientOriginalExtension();
       $request->file('files')->move(public_path('files/'), $img_name);
       $filesPath = 'files/'.$img_name;
        }
        
        
          $linkedTutors=new linkedTutors();
          $linkedTutors->tutor_id=$user->id;
          $linkedTutors->tuition_id=$request->tuition_id;
          $linkedTutors->std_id=$request->std_id;
          $linkedTutors->discription=$request->discription;
          $linkedTutors->doc=$filesPath;
          $linkedTutors->status=0;
          
          $result= $linkedTutors->save();
          if($result){
             return redirect('/tutors');
          }
          else{
               return redirect('/tutors');
          }
           
           
       
       }
       
       
   
   
    
}
