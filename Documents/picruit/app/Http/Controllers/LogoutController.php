<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\time_calculations;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
         User::where('id',Auth::id())->update(['last_seen'=>now()]);
           User::where('id',Auth::id())->update(['login_at'=>null]);
           
          $isuser=User::find(Auth::id());
          $start_time=$isuser?$isuser->start_at:'0000-00-00 00:00:00';
          $end_time = now();
          
          
      time_calculations::create([
           'user_id'=>Auth::id(),
          'start_time'=> $start_time,
          'end_timie'=> $end_time,
      ]);
     
       
    
        Session::flush();
        
        Auth::logout();
      

        return redirect('login');
    }
    
    
     public function windowsclose()
    {
          User::where('id',Auth::id())->update(['last_seen'=>now()]);
           User::where('id',Auth::id())->update(['login_at'=>null]);
           
          $start_time=User::where('id',Auth::id())->first()->start_at;
          $end_time = now();
          
          
      time_calculations::create([
           'user_id'=>Auth::id(),
          'start_time'=> $start_time,
          'end_timie'=> $end_time,
      ]);
       $result = time_calculations::all();
        return $result;
    }
    
    
}
