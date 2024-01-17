<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\linkedTutors;
use App\Models\linkedstudents;



class linkedController extends Controller
{
   public function linkedstd(Request $request){
        $data=linkedstudents::create($request->all());
        return $data; 
    }
    
    
   public function linkedtutor(Request $request){
        $data=linkedTutors::create($request->all());
        return $data;
    }
}
