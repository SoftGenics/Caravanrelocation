<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Globleassignment;

class GlobleassController extends Controller 
{
    //
    public function filter_result(Request $request){
        if($request->title || $request->assignment || $request->date){
            $persanal = Globleassignment::where('title', $request['title'])->orWhere('assignment', $request['assignment'])->orWhere('date', $request['date'])->get();
           
        }else{
            $persanal = Globleassignment::all();
        }
        return view('globle/globle_ass', compact('persanal'));
    }
}
