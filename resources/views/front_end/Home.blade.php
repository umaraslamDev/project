@extends('front_end.nav')
@extends('front_end.customPackages')
@section('content')
<!-- Travel Agency -->
<section class="about_index">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="col-lg-6 col-md-12 mx-auto">
               <img  class="agency-img" src="./img/about.jpg">
            </div>
            <div class="col-lg-6 col-sm-12 mx-auto">
               <h2 class="Agency-text">The Best Travel Agency</h2>
               <p class="paragraph">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Destination Packages -->
<section class="ftco-section">
   <div class="package-text">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4"><span style="color:#fff;">Most Popular Destination</span></h2>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
          @foreach($flights as $flight)
           <a href="{{url('/flightDetails', $flight->id)}}" style="text-decoration: none;">
         <div  class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto">
            <div class="destination">
               <span style="box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important;" class="img img-2 d-flex justify-content-center align-items-center">
                     <img src="/image/admin/flights/{{$flight->picture}}" style="width: 100%;height: 300px;">
               </span>
               <div class="text p-3" style="height: 180px;">
                  <div class="d-flex">
                     <div class="one">
                        <h3 class="black accomodationName"><b>{{ $flight->name }}</b></h3>
                        
                     </div>
                     <div class="two">
                        <span class="price black">${{$flight->price }}<br></span>
                     </div>
                  </div>
                  <p class="black">{{ $flight->from }} - {{$flight->where}}</p>
                   <p class="black">
                    <span class="black" style="margin-bottom: 10px;"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$flight->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-person">&nbsp</span> Adult</span>
                </p>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-class"></span>{{$flight->class}}</span>
                    <span class="right black"><span style="color: #f9be37;" class="icon-child">&nbsp</span> Child</span>
                  </p>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-add_location"></span></span>
                    {{$flight->stop_location}} stop
                    
                  </p> 
                 
                  
               </div>
                <hr>
               <p class="bottom-area d-flex right">
                     <span class="ml-auto">
                        <a  style="text-decoration:none;" class="addtocart" href="{{url('/flight', $flight->id)}}">Add to Cart</a>
                        
                     </span>
                  </p>
            </div>
         </div>
      </a>
      @endforeach
         
      </div>
   </div>
</section>
<!-- Hotel Packages -->
<section>
   <div class="package-text">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4"><span style="color:#fff;">Most Popular Hotels</span></h2>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
          @foreach($hotels as $accomodation)
           <a href="{{url('/hotelDetails', $accomodation->id)}}" style="text-decoration: none;">
         <div  class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto" style="margin-bottom: 20px;">
            <div class="destination">
               <span style="box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important;" class="img img-2 d-flex justify-content-center align-items-center">
                     <img src="/image/admin/accomodation/{{$accomodation->picture}}" style="width: 100%;height: 300px;">
               </span>
               <div class="text p-3" style="height: 180px;">
                  <div class="d-flex">
                     <div class="one">
                        <h3 class="black accomodationName"><b>{{ $accomodation->name }}</b></h3>
                        
                     </div>
                     <div class="two">
                        <span class="price black">${{ $accomodation->price}}<br></span>
                     </div>
                  </div>
                  <p class="black">{{ $accomodation->pick_up_address }}</p>
                  <span class="black"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$accomodation->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-person">&nbsp</span>{{$accomodation->no_of_persons}} person</span>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-hotel"></span>&nbsp&nbsp&nbsp&nbsp{{$accomodation->room_type}}</span></p>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-today">

                  </p>
                 
                  
               </div>
                <hr>
               <p class="bottom-area d-flex right">
                     
                        
                        <a  style="padding:10px;border-radius:0px!important;text-decoration:none;"style="text-decoration:none;" class="addtocart" href="{{url('/addaccomo', $accomodation->id)}}">Discover</a>
                        
                  </p>
            </div>
         </div>
      </a>
      @endforeach
         
      </div>
   </div>
</section>
<!-- Car Rentals -->
<section>
   <div class="package-text">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4"><span style="color:#fff;">Car Rentals</span></h2>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
          @foreach($rentals as $rental)
           <a href="{{url('/carRentalDetails', $rental->id)}}" style="text-decoration: none;">
         <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto ftco-animate">
            <div class="destination">
               <span style="box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important;" class="img img-2 d-flex justify-content-center align-items-center">
                     <img src="/image/admin/rentals/{{$rental->picture}}" style="width: 100%;height: 300px;">
               </span>
               <div class="text p-3" style="height: 150px!important;">
                  <div class="d-flex">
                     <div class="one">
                        <span class="black rentalName"><b>{{ $rental->name }}</b></span>
                        
                     </div>
                     <div class="two">
                        <span class="price black">${{$rental->price}}</span>
                     </div>
                  </div>
                  <p class="black">{{ $rental->pick_up_address }}</p>
                  <span class="black"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$rental->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-event_seat">&nbsp</span>{{$rental->seats}} Seats</span>
                  <p class="days black"><br><span><span style="color: #f9be37;" class="icon-today"></span>&nbsp&nbsp days</span>

                  </p>
                 
               </div>
                <hr>
                  <p class="bottom-area d-flex right">
                     <span class="ml-auto">
                        @if($rental->price != 0)
                        <a  style="text-decoration:none;" class="addtocart" href="{{url('/rental', $rental->id)}}">Add to Cart</a>
                         @else
                        <li>  
                           <div class="alert alert-danger" role="alert">
                           {{ __('Enter Valid checkIn and checkOut.') }}
                           </div>
                        </li>
                        @endif 
                     </span>
                  </p>
            </div>
         </div>
      </a>
      @endforeach
      </div>
   </div>
</section>
<!-- Tips and Articles -->
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center">
            <h2><strong>Tips</strong> &amp; Articles</h2>
         </div>
      </div>
      <div class="row d-flex">
         <div class="col-md-4 d-flex">
            <div class="blog-entry align-self-stretch">
               <a href="{!! url('https://sundaytripyogyakarta.com/info-wisata/8-best-homestay-philippines-you-dont-miss/') !!}" class="block-20" style="background-image: url('./img/image_1.jpg');">
               </a>
               <div class="text">
                  <span class="tag">Travel</span>
                  <h3 class="heading mt-3"><a href="{!! url('https://sundaytripyogyakarta.com/info-wisata/8-best-homestay-philippines-you-dont-miss/') !!}" style="text-decoration:none;">8 Best homestay in Philippines that you don't miss out</a></h3>
               </div>
            </div>
         </div>
         <div class="col-md-4 d-flex">
            <div class="blog-entry align-self-stretch">
               <a href="#" class="block-20" style="background-image: url('./img/image_2.jpg');">
               </a>
               <div class="text">
                  <span class="tag">Culture</span>
                  <h3 class="heading mt-3"><a href="{!! url('https://www.travel-culture.com/ob/') !!}" style="text-decoration:none;">Culture Trip is the place to go to get inspired about the world's culture and creativity</a></h3>
               </div>
            </div>
         </div>
         <div class="col-md-4 d-flex">
            <div class="blog-entry align-self-stretch w-100">
               <a href="#" class="block-20" style="background-image: url('./img/image_3.jpg');">
               </a>
               <div class="text">
                  <span class="tag">Tips</span>
                  <h3 class="heading mt-3"><a href="{!! url('https://www.travelzoo.com/blog/20-tips-before-traveling-internationally/') !!}" style="text-decoration:none;">Tips Before Traveling Internationally</a></h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection