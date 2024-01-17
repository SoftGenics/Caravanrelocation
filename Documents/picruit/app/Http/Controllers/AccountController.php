<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function account(){
        return view('pages.account');
    }
    
    
     public function deletewithinsta(Request $request, $id)
{
   
  try{
   $result= User::where('insta_id', $id)->delete();

  
        return $result;
  }
  catch(error){
      return error;
  }
    
}


public function deletewithfacebook(Request $request, $id)
{
   
   try{
   $result= User::where('facebook_id', $id)->delete();

  
        return $result;
  }
  catch(error){
      return error;
  }
    
    
    
}
public function deletewithgoogle(Request $request, $id)
{
   
    
    $todelte = User::where('google_id',$id)->get();
   $result= $todelte -> delete();
  
        return $result;
    
    
}
}
