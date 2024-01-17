<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Blog;
use App\Models\Comments;
use Session;
use Illuminate\Support\Facades\Input;

class careerControllers extends Controller
{
     
    
    public function index(){
        
     
       
      $blogs= Blog::all();
       
       
      return view('blogs.career',compact('blogs')); 
      
    }
    
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
       $empData = ['user_id' => $id, 'title' => $request->btitle,'name' => $request->name, 'body' => $request->bbody, 'mediafile' => $imagePath, 'status' => "1"]; 
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
    
    public function allblog(){
       $blogs=Blog::all();
        
     return response()->json(['success'=>'true', 'msg'=>'OTP verify Success', 'data'=>$blogs]); 
        
    }
    
    
    public function like(Request $request, $id){
        $users=session()->get('users');
        
        if($users){
        $user_id=$users['id'];

        $likeuser=Like::where('blog_id',$id)->get();
        $likeblog=true;
        if(isset($likeuser)){
        foreach($likeuser as $like ){
            if($like->user_id==$user_id){
                $likeblog=false;
            }
        }}
        if($likeblog){
            $bloglike=new Like();

            $bloglike->blog_id=$id;
            $bloglike->user_id=$user_id;
            
            $bloglike->save();
           return redirect("blog/single/$id"); 
        }
        else{
  
          return redirect("blog/single/$id");
        }

 }else{
     return redirect("/login");     
    }
    }
    
   
public function career(Request $request){
    
     $terms= explode(" ",$request->title);
        $search_fields = ['title','body'];
        if($terms){
        //  $blogs= Blog::where('title',$request->title)->get()->sortByDesc('id');
       $query = Blog::query();
        foreach ($terms as $term) {
            $query->orWhere(function ($query) use ($search_fields, $term) {

                foreach ($search_fields as $field) {
                    $query->orWhere($field, 'LIKE', '%' . $term . '%');
                }
            });
        }
        $blogs = $query->get();
        }
        else{
      $blogs= Blog::where('title','mba program')->get()->sortByDesc('id');
        }
       
      return view('pages/career',compact('blogs')); 
       
    
}
public function delete_blog(Request $request, $id){
    
    $blogs= Blog::find($id);
      $blogs->delete(); 
    return $blogs;
}

}