<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class CategoryController extends Controller
{
    public function show()
    {
        return view('pages.categories');
    }
    public function add(Request $request) 
    {
      $id= $request->user_id;
    //    $id=$request->id;
      $user = User::find($id);
       $user->category = $request->category;
      
       $user->update();
      
      session()->put('users', $user);
      
      
        return redirect()->intended('my-notification/loginsuccess');
    }
}

?>