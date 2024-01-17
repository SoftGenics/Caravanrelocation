<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandiateModel;
use Illuminate\Support\Facades\DB;

class CandiateController extends Controller
{
    
    // public function Diasplay(Request $request){

    //     if($request->job_id || $request->jobpost_id || $request->status){
    //         $candidate = CandiateModel::where('job_id', $request['job_id'])->orWhere('jobpost_id', $request['jobpost_id'])->orWhere('status', $request['status'])->get();
    //     }else{
    //         $candidate = DB::select( DB::raw("SELECT * FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id ORDER BY candiate_models.id DESC"));
    //     }
    //     return view('job/candidate', compact('candidate'));
    // }
    
      public function Diasplay(Request $request){

        if($request->job_id || $request->jobpost_id || $request->status || $request->title || $request->salary){
            $candidate = DB::select( DB::raw("SELECT * FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE enewjobs.title = '$request->title' or candiate_models.job_id = '$request->job_id' or enewjobs.salary = '$request->salary'  ORDER BY candiate_models.id DESC"));
        }else{
            $candidate = DB::select( DB::raw("SELECT * FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id ORDER BY candiate_models.id DESC"));
        }
        return view('job/candidate', compact('candidate'));
    }
    
     public function  hirecon(Request $request){

        if($request->apply_id){
            $candidate = DB::select( DB::raw("SELECT candiate_models.id,candiate_models.apply_id,candiate_models.job_id,candiate_models.body,candiate_models.apply_status,candiate_models.resume,candiate_models.approve,enewjobs.title,enewjobs.user_id FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE candiate_models.apply_id='$request->apply_id'  ORDER BY candiate_models.id DESC"));
            
        }  
        else if($request->job_id){
            $candidate = DB::select( DB::raw("SELECT candiate_models.id,candiate_models.apply_id,candiate_models.job_id,candiate_models.body,candiate_models.apply_status,candiate_models.resume,candiate_models.approve,enewjobs.title,enewjobs.user_id FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE candiate_models.apply_id='$request->apply_id' ORDER BY candiate_models.id DESC"));
            
        }  else if($request->jobpost_id){
            $candidate = DB::select( DB::raw("SELECT candiate_models.id,candiate_models.apply_id,candiate_models.job_id,candiate_models.body,candiate_models.apply_status,candiate_models.resume,candiate_models.approve,enewjobs.title,enewjobs.user_id FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE candiate_models.job_id='$request->job_id' ORDER BY candiate_models.id DESC"));
            
        }  else if($request->for){
            
            $candidate = DB::select( DB::raw("SELECT candiate_models.id,candiate_models.apply_id,candiate_models.job_id,candiate_models.body,candiate_models.apply_status,candiate_models.resume,candiate_models.approve,enewjobs.title,enewjobs.user_id FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id WHERE enewjobs.title='$request->for' ORDER BY candiate_models.id DESC"));
            
        }  else{
             $candidate = DB::select( DB::raw("SELECT candiate_models.id,candiate_models.apply_id,candiate_models.job_id,candiate_models.body,candiate_models.apply_status,candiate_models.resume,candiate_models.approve,enewjobs.title,enewjobs.user_id FROM candiate_models JOIN enewjobs ON candiate_models.job_id = enewjobs.id ORDER BY candiate_models.id DESC"));
          
        }
        return view('employer/sjobs', compact('candidate'));
    }
    public function  approve(Request $request, $id){
$condi=CandiateModel::find($id);
$condi->approve=true;
$condi->update();
        
        return redirect()->back();
    }
    public function  reject(Request $request, $id){

        $condi=CandiateModel::find($id);
$condi->apply_status=false;
$condi->update();
        return redirect()->back();
    }
    
    
   
}
