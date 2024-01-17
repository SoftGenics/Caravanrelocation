<?php

namespace App\Http\Controllers;
use App\Models\Qualification;
use App\Models\Application;
use Illuminate\Http\Request;

class QualificationController extends Controller
{



    public function addqualification(Request $request){

        $image = $request->file('document');
            
            if($image){
        $teaser_image = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        
        $image->move($destinationPath,  $teaser_image );
}
else{
    $user_id=$request['user_id']; 
    $info=Qualification::where('user_id',$user_id)->first();
     $teaser_image=$info->document;
}
        try{
            $user_id=$request['user_id']; 
            $info=Qualification::where('user_id',$user_id)->first();
            if($info){
           $update=$info->update(['Stream'=>$request['Stream'],
           'user_id'=>$request['user_id'], 
           'University'=> $request['University'], 
           'Exprienceoffline'=>$request['Exprienceoffline'], 
           'Exprienceonline'=> $request['Exprienceonline'],
           'Specialachievements'=>$request['Specialachievements'], 
           'Anyotherdetails'=>$request['Anyotherdetails'], 
           'AboutProject'=> $request['AboutProject'], 
           'document'=>  $teaser_image, 
           ]
            );
           if($update){
            return redirect('profile')->with('statuses', 'Qualification posted');
           }
           else{
            return redirect('profile')->with('statuses', 'error');
           }

            }
           $update = Qualification::updateOrCreate(['Stream'=>$request['Stream'],
           'user_id'=>$request['user_id'], 
           'University'=> $request['University'], 
           'Exprienceoffline'=>$request['Exprienceoffline'], 
           'Exprienceonline'=> $request['Exprienceonline'],
           'Specialachievements'=>$request['Specialachievements'], 
           'Anyotherdetails'=>$request['Anyotherdetails'], 
           'AboutProject'=> $request['AboutProject'], 
           'document'=> $teaser_image, 
           ]
            
           );
           if($update){
            return redirect('profile')->with('statuses', 'Qualification updated');
           }
           else{
            return redirect('profile')->with('statuses', 'error');
           }


return $request;
        }
        catch (exception $e){
return $e;



        }



    }
    public function add_application(Request $request){
              $strings = "";
if($request->asubject!=null){
foreach($request->asubject as $subarray){
    $strings .= implode(",", $subarray)."#";
}

$strings = rtrim($strings, "#");
        //echo "<pre>";
       // print_r($request->all());
        // $cs = implode(",", $request->alang);
        // $cs1 = implode(",", $request->aseg);
        // $cs2 = implode(",", $request->afees);
      // $cs3 = implode(",", $request->arefph);
      // $cs4 = implode(",", $request->arefnm);
     
        //  echo $cs; 
        //  echo $cs1;
        //  echo $cs2."\n";
        //  echo $strings."\n";
  
        $image = $request->file('aintro');
        $teaser_image1=null;
                $teaser_image2=null;
                $teaser_image3=null;
                $teaser_image4=null;
                $teaser_image5=null;
                $teaser_image6=null;
            if($image){
      $teaser_image1 = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img');
      
      $image->move($destinationPath,  $teaser_image1 );
      $image = $request->file('acerti');
            
      $teaser_image2 = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img');
      
      $image->move($destinationPath,  $teaser_image2 );
      $image = $request->file('agovtid');
            
      $teaser_image3 = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img');
      
      $image->move($destinationPath,  $teaser_image3 );
      $image = $request->file('aqualif');
            
      $teaser_image4 = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img');
      
      $image->move($destinationPath,  $teaser_image4 );
      $image = $request->file('aphoto');
            
      $teaser_image5 = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img');
      
      $image->move($destinationPath,  $teaser_image5 );
      $image = $request->file('aterm');
            
      $teaser_image6 = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img');
      
      $image->move($destinationPath,  $teaser_image6 );
      
            }
           
       
         $user=session()->get('users');
         $id=$user['id'];
             $epost = new Application;
             $epost->user_id = $id;
             $epost->privacy = implode(",", $request->aprivacy);
             $epost->canteach = implode(",", $request->amode);
             $epost->alang = implode(",", $request->alang);
             $epost->subject =$strings;
             $epost->segment = implode(",", $request->aseg);
             $epost->fees = implode(",", $request->afees);
             $epost->asell = $request->asell;
             
             $epost->experienceofforeign = $request->aexp;
             $epost->aref = $request->aref;
             $epost->aproject = $request->aproject;
             $epost->agovtype = $request->agovtype;
             $epost->aregfee = $request->aregfee;
            //  $epost->arefnm = implode(",",$request->arenm);
            //  $epost->arefph = implode(",",$request->areph);
            $epost->killvideo = $teaser_image1;
             $epost->acerti = $teaser_image2;
             $epost->agovtid = $teaser_image3;
             $epost->aqualif = $teaser_image4;
             $epost->aphoto = $teaser_image5;
             $epost->aterm = $teaser_image6;
             $result=$epost->save();
        
             return redirect('profile')->with('statuses', 'Application posted');
}
    else{
        return redirect('profile')->with('statuses', 'Application posted'); 
    }
    }
    
}
