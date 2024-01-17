<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        event(new Registered($user));

        auth()->login($user);

        return view('auth.verification.notice')->with('success', "Account successfully registered.");
    }
   
    public function updateuser(Request $request){

        
        $users=session()->get('users');
        $id=$users['id'];
        $user=User::find($id);
           $user->update($request->all());
           
              if($user){
                session()->put('users', $user);
                return redirect()->intended('my-notification/updatesuccess');
              }
              else{
              return "Not update data";
              }
           return  "not Success";
           }

        
    
    public function singleUser($id){
        $user=User::find($id);
        return $user;
    }

}
?>