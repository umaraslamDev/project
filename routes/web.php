<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/Home','frontEnd\packageController@home');

      Route::get('/paywithpaypall', function () {
     return view('front_end\paywithpaypal');
 });


//    packages


Route::get('/flights',function(){
  return view('front_end.flights');
});
Route::get('/rentals',function(){
  return view('front_end.rentals');
});
Route::get('/insurances',function(){
  return view('front_end.insurances');
});
Route::get('/hotels',function(){
  return view('front_end.hotels');
});

Route::get('/userInformation',function(){
  return view('front_end.userInformation');
});
Route::get('/genericPackages','frontEnd\packageController@genericPackage');
Route::get('/flightPackages','frontEnd\packageController@flightPackages');
Route::get('/hotelPackages','frontEnd\packageController@hotelPackages');
Route::get('/carRentalPackages','frontEnd\packageController@carRentalPackages');

Route::get('/hotelDetails/{id}','frontEnd\packageController@hotelDetails');
Route::get('/flightDetails/{id}','frontEnd\packageController@flightDetails');
Route::get('/carRentalDetails/{id}','frontEnd\packageController@carRentalDetails');
Route::get('/insuranceDetails/{id}','frontEnd\packageController@insuranceDetails');
Route::get('/genericPackagesDetails/{id}','frontEnd\packageController@genericPackagesDetails');


Route::get('/addaccomo/{id}','CartController@accomodation');
Route::get('/accomo_flight/{id}','CartController@accomo_flight');
Route::get('/flight/{fid}','CartController@flight');
Route::get('/rental/{rid}','CartController@rental');
Route::get('/insurance/{iid}','CartController@insurance');
Route::get('/generic_package/{gid}','CartController@generic_package');


Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/about','frontEnd\IndexController@aboutUS');
Route::get('/contact','frontEnd\IndexController@contactUs');


Route::resource('/cart','CartController');

// Insurance
Route::get('/travelInsurance','frontEnd\packageController@travelInsurance');
});

Auth::routes();
Route::get('/',function(){
  return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');

 



// home Pages

// Route::get('/register','frontEnd\IndexController@signup');
Route::get('/resetPassword','frontEnd\IndexController@reset');
Route::get('/forgotPassword','frontEnd\IndexController@forgot');



Route::get('/checkOutOrder','frontEnd\IndexController@checkOutOrder');
Route::get('/thankyou','frontEnd\IndexController@thank');



// Email

  Route::get('/sendemail','MailController@home');
  Route::post('send/email', 'MailController@sendemail');
  Route::get('/verification','frontEnd\IndexController@code');

// MasterCard

Route::group(['middleware'=> ['auth','admin']],(function () { 


      Route::get('/adminlogin','Admin\AdminController@showloginform');

      Route::get('/admindashboard',function(){
        return view('layouts.adminapp');
      });

Route::prefix('admin')->name('admin.')->group(function() {
Route::resource('accomodation','Admin\AccomodationController');
 Route::resource('flight','Admin\FlightController');
 Route::resource('rentals','Admin\RentalsController');
 Route::resource('insurance','Admin\InsuranceController');
 Route::resource('genericpackage','Admin\GenericPackageController');

});

})
);


