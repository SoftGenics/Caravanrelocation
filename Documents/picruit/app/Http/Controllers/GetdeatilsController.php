<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersanalInfo;
use App\Models\application;
use App\Models\enewjobs;
use App\Models\User;
use App\Models\srequirement;
use App\Models\jobshikharprofile;
use App\Models\CandiateModel;
use Illuminate\Support\Facades\DB;
class GetdeatilsController extends Controller
{
    //
    public function getData(Request $request, $id){

        $infomation = PersanalInfo::find($id);
    
        return $infomation;
    }
    
    public function getjobData(Request $request, $id){
        
        $infomation = enewjobs::find($id);
        return $infomation;
    }
     public function getfreeData(Request $request, $id){
         $infomation = PersanalInfo::find($id);
       return $infomation;  
     }
    public function gettuitionData(Request $request, $id){
        $infomation= DB::select( DB::raw("SELECT users.id as userId,srequirements.* FROM srequirements JOIN users ON srequirements.user_id =users.id  WHERE srequirements.id=$id"));
        //$infomation = srequirement::find($id);
        return $infomation;
    }
  public function  applyjob(Request $request){
       $user=session()->get('users');
       
       $userProfile=jobshikharprofile::where('user_id',$user->id)->first();
       if($userProfile){
           if(isset($user)){
           $user_id=$user->id;
       }else{
         $user_id =12; 
       }
        $filesPath=null;
       $user=session()->get('users');
        if($request->file){
        $img_name = 'file_'.time().'.'.$request->file('files')->getClientOriginalExtension();
       $request->file('files')->move(public_path('files/'), $img_name);
       $filesPath = 'files/'.$img_name;
        }
      $apply=new CandiateModel();
      $apply->apply_id=$user_id;
      $apply->job_id=$request->job_id;
      $apply->jobpost_id=$request->jobpost_id;
      $apply->body=$request->body;
     $apply->resume=$filesPath;
     $apply->for=3746;
      $apply->save();
      
      
     return redirect()->back(); 
       }
       else{
           return redirect()->intended('my-notification/jprofileError');
       }
      
    }
    
    public function gettutorData(Request $request, $id){
        
        $infomation =  DB::select( DB::raw("SELECT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id JOIN qualifications ON persanal_infos.user_id=qualifications.user_id  WHERE persanal_infos.user_id=$id" ));
        //$data=json_decode($infomation);
       
        return  $infomation;
    }
    
    public function getjobshikherData(Request $request, $id){
        
        $infomation =  jobshikharprofile::all();
      
        //$data=json_decode($infomation);
       
        return  $infomation;
    }
}
