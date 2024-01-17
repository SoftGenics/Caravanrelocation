<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Qualification;
use App\Models\PersanalInfo;
use App\Models\Application;


class Profile_Controller extends Controller
{
    public function profile(Request $request){
        $data=[];
        $profile=$request->session()->get('users');
        if($profile->category==1){
             
        
           return redirect('sprofile'); 
        
        }
        else if($profile->category==2){
            
             $qualification=Qualification::where('user_id',$profile->id)->first();
        $persionanal_info=PersanalInfo::where('user_id',$profile->id)->first();
        $application=application::where('user_id',$profile->id)->first();
        $data['qualification']=$qualification;
          $data['persionanal_info']=$persionanal_info;
              $data['application']=$application;
           return view('tutor/user_profile',compact('data')); 
        }
        else if($profile->category==3){
            return redirect('/eprofile'); 
          
        }
        else if($profile->category==4){
            return redirect('jprofile'); 
        
        }
        else{
       
        
        return view('pages.signin');
        }
    }
}
