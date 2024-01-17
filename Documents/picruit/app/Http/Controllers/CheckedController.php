<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recentchecked;

class CheckedController extends Controller
{
    public function recent(Request $request){
        $users=session()->get('users');
        $recent=new recentchecked();
        $recent->checked_id=$request->checked_id;
        $recent->user_id=$users->id;
        $result=$recent->save();
        return $result;
    }
}
