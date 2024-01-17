<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Comments;
use Session;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    public function update_blog(Request $request){
        $img_name = 'img_'.time().'.'.$request->profile->getClientOriginalExtension();
        $request->profile->move(public_path('img/'), $img_name);
        $imagePath = 'img/'.$img_name;
        // $data = [
        //     'mediafile'=>$imagePath,
        // ]; 
        $data = $request->all();
       
        $users=session()->get('users');
        $id=$users['id'];
        //$userf = new ; 
        $body= $data['bbody'];
        if($body==null)
        $body="null";

       
       
        //$body=base64_encode($body);
     $empData = ['user_id' => $id, 'title' => $request->btitle, 'body' => $request->bbody, 'mediafile' => $imagePath, 'status' => "0"]; 
       $update = Blog::create($empData);
        
        if($update){
            $response['success'] = true;
            $response['message'] = 'Success! Record Updated Successfully.';
          
        }else{
            $response['success'] = false;
            $response['message'] = 'Error! Record Not Updated.';
        }
        return $response;
    }
    public function singlepost($id){
        echo $id;
        $datas = Blog::where('id', $id)->get();
        return view('pages/blogpost',['data'=>$datas]);
    }
    public function update_comment(Request $request){
       
       
       
        $users=session()->get('users');
        $id=$users['id'];
        if($users['name']==null)
        {
            $usname=$users['username'];
        }
        else{
            $usname=$users['name'];
        }
       

       
       
        //$body=base64_encode($body);
     $empData = ['user_id' => $id, 'blog_id' => $request->bid, 'body' => $request->bbody, 'user_name' => $usname, 'status' => "1"]; 
       $update = Comments::create($empData);
        
        if($update){
            $response['success'] = true;
            $response['message'] = 'Success! Record Updated Successfully.';
          
        }else{
            $response['success'] = false;
            $response['message'] = 'Error! Record Not Updated.';
        }
        return $response;
    }
    public function update_rating(Request $request){
       
       
       
        // $users=session()->get('users');
        // $id=$users['id'];
        // if($users['name']==null)
        // {
        //     $usname=$users['username'];
        // }
        // else{
        //     $usname=$users['name'];
        // }
       

       
       
        //$body=base64_encode($body);
     //$empData = ['user_id' => $id, 'blog_id' => $request->bid, 'body' => $request->bbody, 'user_name' => $usname, 'status' => "1"]; 
       $update = Blog::find($request->bid)->increment('rating',1);
        
        if($update){
            $response['success'] = true;
            // $response['message'] = 'Success! Record Updated Successfully.';
          
        }else{
            $response['success'] = false;
            // $response['message'] = 'Error! Record Not Updated.';
        }
        return $response;
    }
    
    public function singlepost(){
       $blogs=Blog::all();
        
     return response()->json(['success'=>'true', 'msg'=>'OTP verify Success', 'data'=>$blogs]); 
        
    }
    
}
