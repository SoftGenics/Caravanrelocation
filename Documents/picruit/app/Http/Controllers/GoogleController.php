<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\social;
use App\Models\Category;
use Exception;

class GoogleController extends Controller
{
    public function loginwithgoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackFromgoogle(){
        try{
            $google_user =Socialite::driver('google')->user();
          
$user=User::where('email',$google_user->getEmail())->first();


if(!$user){
  $new_user =User::create([
    'name'=>$google_user->getName(),
    'email'=>$google_user->getEmail(),
    'google_id'=>$google_user->getId(),
  ]);
 Auth::login($new_user);
 session()->put('users', $new_user);
 
 
 
 
 
 // return redirect()->intended('pages/dashboard');
 //session()->put('userlevel', 1);
return redirect()->intended('my-notification/success');

}
else{
   
    session()->put('users', $user);
     Auth::login($user);
   // session()->put('userlevel', $category->category);
  User::where('id',$user->id )->update(['start_at'=>now()]);
    return redirect()->intended('my-notification/loginsuccess');
    
   
}
    
        }
        catch(\Throwable $th){
            throw $th;

        }
       
    }
    
  //login with facebook
 public function loginUsingFacebook()
 {
    return Socialite::driver('facebook')->stateless()->redirect(); 
 }

 public function callbackFromFacebook()
 {
  try {
       $user = Socialite::driver('facebook')->user();

      $saveUser = User::updateOrCreate([
          'facebook_id' => $user->getId(),
      ],[
          'name' => $user->getName(),
          'email' => $user->getEmail(),
           
            ]);

       Auth::loginUsingId($saveUser->id);
session()->put('users', $user);
        return redirect()->intended('my-notification/loginsuccess');
   // return $user;
       } catch (\Throwable $th) {
          throw $th;
       }
   }
   
   //login with facebook
public function loginWithInsta()
{
    $clientId = config('services.instagram.client_id');
    $redirectUri = config('services.instagram.redirect');

    $authUrl = "https://api.instagram.com/oauth/authorize?client_id={$clientId}&redirect_uri={$redirectUri}&response_type=code";

    return redirect()->away($authUrl);
}

public function callbackFromInsta(Request $request)
{
    $clientId = config('services.instagram.client_id');
    $clientSecret = config('services.instagram.client_secret');
    $redirectUri = config('services.instagram.redirect');

    $code = $request->query('code');

    $response = Http::asForm()->post('https://api.instagram.com/oauth/access_token', [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'grant_type' => 'authorization_code',
        'redirect_uri' => $redirectUri,
        'code' => $code,
    ]);

    $data = $response->json();

    // Handle the $data returned from Instagram, extract user info, and perform actions as needed

    // For example, if you obtain user details
    $userDetails = $data['user'];

    // Log in the user or save information to your database
    // ...
//return $data;
   return redirect()->intended('my-notification/loginsuccess');
}
   
   
    
}
