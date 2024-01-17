<?php

namespace App\Http\Controllers;
 use App\Models\Blog;
 use App\Models\Like;
use App\Models\Comments;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SearchBlog extends Controller
{
    public function searchh(Request $request){
       $terms= explode(" ",$request->title);
        $search_fields = ['title','body'];
          $query = Blog::query();
          if($terms){
        foreach ($terms as $term) {
            $query->orWhere(function ($query) use ($search_fields, $term) {

                foreach ($search_fields as $field) {
                    $query->orWhere($field, 'LIKE', '%' . $term . '%');
                }
            });
        }
        $blogs = $query->get()->sortByDesc('id');
          }
        else{
             $terms= explode(" ",['Customer service','Administrative assistant','Part time','Receptionist','UPS package handler part time entry level warehouse support'
]);
       $search_fields = ['title','body'];
          $query = Blog::query();
     foreach ($terms as $term) {
            $query->orWhere(function ($query) use ($search_fields, $term) {

                foreach ($search_fields as $field) {
                    $query->orWhere($field, 'LIKE', '%' . $term . '%');
                }
            });
        }
        $blogs = $query->get()->sortByDesc('id');
        }
       
      return view('pages/blog',compact('blogs')); 
       
    
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
    if($request->title){
     $terms= explode(" ",$request->title);}
     else{
          $terms= explode(" ",'Administrative assistant
Customer service
Receptionist
Part time
UPS package handler part time entry level warehouse support
Accounting
Human resources
Warehouse
Sales
Manager
Data entry
Administrative
Retail
Work from home
Executive assistant
Project manager
Medical Assistant
Marketing
Accountant
Cashier
Registered nurse
Business analyst
Office
IT
Warehouse worker
Office manager
Finance
Mechanical engineer
Construction
Entry level
Clerical
Controller
Engineer
Manufacturing
Accounts payable
Paralegal
Forklift operator
Customer service representative
LPN
Call center
Graphic designer
Information technology
Office assistant
Maintenance
Full time
Customer services representative
Driver
Operations manager
Data analyst
Part-time
Nurse
Security
Healthcare
Bookkeeper
Remote
Analyst
Pharmacist
RN
Sales representative
Management
Welder
Payroll
Office clerk
Supervisor
Nurse practitioner
Attorney
Purchasing
Recruiter
Financial analyst
Software engineer
Director
Logistics
Sales manager
Electrician
Server
Banking
Delivery driver
Medical office receptionist
Truck driver
Assistant
Legal
Warehouse manager
Insurance
Teacher
Education
Real estate
Secretary
Engineering
Account manager
Medical
Production supervisor
Bartender
CnA
Buyer
Maintenance technician
Graphic design
Automotive
Accounts receivable
Security officer
Restaurant
Careers program 
Cybersecurity
Data Science
Web Development
Mobile App Development
Cloud Computing
Network Engineering
Artificial Intelligence
Machine Learning
IT Project Management
Database Administration
Software Development
DevOps
Computer Programming
Information Systems Management
Computer Forensics
Ethical Hacking
Digital Marketing (in relation to IT)
IT Support
User Experience (UX) Design
IT Governance and Compliance
ITIL (Information Technology Infrastructure Library)
System Analysis and Design
IT Strategy and Planning
Information Security Management
Computer Engineering
Computer Hardware Engineering
Information Technology Management
IT Risk Management
IT Service Management
BCA 
MCA
MBA');
     }
        $search_fields = ['title','body'];
        if(isset($terms)){
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
      return view('pages/career',compact('blogs')); 
}

public function delete_blog(Request $request, $id){
    
    $blogs= Blog::find($id);
      $blogs->delete(); 
    return $blogs;
}

public function edit_form(Request $request){
    $id = $request->id;
    return view('pages/editformlog', compact('id'));
    
}

public function edit_blog(Request $request){
    
     $data = $request->all();
      $image= $data['profile'];
    $img_name = 'img_'.time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('img/'), $img_name);
    $imagePath = 'img/'.$img_name;
        $body= $data['bbody'];
        $id= $data['id'];
        $btitle= $data['btitle'];
    
        
    if($request){
            $blogs = Blog::find($id);
            $blogs->mediafile = $imagePath;
            $blogs->title =$btitle;
            $blogs->body = $body;
            $blogs->update();
            return $data;
         }else{
             return $data;
         }
  
}


    
}
