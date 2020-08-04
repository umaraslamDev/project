<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Accomodation;
use App\Rentals;
use App\Flight;
use DB;
use format;
use App\Insurance;
use App\GenericPackage;
use App\Http\Controllers\Controller;
class packageController extends Controller
{
    //
    public function genericPackage(){
        $genericpackage = GenericPackage::query();
        $genericpackages = $genericpackage->orderBy('created_at','DESC')->get();
        return view('front_end.genericPackages',compact('genericpackages'));
    }

    public function home(){

        $hotel = Accomodation::query();
        $hotels =  $hotel->orderBy('price','DESC')->limit(4)->get();

        $flight =  Flight::query();
        $flights = $flight->orderBy('price')->limit(4)->get();

        $rental =  Rentals::query();
        $rentals = $rental->orderBy('price','DESC')->limit(4)->get();

        return view('front_end.Home',compact('hotels','flights','rentals'));
    }

    public function flightPackages(Request $request){


        
        $from  = $request->input('flight_from');
        $where  = $request->input('flight_where');
        $checkin  = $request->input('flight_checkIn');
        $adult  = $request->input('adult');
        
        $child  = $request->input('child');
        
        $flight = Flight::query();
        $stop_location = DB::table('accomodations')->select('location')->get();
        // dd($stop_location);

        $accomodation= Accomodation::query();
          
        $stop = DB::table('flights')->select('stops')->get();
        $accomo= DB::table('accomodations')
        ->join('flights',  'accomodations.location','=','flights.stop_location' )
         ->where([['flights.where','like','%'. $where.'%'],
    ['flights.from','like','%'. $from.'%'],])
        ->select(
           
            'flights.stop_location',
            'flights.price',
            'flights.name',
        
            'flights.created_at',
            'accomodations.location',
            'accomodations.number',
            'accomodations.id',
            'accomodations.price',
            'accomodations.picture',
            'accomodations.name'
        )->orderBy('flights.created_at','DESC')
        
        ->get();
        
        
       
       
        // $accomo = Accomodation::get(['flight_id','name','class','price','number','picture','location']);
        // $fli = Flight::get(['id','stop_location']);
        // $collects = $accomo->merge($fli);
        
        // $collects->where('location','like','%stop_location%');

        // foreach ($collects as $coll) {

        //     echo $coll->name;
        // }
        
        
          
        //  die();
        
 

        if($from)
        {
            $flight->where('from','like','%'. $from.'%');

        }
        if($where)
        {
            $flight->where('where','like','%'. $where.'%');
        }
        if($checkin)
        {  
            
           $flight->where('departure_date','like','%'. $checkin.'%');
        }
       
           

        
       
       
       
       
        $accomodations = $accomo;
        $flights = $flight->orderBy('created_at','DESC')->get();
        // dd($days);
       // return redirect()->action('CartController@index');
      
      
        return view('front_end.flightSearch',compact('flights','accomodations','adult','child'));

    }

    public function hotelPackages(Request $request){
        

        $days="";

        $hotel_check_in  = $request->input('hotel_check_in');
        $hotel_check_out  = $request->input('hotel_check_out');
        $location  = $request->input('location');
        $hotel_guest  = $request->input('hotel_guest');

        $hotel= Accomodation::query();

        if($location){
            $hotel->where('location','like','%'. $location.'%');
        }
        if($hotel_guest){
            $hotel->where('no_of_persons', $hotel_guest);
        }

        if($hotel_check_in && $hotel_check_out){
            $days = strtotime($hotel_check_in) - strtotime($hotel_check_out); 
            $days =  abs(round($days / 86400)); 
        }

        $hotel_accomodation = $hotel->orderBy('created_at','DESC')->get();
        // dd($days);
        return view('front_end.hotelSearch',compact('hotel_accomodation' ,'days'));
    }

    public function carRentalPackages(Request $request){
        

         $validatedData = $request->validate([
        
        'rental_check_in' => 'required',
        'rental_check_out' => 'required',
        
        ]);


        $days="";


        $rental_check_in  = $request->input('rental_check_in');
        $rental_check_out  = $request->input('rental_check_out');
        $location  = $request->input('location');

        $rental = Rentals::query();

        if($location){
            $hotel->where('country','like','%'.$location.'%');
        }

        if($rental_check_in && $rental_check_out){
            $days = strtotime($rental_check_in) - strtotime($rental_check_out); 
            $days =  abs(round($days / 86400)); 
        }

        $rentals = $rental->orderBy('created_at','DESC')->get();
        return view('front_end.carRentalSearch',compact('rentals' ,'days'));
    }

    public function travelInsurance(Request $request){
        
         $validatedData = $request->validate([
        'location' => 'required',
        'persons' => 'required',
        
        
        ]);

        $days="";

        $persons  = $request->input('persons');
        
        $location  = $request->input('location');

        $insurance = Insurance::query();

        if($location){
            $insurance->where('country','like','%'.$location.'%');
        }

        $insurances = $insurance->orderBy('created_at','DESC')->get();
        return view('front_end.insuranceSearch',compact('insurances','persons'));
    }

   
    public function hotelDetails($id)
    {
        $accomodation=Accomodation::find($id);

         $flight =  Flight::query();
        $flights = $flight->orderBy('price')->limit(3)->get();

        $rental =  Rentals::query();
        $rentals = $rental->orderBy('price','DESC')->limit(3)->get();

        return view('front_end.hotelDetails',compact('accomodation','flights','rentals'));
    }
    public function flightDetails($id){
        $flight=Flight::find($id);

        $hotel = Accomodation::query();
        $hotels =  $hotel->orderBy('price','DESC')->limit(3)->get();


        $rental =  Rentals::query();
        $rentals = $rental->orderBy('price','DESC')->limit(3)->get();

        return view('front_end.flightDetails',compact('flight','hotels','rentals'));
        
    }
    public function carRentalDetails($id){
        $rental=Rentals::find($id);
          $hotel = Accomodation::query();
        $hotels =  $hotel->orderBy('price','DESC')->limit(3)->get();

        $flight =  Flight::query();
        $flights = $flight->orderBy('price')->limit(3)->get();

        return view('front_end.carRentalsDetails',compact('rental','hotels','flights'));
        
    }
    public function insuranceDetails($id){
        $insurance=Insurance::find($id);

        $hotel = Accomodation::query();
        $hotels =  $hotel->orderBy('price','DESC')->limit(3)->get();

        $flight =  Flight::query();
        $flights = $flight->orderBy('price')->limit(3)->get();

         $rental =  Rentals::query();
        $rentals = $rental->orderBy('price','DESC')->limit(3)->get();

        return view('front_end.insuranceDetails',compact('insurance','flights','rentals','hotels'));
        
    }
    public function genericPackagesDetails($id){
        $generic=GenericPackage::find($id);
        return view('front_end.genericPackagesDetails',compact('generic'));
        
    }
 
}
