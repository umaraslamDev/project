<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('front_end.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_6LOddZgaK4kIQoJYOXvin19900JY7xx5QO');
        
        Stripe\Charge::create ([
                "amount" => 100 * ((double)str_replace(',', '', Cart::total())),
                "currency" => "usd",
                "source" => 'tok_visa',
                "description" => "Test payment from Nabeel Amjad" 
        ]);
            
     
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
