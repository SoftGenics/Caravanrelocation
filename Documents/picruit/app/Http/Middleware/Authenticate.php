<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Models\User;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        
        $permitted_chars = '012789ab';
        $input=$permitted_chars;
            $input_length = strlen( $input);
            $random_string = '';
            for($i = 0; $i < $input_length; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
            


        if (! $request->expectsJson()) {
            $id=$request->id;
            $user = User::find($id);
            $user->emailvery = true;
            $user->myref =$random_string;
           
            $user->update();
           
            return route('login.show');
        }
    }
}
