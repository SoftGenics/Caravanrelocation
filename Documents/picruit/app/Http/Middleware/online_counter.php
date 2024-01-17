<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;
use Cache;


class online_counter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
if(Auth::check()){
    $expire_at=now()->addMinutes(2);
    Cache::put('user_online-'.Auth::id(),true,$expire_at);
     User::where('id',Auth::id())->update(['login_at'=>now()]);
   // User::where('id',Auth::id())->update(['last_seen'=>now()]);
   
  

   
}
        
        
            return  $next($request);
        

        
    }
}
