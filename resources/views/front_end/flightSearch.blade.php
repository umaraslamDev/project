@extends('front_end.flightPackages')
@section('Packages')

<div class="col-lg-8 col-md-10 mx-md-auto">
   <section class="ftco-section">
   <div class="container-fluid">
      <div class="row">

         @foreach($flights as $flight)
         <a href="{{url('/flightDetails', $flight->id)}}" style="text-decoration: none;">
           <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
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
                        <span class="price black">${{$adult * $flight->price +( $child * $flight->price/2) }}<br></span>
                     </div>
                  </div>
                  <p class="black">{{ $flight->from }} - {{$flight->where}}</p>
                   <p class="black">
                    <span class="black" style="margin-bottom: 10px;"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$flight->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-person">&nbsp</span>{{$adult}} Adult</span>
                </p>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-class"></span>{{$flight->class}}</span>
                    <span class="right black"><span style="color: #f9be37;" class="icon-child">&nbsp</span>{{$child}} Child</span>
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
<div class="package-text">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4"><span style="color:#fff;">Hotels Related To Flight Stop</span></h2>
         </div>
      </div>
   </div>
   <section class="ftco-section">
   <div class="container-fluid">
      <div class="row">
  @foreach($accomodations as $accomodation)
           
        
          <a href="{{url('/hotelsDetails', $accomodation->id)}}" style="text-decoration: none;">
           <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
            <div class="destination">
               <span style="box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important;" class="img img-2 d-flex justify-content-center align-items-center">
                     <img src="/image/admin/accomodation/{{$accomodation->picture}}" style="width: 100%;">

               </span>
               <div class="text p-3" style="height: 180px;">
                  <div class="d-flex">
                     <div class="one">
                        <h3 class="black accomodationName"><b>{{ $accomodation->name }}</b></h3>
                        
                     </div>
                     <div class="two">
                        <span class="price black">${{($adult * $accomodation->price +( $child * $accomodation->price/2))+$accomodation->price }}<br></span>
                     </div>
                  </div>
                  <p class="black"></p>
                    <span class="black" style="margin-bottom: 10px;"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$accomodation->number}}</span>
                
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-add_location"></span></span>
                    {{$accomodation->stop_location}} stop
                    
                  </p>
               </div>
                <hr>
               <p class="bottom-area d-flex right">
                     
                        <a  style="text-decoration:none;" class="addtocart" href="{{route('cart.edit',$accomodation->id)}}">Add to Cart</a>
                        
                  </p>
            </div>
         </div>
        </a>
         
            @endforeach
          </div>
        </div>
      </section>
</div>
@endsection