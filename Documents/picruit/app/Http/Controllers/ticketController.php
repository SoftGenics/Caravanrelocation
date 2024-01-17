<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\ticket;
use App\Models\ratings;
use Illuminate\Database\Query\Builder;



class ticketController extends Controller
{
    public function ticket(Request $request){

       $result= ticket::create($request->all());
       alert()->message('Message send success');
       
       return redirect('/scontact');
       
    }
   public function ticketview(){
        
      
       
       $users_id =Session::get('users')->id;
       
       $data=ticket::where('user_id',$users_id)->get()->sortByDesc('id');
       
          //return  $data;      
       return view('student/contact',compact('data'));
    }
    
        public function rating(Request $request){

        // $input = $request->all();
        // print_r($input);
        $users =Session::get('users');  
                $user_id=$users['id'];
            $info=Ratings::where('for',$request['for'])
            ->where('by', $user_id)
            ->where('status', '0')
            ->first();
            if($info){
            
                $update=$info->update([
                'by'=>$user_id, 
                'for'=> $request['for'], 
                'rating'=>$request['rating'.$request['for']], 
                'review'=>$request['review'], 
            ]);
            if($update){
                return redirect('rate')->with('statuses', ' Rating Has Been updated');
            }
            else{
                return redirect('rate')->with('statuses', ' error');
            }
            }
            else
            {
                $users =Session::get('users');  
                $user_id=$users['id'];
                $update = Ratings::updateOrCreate([
                    'by'=>$user_id, 
                    'for'=> $request['for'], 
                    'rating'=>$request['rating'.$request['for']], 
                    'review'=>$request['review'], 
                ]);
                if($update){
                    return redirect('rate')->with('statuses', ' Rating Has Been sent');
                }
                else{
                    return redirect('rate')->with('statuses', ' error');
                }
            }
     }
}