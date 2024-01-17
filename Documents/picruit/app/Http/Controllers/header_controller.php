<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;

class header_controller extends Controller
{
    public function study_material(){
        
        $user= session()->get('users');
        if(isset($user)){
return view('pages/study-material');}
else{
   return redirect('/login'); 
}
}
    
}
