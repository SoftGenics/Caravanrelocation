<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Epost;
use App\Models\Eprofile;
use App\Models\Application;
use App\Models\PersanalInfo;
use App\Models\Applynow;
class JsgridController extends Controller
{
    public function fjobsdet(Request $request)
    {
        $eusers=Epost::where('id',$request->keyid)->first();
        $dets=json_encode($eusers);
        return $dets;
    }
    public function store_appli(Request $request)
    {
        // $eusers=Epost::where('id',$request->keyid)->first();
        // $dets=json_encode($eusers);
        // return $dets;
        
        // print_r($request);
         echo '</pre>';
        print_r($request->all());
        //  echo '<pre>';
       // return $request;
       $img_name = 'file_'.time().'.'.$request->file('files')->getClientOriginalExtension();
       $request->file('files')->move(public_path('files/'), $img_name);
       $filesPath = 'files/'.$img_name;
       $user=session()->get('users');
       $id=$user['id'];
           $eappli = new Applynow;
           $eappli->apply_id = $id;
       $eappli->job_id = $request->job_id;
       $eappli->jobpost_id = null;
       $eappli->body = $request->appli;
       $eappli->resume = $filesPath;
       $eappli->for = $request->for;
       $result=$eappli->save();
        
       return redirect('find-job')->with('statuses', 'Job applied');
    }
    public function atutor(Request $request)
    {
        
        if($request->Segment==null && $request->Mode==null && $request->Subject==null && $request->City==null&& $request->Pincode==null && $request->Mobile==null
        && $request->Email==null) {
            file_put_contents("dataar.txt",'#'.json_encode($request));
            $output =array();
            $parts =  DB::select( DB::raw('SELECT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id   ORDER BY persanal_infos.id DESC'));
            //AND segment LIKE :Segment AND mode LIKE :Mode AND type LIKE :Area
            $parts=json_decode(json_encode($parts), true);
            
            foreach($parts as $row)
            {
               
                // $eusers=Eprofile::where('user_id',$row['user_id'])->first();
                // $dets=json_decode(json_encode($eusers), true);
             $res=[ 
              'Id'    =>   $row['id'],   
              'Subject'  => str_replace("#", ",", $row['subject']),
              'Segment'   => $row['segment'],
              'Mode'    => $row['canteach'],
              'City'   => $row['city'],
              'Pincode'=> $row['pincode'],
              'Mobile'=> $row['number'],
              'Email'=> $row['email'],
              'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
              
             ];
            //  file_put_contents("datas.txt",json_encode($row));
            
             array_push($output, $res);
            }
            // return json_encode($output);
             
            return json_encode($output);
        }
        else{
        try
{ 
        
            $Segment   = "%".$request->Segment."%" ;
            $subject   = "%".$request->Subject."%";
            $Mode     = "%".$request->Mode."%";
            $City    = "%".$request->City."%";
            $Pincode    = "%".$request->Pincode."%";
            $Mobile    = "%".$request->Mobile."%";
            $Email   = "%".$request->Email."%";
        
        
        $output=array();
            $parts =  DB::select( DB::raw("SELECT DISTINCT * FROM persanal_infos JOIN applications ON persanal_infos.user_id = applications.user_id WHERE applications.segment LIKE '$Segment' AND applications.subject 
            LIKE '$subject' AND applications.canteach 
            LIKE '$Mode' AND persanal_infos.city LIKE '$City' AND persanal_infos.pincode LIKE '$Pincode' 
            AND persanal_infos.number LIKE '$Mobile'AND persanal_infos.email LIKE '$Email'  ORDER BY persanal_infos.id DESC"));
            $parts=json_decode(json_encode($parts), true);
            //$ar1=array();
            // file_put_contents("datas.txt",json_encode($parts));
            
            foreach($parts as $row)
            {
               // $eusers=Eprofile::where('user_id',$row['user_id'])->first();
                // $dets=json_decode(json_encode($eusers), true);
//                 if( in_array( $row['id'] ,$ar1 ) )
// {
    
                $res=[ 
                    'Id'    =>   $row['id'],   
                    'Subject'  => str_replace("#", ",", $row['subject']),
                    'Segment'   => $row['segment'],
                    'Mode'    => $row['canteach'],
                    'City'   => $row['city'],
                    'Pincode'=> $row['pincode'],
                    'Mobile'=> $row['number'],
                    'Email'=> $row['email'],
                    'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
                    
                   ];
             file_put_contents("datas.txt",json_encode($row));
          //  array_push($ar1, $row['id']);
             array_push($output, $res);
                }
              //  $output=array_values(array_column($output, null, 'Id'));
            // return json_encode($output);
             file_put_contents("datasc.txt",json_encode($output));
            return json_encode($output);
            $output=array();
            $res=array();
        }
        catch(Exception $e)
        {
           dd($e->getMessage());
        }
    }
        }
        public function rjobs(Request $request)
    {
       // file_put_contents("dataar.txt",json_encode($request));
        if($request->Segment==null && $request->Mode==null && $request->Area==null && $request->Job_Title==null) {
            $output =array();
            $parts =  DB::select( DB::raw('SELECT * FROM eposts WHERE status="1"  ORDER BY id DESC'));
            //AND segment LIKE :Segment AND mode LIKE :Mode AND type LIKE :Area
            $parts=json_decode(json_encode($parts), true);
            foreach($parts as $row)
            {
                $eusers=Eprofile::where('user_id',$row['user_id'])->first();
                $dets=json_decode(json_encode($eusers), true);
             $res=[ 
              'ID'    =>   $row['id'],   
              'Job_Title'  => $row['title'],
              'Segment'   => $row['segment'],
              'Mode'    => $row['mode'],
              'Area'   => $row['type'],
              'Pincode'=> $dets['location'],
              'Mobile'=> $dets['cphone'],
              'Email'=> $dets['cemail'],
              'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
              'Any_other_details'=>  $row['other']
             ];
             
            // file_put_contents("datas.txt",json_encode($row));
             array_push($output, $res);
            }
            // return json_encode($output);
             file_put_contents("datas.txt",json_encode($output));
            return json_encode($output);
        }
        else{
        try
{ 
        
            $Segment   = "%".$request->Segment."%" ;
            $Job_Title   = "%".$request->Job_Title."%";
            $Mode     = "%".$request->Mode."%";
            $Area    = "%".$request->Area."%";
        
        
        $output=array();
            $parts =  DB::select( DB::raw("SELECT * FROM eposts WHERE title LIKE '$Job_Title' AND segment LIKE '$Segment' AND mode LIKE '$Mode' AND type LIKE '$Area' AND status='1' ORDER BY id DESC"));
            $parts=json_decode(json_encode($parts), true);
            foreach($parts as $row)
            {
             $res=[ 
              'ID'    =>   $row['id'],   
              'Job_Title'  => $row['title'],
              'Segment'   => $row['segment'],
              'Mode'    => $row['mode'],
              'Area'   => $row['type'],
              'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
              'Any_other_details'=>  $row['address']
             ];
            // file_put_contents("datas.txt",json_encode($row));
             array_push($output, $res);
            }
            // return json_encode($output);
             file_put_contents("datasc.txt",json_encode($output));
            return json_encode($output);
        }
        catch(Exception $e)
        {
           dd($e->getMessage());
        }
    }
        }
        public function ajobs(Request $request)
    {
        file_put_contents("dataar.txt",json_encode($request));
        if($request->Segment==null && $request->Mode==null && $request->Area==null && $request->Job_Title==null) {
            $output =array();
            $parts =  DB::select( DB::raw('SELECT * FROM eposts WHERE status="0"  ORDER BY id DESC'));
            //AND segment LIKE :Segment AND mode LIKE :Mode AND type LIKE :Area
            $parts=json_decode(json_encode($parts), true);
            foreach($parts as $row)
            {
                $eusers=Eprofile::where('user_id',$row['user_id'])->first();
                $dets=json_decode(json_encode($eusers), true);
             $res=[ 
              'ID'    =>   $row['id'],   
              'Job_Title'  => $row['title'],
              'Segment'   => $row['segment'],
              'Mode'    => $row['mode'],
              'Area'   => $row['type'],
              'Pincode'=> $dets['location'],
              'Mobile'=> $dets['cphone'],
              'Email'=> $dets['cemail'],
              'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
              'Any_other_details'=>  $row['other']
             ];
             
            // file_put_contents("datas.txt",json_encode($row));
             array_push($output, $res);
            }
            // return json_encode($output);
             file_put_contents("datas.txt",json_encode($output));
            return json_encode($output);
        }
        else{
        try
{ 
        
            $Segment   = "%".$request->Segment."%" ;
            $Job_Title   = "%".$request->Job_Title."%";
            $Mode     = "%".$request->Mode."%";
            $Area    = "%".$request->Area."%";
        
        
        $output=array();
            $parts =  DB::select( DB::raw("SELECT * FROM eposts WHERE title LIKE '$Job_Title' AND segment LIKE '$Segment' AND mode LIKE '$Mode' AND type LIKE '$Area' AND status='0' ORDER BY id DESC"));
            $parts=json_decode(json_encode($parts), true);
            foreach($parts as $row)
            {
             $res=[ 
              'ID'    =>   $row['id'],   
              'Job_Title'  => $row['title'],
              'Segment'   => $row['segment'],
              'Mode'    => $row['mode'],
              'Area'   => $row['type'],
              'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
              'Any_other_details'=>  $row['address']
             ];
            // file_put_contents("datas.txt",json_encode($row));
             array_push($output, $res);
            }
            // return json_encode($output);
             file_put_contents("datasc.txt",json_encode($output));
            return json_encode($output);
        }
        catch(Exception $e)
        {
           dd($e->getMessage());
        }
    }
        }


}
