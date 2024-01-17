<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chats;
use Illuminate\Support\Facades\DB;
use App\Models\Profile_pics;
use Session;
class ChatController extends Controller
{
    //
    public function history(Request $request) 
    {
        $output=array();
        $values = [$request->fr_uid, $request->per_uid, $request->per_uid, $request->fr_uid];
//dd($values);
//file_put_contents("datas.txt",json_encode($values));
        $parts =  DB::select('SELECT * FROM chats WHERE status=1 AND(incoming_user_id = ? AND outgoing_user_id = ?) OR (incoming_user_id = ? AND outgoing_user_id = ?) ORDER BY id', $values);
        
        $parts=json_decode(json_encode($parts), true);
        foreach($parts as $row)
        {
            
           if( $row['incoming_user_id']==$request->fr_uid)
           {
            $res=[ 
                'id'    =>   $row['id'],   
                'message'   => $row['message'],
                'img'    => $row['incoming_user_id_img'],
                'type'   => "s",
                
                'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
                
               ];
            }
            else{
                $res=[ 
                    'id'    =>   $row['id'],   
                    'message'   => $row['message'],
                    'img'    => $row['incoming_user_id_img'],
                    'type'   => "r",
                    
                    'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
                    
                   ];
            }
            array_push($output, $res);

        } 
        return json_encode($output);
    }
    public function rec(Request $request) 
    {
        $output=array();
        $values = [ $request->per_uid, $request->fr_uid];

        $parts =  DB::select('SELECT * FROM chats WHERE status=0 AND(incoming_user_id = ? AND outgoing_user_id = ?)  ORDER BY id', $values);
        
        $parts=json_decode(json_encode($parts), true);
        foreach($parts as $row)
        {
          $lts=  Chats::where('id', $row['id'])->update(array('status' => '1'));
          
            $res=[ 
                'id'    =>   $row['id'],   
                'message'   => $row['message'],
                'img'    => $row['incoming_user_id_img'],
                
                
                'Date'   =>date('Y-m-d',strtotime($row['updated_at'])),
                
               ];
               array_push($output, $res);
            }
          
            

        
        return json_encode($output);
    }
    public function send(Request $request)
{
    try {
        $user = session()->get('users');
        if (!$user) {
            throw new \Exception("User not found in the session");
        }

        $user_id = $user->id;
        $imgus = "https://cdn-icons-png.flaticon.com/512/149/149071.png";

        $profile = Profile_pics::where('user_id', $user_id)->first();
        if ($profile) {
            $imgus = $profile->image ?? $imgus;
        }

        $empData = [
            'incoming_user_id' => $request->fr_uid,
            'outgoing_user_id' => $request->per_uid,
            'message' => $request->msg,
            'incoming_user_id_img' => $imgus,
            'outgoing_user_id_img' => $request->img,
        ];

        file_put_contents("datas.txt", json_encode($empData));

        $update = Chats::create($empData);

        if ($update) {
            $response['success'] = true;
        } else {
            $response['success'] = false;
        }

        return $response;
    } catch (\Exception $e) {
        // Log the exception for debugging
        \Log::error("Error in send method: " . $e->getMessage());

        // Return a generic error response
        return ['success' => false, 'error' => 'Internal Server Error'];
    }
}

}
