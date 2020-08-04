<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    

    public function aboutUs(){
        return view('front_end.about');
    }

    public function contactUs(){
        return view('front_end.contact');
    }

    public function booking(){
        return view('front_end.booking');
    }

    public function checkOutOrder(){
        return view('front_end.checkoutOrder');
    }

    public function thank(){
        return view('front_end.thankyou');
    }

     public function code(){
         return view('front_end.verificationCode');
     }
     public function login(){
        return view('front_end.login');
    }


    public function signup(){
        return view('auth.register');
    }
    
    
    public function reset(){
        return view('auth.passwords.email');
    }

     public function forgot(){
        return view('front_end.forgotPassword');
    }
   
}
