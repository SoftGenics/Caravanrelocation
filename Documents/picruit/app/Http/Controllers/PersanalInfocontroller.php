<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersanalInfo;
use App\Models\googlemap;

class PersanalInfocontroller extends Controller
{
    public function addinfo(Request $request){

      


        try{
                      $address=$request->pincode;
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address) . "&key=AIzaSyDdi5PRTgJHX2V1MXNY2miatJPRcDPWgz4";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

$response_a = json_decode($response);
if($response_a->results!=null){
$lat = $response_a->results[0]->geometry->location->lat;
$lng = $response_a->results[0]->geometry->location->lng;
}
else{
    $lat = 0;
$lng =0;
}
            
            $user_id=$request['user_id']; 
            $info=PersanalInfo::where('user_id',$user_id)->first();
            if($info){
           $update=$info->update(['f_name'=>$request['f_name'],
           'user_id'=>$request['user_id'], 
           'f_name'=> $request['f_name'], 
           'l_name'=>$request['l_name'], 
           'email'=> $request['email'],
           'number'=>$request['number'], 
           'dob'=>$request['dob'], 
           'gender'=> $request['gender'], 
           'address'=> $request['address'], 
           'country'=>$request['country'],
           'state'=>  $request['state'], 
           'city'=> $request['city'], 
           'pincode'=> $request['pincode'], 
           'area'=> $request['area']]
            );
           if($update){
$location=googlemap::where('user_id',$user_id)->first();
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$user_id;
         $location->lat=$lat;
     $location->lng=$lng;}



            return redirect()->back();
           }
           else{
            return 'error';
           }

            }
           $update = PersanalInfo::updateOrCreate([ 'f_name'=>$request['f_name'],
           'user_id'=>$request['user_id'], 
           'f_name'=> $request['f_name'], 
           'l_name'=>$request['l_name'], 
           'email'=> $request['email'],
           'number'=>$request['number'], 
           'dob'=>$request['dob'], 
           'gender'=> $request['gender'], 
           'address'=> $request['address'], 
           'country'=>$request['country'],
           'state'=>  $request['state'], 
           'city'=> $request['city'], 
           'pincode'=> $request['pincode'], 
           'area'=> $request['area']]
            
           );
           if($update){
               
               $location=googlemap::where('user_id',$user_id)->first();
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$user_id;
         $location->lat=$lat;
     $location->lng=$lng;}
            return redirect()->back();
           }
           else{
            return 'error';
           }


return $request;
        }
        catch (exception $e){
return $e;



        }



    }
}
