<?php

namespace App\Http\Controllers;
use App\Models\media;

use Illuminate\Http\Request;

class Searchcontroller extends Controller
{
    //
    public function show(Request $request){
        $search = $request['category'] ?? "";
        if($search != ""){
            $media = media::where('category', $search)->get();
        }else{
            $media = media::all();
        }
        //print_r($media);
        return view('pages.study-material', compact('media'));
    }
}
