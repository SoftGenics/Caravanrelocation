<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeleteController extends Controller
{
    
    public function deletewithinsta(Request $request, $id)
{
   
    $todelte = User::find($id);
    $todelte -> delete();
  
        return redirect()->back();
    
    
}


public function deletewithfacebook(Request $request, $id)
{
   
    $todelte = User::find($id);
    $todelte -> delete();
  
        return redirect()->back();
    
    
}
public function deletewithgoogle(Request $request, $id)
{
   
    $todelte = User::find($id);
    $todelte -> delete();
  
        return redirect()->back();
    
    
}
public function deletebyid(Request $request, $id)
{
   
    $todelte = User::find($id);
    $todelte -> delete();
  
        return redirect()->back();
    
    
}
}
