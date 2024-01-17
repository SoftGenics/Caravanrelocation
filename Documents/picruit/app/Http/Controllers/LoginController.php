<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Login\RememberMeExpiration;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile_pics;
use Illuminate\Support\Str;
use Mail;
use Session;
class LoginController extends Controller
{
    use RememberMeExpiration;

    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('pages/signin');
    }

    public function login(Request $request)
    { 
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::where('username',$username)->first();
        if( $user){
        if($user->emailvery==true){
            $pass=$user->password;
           
            if(hash_equals($pass, crypt($password,  $pass))){
                Session::put('users', $user);
                User::where('id',$user->id )->update(['start_at'=>now()]);

                session()->put('userlevel', 1);
                $ids=$user->id;
                $userimg=Profile_pics::where('user_id',$ids)->first();
                if($userimg)
                {
                   $token="admin124fjdklsslskfjslflsjfsdlslllkdl";
                   Session::put('token',$token);
                }
                alert()->message('Login successfully');
                if($user->category){
                    return redirect()->intended('my-notification/loginsuccess');  
                }
                else{
                return redirect()->intended('my-notification/success');
            }
        }
        else{
            alert()->message('Email and password does not match');
            return redirect()->intended('my-notification/error');
        }
        
            
    
        }
        else{
            alert()->message('User does verify');
            return redirect()->intended('my-notification/warning');
        }
          
    }
    else{
        alert()->message('User Does not exist');
        return redirect()->intended('my-notification/not');
    }

}

public function forget(Request $request){
    
    $user=User::where('email',$request->email)->first();
    
    if($user){
        
        
        $permitted_chars = '012789';
        $input=$permitted_chars;
        $input_length = strlen( $input);
        $random_string = '';
        for($i = 0; $i < $input_length; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
  

$data['email']=$request->email;
$data['title']="Forget Password";
$data['body']="please click here to set new password";
$data['token']=$random_string;

   

    

  

        Mail::send('verifymail', ['data'=>$data], function($message)use($data){
            $message->to($data['email'])->subject($data['body']);
        });
        
        session()->put('otp', $random_string);
         session()->put('email', $request->email);
         
         return redirect()->intended('my-notification/Emailsent');
    }
    else{
    
     return redirect()->intended('my-notification/not');
}}

public function verifytoken(Request $request){
    $opt=$request->otp;
    $sessionOtp = $request->session()->get('otp');
    
    if($sessionOtp==$opt){
      
      
        return redirect()->intended('my-notification/otpsuccess');
        
    }
    else{
        return redirect()->intended('my-notification/otpnot');
    }
    
    
    
}
public function resetpassword(Request $request){
    
    $email = $request->session()->get('email');
    $password=$request->password;
    
    $user=User::where('email',$email)->first();
    
    if($user  && $password==$request->rpassword){
    
    $user->password=$password;
    $user->update();
    
     return redirect()->intended('my-notification/resetsuccess');
    }
    else{
        return "password does not match";
    }
}


}
