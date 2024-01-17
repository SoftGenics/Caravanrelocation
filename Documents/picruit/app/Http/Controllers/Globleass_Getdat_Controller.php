<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Globleassignment;
class Globleass_Getdat_Controller extends Controller
{
    //
    public function getData(Request $request, $id){

        $infomation = Globleassignment::find($id); 
    
        return $infomation;
    }
}
