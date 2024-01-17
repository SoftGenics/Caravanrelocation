<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailStores;

class storeEmailController extends Controller
{
  public function  email(Request $request){
      
      $result=EmailStores::create($request->all());
        return redirect()->back();
    }
}
