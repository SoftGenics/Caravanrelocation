<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function createPayment(Request $request){
        
        $user=session()->get('users');
        $payment=new Payment();
        $payment->user_id=$user->id;
        $payment->payment_id=$request->payment_id;
       // $payment->order_id=$request->order_id;
        $payment->amount=$request->amount;
        $result=$payment->save();
        return $request;
    }
}