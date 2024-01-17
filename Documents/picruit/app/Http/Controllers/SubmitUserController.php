<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FeelFree;


class SubmitUserController extends Controller
{
    // 
    public function store_user_details(Request $request){
        $result= FeelFree::create($request->all());
        return redirect()->intended('my-notification/requestsubmit');
        
    }
}
