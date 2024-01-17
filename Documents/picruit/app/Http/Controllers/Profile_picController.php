<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMedia;
use App\Models\Profile_pics;
use App\Models\Profile;
use App\Models\Eprofile;
use App\Models\jobshikharprofile;

use App\Models\googlemap;
use Session;
class Profile_picController extends Controller
{
    public function mediafile(Request $request, $id){

        //    $validatedData = $request->validate([
        //       'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
     
        //      ]);
     
             $name = $request->file('image')->getClientOriginalName();
     
             $path = $request->file('image')->store('image');
            
          $user = new UserMedia;
          $user->user_id=$id;
          $user->title=$request->input('title');
          $user->mediafile=$name;
          $user->about_media=$request->input('about_media');


       $result=$user->save();
           
              if($result){
               return  $result;
              }
              else{
              return "Not inserted data";
              }
           return  "not Success";
           }
           public function update_image(Request $request){
            $img_name = 'img_'.time().'.'.$request->profile->getClientOriginalExtension();
            $request->profile->move(public_path('img/'), $img_name);
            $imagePath = 'img/'.$img_name;
            // $data = [
            //     'mediafile'=>$imagePath,
            // ]; 
            $users=session()->get('users');
            $id=$users['id'];
            //$userf = new ;
           

           $update = Profile_pics::updateOrCreate(
                ['user_id' => $id],
                ['image' => $imagePath]
            );
            if($update){
                $response['success'] = true;
                $response['message'] = 'Success! Record Updated Successfully.';
                Session::put('userimage',$imagePath);
            }else{
                $response['success'] = false;
                $response['message'] = 'Error! Record Not Updated.';
            }
            return $response;
        }

public function details_update(Request $request){
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




    
    $user=session()->get('users');
    $id=$user['id'];
    $users=Profile::where('user_id',$id)->first();
    if($users){
        $users->user_id=$id;
        $users->country=$request->input('country');
        $users->state=$request->input('state');
        $users->city=$request->input('city');
        $users->name=$request->input('name');
        $users->psname=$request->input('psname');
        $users->aera=$request->input('aera');
        $users->pincode=$request->input('pincode');
        $users->address=$request->input('address');
        $users->whatappno=$request->input('whatappno');
        
        

     $result=$users->update();
     
     $location=googlemap::where('user_id',$id)->first();
     if($response_a->results!=null){
         $lat = $response_a->results[0]->geometry->location->lat;
$lng = $response_a->results->geometry[0]->location->lng;
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$id;
         $location->lat=$lat;
     $location->lng=$lng;
     $location->save();
     }
     
     }
     return redirect()->intended('my-notification/message');
     }
    else{
        $user = new Profile;
    
          $user->user_id=$id;
          $user->country=$request->input('country');
          $user->state=$request->input('state');
          $user->city=$request->input('city');
          $user->name=$request->input('name');
          $user->psname=$request->input('psname');
          $user->aera=$request->input('aera');
          $user->pincode=$request->input('pincode');
          $user->address=$request->input('address');
          $user->whatappno=$request->input('whatappno');
          
          

       $result=$user->save();
       
        $location=googlemap::where('user_id',$id)->first();
        if($response_a->results!=null){
         $lat = $response_a->results[0]->geometry->location->lat;
$lng = $response_a->results->geometry[0]->location->lng;
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$id;
         $location->lat=$lat;
     $location->lng=$lng;
     $location->save();
     }
        }
       return redirect()->intended('my-notification/message');
    }
    
}

//job shikhar

public function jobshikher_update(Request $request){
    $user=session()->get('users');
    $id=$user['id'];
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



    $users=jobshikharprofile::where('user_id',$id)->first();
    if($users){
        $users->user_id=$id;
        $users->country=$request->input('country');
        $users->state=$request->input('state');
        $users->city=$request->input('city');
        $users->name=$request->input('name');
          
         $users->gender=$request->input('gender');
          $users->qualification=$request->input('qualification');
        $users->aera=$request->input('aera');
        $users->pincode=$request->input('pincode');
        $users->address=$request->input('address');
        $users->whatappno=$request->input('whatappno');
        
        

     $result=$users->update();
      $location=googlemap::where('user_id',$id)->first();
      if($response_a->results!=null){
         $lat = $response_a->results[0]->geometry->location->lat;
$lng = $response_a->results->geometry[0]->location->lng;
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$id;
         $location->lat=$lat;
     $location->lng=$lng;
     $location->save();
     }
      }
     return redirect()->intended('my-notification/jobsikherprofile');
     }
    else{
        $lat=null;
        $lng=null;
        $user = new jobshikharprofile;
    
          $user->user_id=$id;
          $user->country=$request->input('country');
          $user->state=$request->input('state');
          $user->city=$request->input('city');
          $user->name=$request->input('name');
          // $users->gender=$request->gender;
          $user->qualification=$request->qualification;
          $user->aera=$request->input('aera');
          $user->pincode=$request->input('pincode');
          $user->address=$request->input('address');
          $user->whatappno=$request->input('whatappno');
          
          

       $result=$user->save();
       
        $location=googlemap::where('user_id',$id)->first();
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$id;
         $location->lat=$lat;
     $location->lng=$lng;
     $location->save();
     }
       
       return redirect()->intended('my-notification/jobsikherprofile');
    }
    
}
public function store_form(Request $request){
    
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




    $user=session()->get('users');
    

    
    $id=$user['id'];
      
    $eprofile=Eprofile::where('user_id',$id)->first();
     $image = $request->file('docsimages');
            if($image!=null){
    $teaser_image = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/img');
    
    $image->move($destinationPath,  $teaser_image );
            }
            else{
              $teaser_image= null;
            }
    if($eprofile!=null){
     
    $eprofile->cname = $request->cname;
    $eprofile->cphone = $request->cphone;
    $eprofile->cemail = $request->cemail;
    $eprofile->name = $request->name;
    $eprofile->phone = $request->phone;
    $eprofile->cem_no = $request->cem_no;
    $eprofile->designation = $request->designation;
    $eprofile->industry = $request->industry;
    $eprofile->location = $request->location;
     $eprofile->pincode = $request->pincode;
    $eprofile->description = $request->description;
    $eprofile->docs =$teaser_image;
    $eprofile->status = "0";
    $result=$eprofile->update();
    
     $location=googlemap::where('user_id',$id)->first();
         if($response_a->results!=null){
         $lat = $response_a->results[0]->geometry->location->lat;
$lng = $response_a->results->geometry[0]->location->lng;
    
  
     if($location){
         
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$id;
         $location->lat=$lat;
     $location->lng=$lng;
     $location->save();
     }
         }
         
        
     return redirect('eprofile')->with('statuses', ' Data Has Been Updated');
    }
    else{

    $eprofile = new Eprofile;
    $eprofile->user_id = $id;
    $eprofile->cname = $request->cname;
    $eprofile->cphone = $request->cphone;
    $eprofile->cemail = $request->cemail;
    $eprofile->name = $request->name;
    $eprofile->phone = $request->phone;
    $eprofile->cem_no = $request->cem_no;
    $eprofile->designation = $request->designation;
    $eprofile->industry = $request->industry;
    $eprofile->location = $request->location;
    $eprofile->description = $request->description;
    $eprofile->docs =$teaser_image;
    $eprofile->status = "0";
    $result=$eprofile->save();
     $location=googlemap::where('user_id',$id)->first();
     if($location){
     $location->lat=$lat;
     $location->lng=$lng;
     $location->update();
     }else{
          $location=new googlemap();
          $location->user_id=$id;
         $location->lat=$lat;
     $location->lng=$lng;
     $location->save();
     }
    
     return redirect('eprofile')->with('statuses', ' Data Has Been inserted');
}}
}
?>