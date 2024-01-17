<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Exception\Auth\InvalidIdToken;
use Illuminate\Support\Facades\Auth;

class facebookController extends Controller
{
    


    public function facebookLogin(Request $request, Firebase\Auth\SignIn\WithThirdPartyProvider $signInWithProvider)
    {
        $facebookToken = $request->input('facebook_token');

        try {
            $signInResult = $signInWithProvider->withFacebookAccessToken($facebookToken);
            $user = $signInResult->firebaseUser();

            // Authenticate the user in Laravel
            Auth::loginUsingId($user->uid);

            return response()->json(['message' => 'Login successful']);
        } catch (InvalidIdToken $e) {
            return response()->json(['error' => 'Invalid Facebook token'], 401);
        }
    }


}
