<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }
    public function myNotification($type)
    {
        switch ($type) {
            
            case 'sprofileError':
                alert()->error('Please Complete profile');
                return redirect()->intended('/sprofile');
                break;
            case 'tprofileError':
                alert()->error('Please Complete profile');
                return redirect()->intended('/profile');
                break;
            case 'eprofileError':
                alert()->error('Please Complete profile');
                return redirect()->intended('/eprofile');
                break;
                case 'empprofileError':
                alert()->error('Please Complete profile');
                return redirect()->intended('/epostnew');
                break;
            case 'jprofileError':
                alert()->error('Please Complete profile');
                return redirect()->intended('/jprofile');
                break;
             
            case 'uploadmedia':
                alert()->message('media file uploaded');
                return redirect()->intended('media');
                break;
            case 'message':
                alert()->message('Message send success');
                return redirect()->intended('/sprofile');
                break;
            case 'updatesuccess':
                return redirect()->intended('/dashboard');
                break;
            case 'not':
                alert()->info('User Does not exist');
                 return redirect('/login');
                break;
                
                 case 'userexist':
                    alert()->success('Login user already exist')->autoclose(3500);
                   return redirect()->intended('/login');
                    break;
                
                case 'loginsuccess':
                    alert()->success('Login Sucsessfully')->autoclose(3500);
                   return redirect()->intended('/dashboard');
                    break;
            case 'success':
                alert()->success('Register Sucsessfully Please Select Category')->autoclose(3500);
               return redirect()->intended('/category');
                break;
            case 'error':
                alert()->error('Invilide User');
                return redirect('/login');
                break;
            case 'warning':
                alert()->warning('Email does not verify');
                return redirect('/login');
                break;
                
                 case 'Emailsent':
                alert()->warning('Please Check your Eamil');
                return redirect('/fverify');
                break;
                
                 case 'otpsuccess':
                alert()->warning('Otp verify Success');
                return redirect('/resetpass');
                break;
                
                 case 'otpnot':
                alert()->warning('Otp is not correct');
                return redirect('/fverify');
                break;
                case 'resetsuccess':
                alert()->warning('Password Reset Success');
                return redirect('/login');
                break;
                
                case 'onlyemployeer':
                alert()->warning('Please Login as an Employeer');
                return redirect('/login');
                break;
                case 'OnlyJobSeekher':
                alert()->warning('Please Login as a JobSeekher');
                return redirect('/login');
                break;
                case 'onlytutor':
                alert()->warning('Please Login as a Tutor');
                return redirect('/login');
                break;
                case 'onlystu':
                alert()->warning('Please Login as a Student/Parents');
                return redirect('/login');
                break;
                
                case 'requestsubmit':
                alert()->warning('Request Submited');
                return redirect('/');
                break;
                case 'jobsikherprofile':
                alert()->warning('Update successfully');
                return redirect('/jprofile');
                break;
                 case 'spost':
                alert()->warning('Post successfully');
                return redirect('/sspostnew');
                break;
                // return redirect()->intended('apostnew');
               
                
            default:
                # code...
                break;
        }


       
    }
}
