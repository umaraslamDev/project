<?php

namespace App\Http\Controllers;
use App\Accomodation;
use App\Flight;
use App\Insurance;
use App\GenericPackage;
use App\Rentals;
use App\Carts;
use Auth;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\frontEnd\packageController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
        $cartItems = Cart::content();
        return view('front_end.booking',compact('cartItems'));   
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accomodation($id)
    {

        $accomodation = Accomodation::find($id);
        $cart =new Carts();
        $user = Auth::user();
        Cart::add($id,$accomodation->name,1,$accomodation->price , [$accomodation->picture]);
        $cart->userid=$user->id;
        $cart->accomoid=$accomodation->id;
        $cart->save();
        return back();
    }

     public function flight($fid)
    { 
        $cart =new Carts();
        $user = Auth::user();
        $flight=Flight::find($fid);
        Cart::add($fid,$flight->name,1,$flight->price,[$flight->picture]);
        $cart->userid=$user->id;
        $cart->fliid=$flight->id;
        $cart->save();
        return back();
    }
    public function accomo_flight($id,$sid)
    {
        $accomodation = Accomodation::find($id);
        $flight=Flight::find($id);
        Cart::add($id,$accomodation->name,1,$accomodation->price);

        return back();
    }
   
    public function rental($rid)
    {
        $rental = Rentals::find($rid);
        $cart =new Carts();
        $user = Auth::user();
        Cart::add($rid,$rental->name,1,$rental->price);
        $cart->userid=$user->id;
        $cart->rentid=$rental->id;
        $cart->save();

        return back();
    }
    public function insurance($iid)
    {
        $cart =new Carts();
        $user = Auth::user();
        $insurance = Insurance::find($iid);
        Cart::add($iid,$insurance->company_name,1,$insurance->price);
        $cart->userid=$user->id;
        $cart->insuid=$insurance->id;
        $cart->save();

        return back();
    }
    public function generic_package($gid)
    {
         $cart =new Carts();
        $user = Auth::user();
        $generic_package = GenericPackage::find($gid);
        Cart::add($gid,$generic_package->name,1,$generic_package->price);
        $cart->userid=$user->id;
        $cart->geneid=$generic_package->id;
        $cart->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Cart::update($id,$request->qty);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        Cart::remove($id);
        return redirect('/cart');
    }
}
