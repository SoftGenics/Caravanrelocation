<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersanalInfo;
use App\Models\Eprofile;
use Illuminate\Support\Facades\DB;
use App\Models\Application;
use App\Models\jobshikharprofile;

 
class Connectcontroller extends Controller
{
    //
    public function filter_result(Request $request)
    {  
        //$search = $request['city'] ?? "";
        
        if($request->city || $request->gender){
            $persanal = PersanalInfo::where('city', $request['city'])->orWhere('gender', $request['gender'])->get();
           
        }else{
            $persanal = $persanal =   $persanal =  DB::select( DB::raw('SELECT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id   ORDER BY persanal_infos.id DESC'));
        }
        return view('tution/connect_tution', compact('persanal'));
    }



public function filter_emp(Request $request)
    {  
        //$search = $request['city'] ?? "";
        
        if($request->city || $request->gender){
            $persanal = Eprofile::where('city', $request['city'])->orWhere('gender', $request['gender'])->get();
           
        }else{
            $persanal = Eprofile::all();
        }
        return view('employer/connect_with_emp', compact('persanal'));
    }


public function filter_tutor(Request $request)
    {  
        //$search = $request['city'] ?? "";
        
        if($request->city || $request->gender ||$request->state || $request->qualification){
            $persanal = jobshikharprofile::where('city', $request['city'])->orWhere('gender', $request['gender'])->orWhere('state', $request['state'])->orWhere('qualification', $request['qualification'])->get();
           
        }else{
            $persanal = jobshikharprofile::all();
        }
        return view('freelancing/connect_with_fre', compact('persanal'));
    }
    
    
    
    
    public function filter_tutordash(Request $request)
    {  
        //$search = $request['city'] ?? "";
        
        if($request->name || $request->class || $request->pincode){
           
           // $persanal = PersanalInfo::where('f_name', $request['name'])->orWhere('class', $request['class'])->orWhere('pincode', $request['pincode'])->get();
            $persanal =  DB::select( DB::raw("SELECT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id WHERE  persanal_infos.f_name='$request->name' OR  persanal_infos.pincode='$request->pincode' ORDER BY persanal_infos.id DESC"));
        }
 else if($request->subject){
        $subject= explode(" ",$request->subject);
     $search_fields = ['subject'];
      // $query = DB::select( DB::raw("SELECT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id  ORDER BY persanal_infos.id DESC"));
       $query= Application::join('persanal_infos', 'persanal_infos.user_id', '=', 'applications.user_id');
              		
              	
       //$query=Application::query();
        foreach ( $subject as  $sub) {
            $query->orWhere(function ($query) use ($search_fields, $sub) {

                foreach ($search_fields as $field) {
                    $query->orWhere($field, 'LIKE', '%' . $sub . '%');
                }
            });
        }
         $persanal = $query->get();
        }        
        
        
        else{
            $persanal =  DB::select( DB::raw('SELECT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id   ORDER BY persanal_infos.id DESC'));
            // $persanal = PersanalInfo::all();
        }
        return view('student/atutors', compact('persanal'));
    }
    
}