<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rating;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class Ratingsubmit extends Controller
{
    //
    public function saveRating(Request $request)
    {
        $cadidate_id = session()->get('users')->id;

        $data = rating::where('user_id', $request->user_id)->where('by_id', $cadidate_id)->first();
        if ($data) {
return response()->json(['success' =>false, 'msg' => "allready exist" ]);
        } else {
            $rating = new rating();
            $rating->user_id = $request->user_id;
            $rating->by_id = $cadidate_id;
            $rating->rating = $request->rating;
            $rating->description = $request->description;
            $rating->save();
           return response()->json(['success' =>true, 'msg' => "success" ]);
        }
    }
    public function  editRating(Request $request)
    {
        $cadidate_id = session()->get('users')->id;

        $data = rating::where('id', $request->user_id)->first();
        if ($data) {

           
            $data->rating = $request->rating;
            $data->description = $request->description;
            $data->update();
            
            return redirect()->back();
        } else {
            $rating = new rating();
            $rating->user_id = $request->user_id;
            $rating->by_id = $cadidate_id;
            $rating->rating = $request->rating;
            $rating->description = $request->description;
            $rating->save();
            
            return redirect()->back();
        }
    }
    
  public  function viewRating(Request $request) {
       
                   // $category=App\Models\User::find($users->id);
             $cadidate = session()->get('users');  
             if($cadidate->category==1){
                 
                 
                 
                 $collection =  DB::select( DB::raw("SELECT * FROM persanal_infos JOIN ratings ON persanal_infos.user_id = ratings.user_id WHERE ratings.by_id=$cadidate->id ORDER BY ratings.id DESC"));
       
             }
             else{
                   $collection =  DB::select( DB::raw("SELECT * FROM jobshikharprofiles JOIN ratings ON jobshikharprofiles.user_id = ratings.user_id WHERE ratings.by_id=$cadidate->id ORDER BY ratings.id DESC"));
             }
             
    return view('student/rate', compact('collection'));
}
   
}