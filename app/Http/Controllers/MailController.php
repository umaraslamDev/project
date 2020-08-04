<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\SendEmail;
class MailController extends Controller
{
    //
    public function home(){
        return view('front_end.thankyou');
    }

    public function sendemail(Request $get){
        $this->validate( $get , [
             'email' => 'required'
            
        ]);

        $email = $get->email;
         $name = str_random(8);
        
            
        Mail::to($email)->send(  new SendEmail("{$name} is your Travely account recovery code","Hi Nabeel, is your Travely account recovery code:{$name}"));
        Session::flash("Success","Send Email");
        return redirect()->action('frontEnd\thankyou@code');
    }
}
