@extends('front_end.hotelPackages')
@section('Packages')
<div class="col-lg-8 col-md-10 mx-md-auto">
   <section class="ftco-section">
   <div class="container-fluid">
      <div class="row">

         @foreach($hotel_accomodation as $accomodation)
         <a href="{{url('/hotelDetails', $accomodation->id)}}" style="text-decoration: none;">
           <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
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
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-today"></span>&nbsp&nbsp{{$days}} days</span>

                  </p>
                 
                  
               </div>
                <hr>
               <p class="bottom-area d-flex right">
                     <span class="ml-auto">
                        @if( $accomodation->price != 0)
                        <a  style="text-decoration:none;" class="addtocart" href="{{url('/addaccomo', $accomodation->id)}}">Add to Cart</a>
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
</div>
<!-- <div class="col-lg-8 col-md-10 mx-md-auto">
   <div class="row">
      @foreach($hotel_accomodation as $accomodation)
      <div class="col-md-12 bg-light md-mx-auto">
         <div class="box">
            <a href="{{url('/hotelDetails', $accomodation->id)}}" style="text-decoration: none;">
            <div class="col-lg-4 col-md-12 mx-md-auto">
               <img src="/image/admin/accomodation/{{$accomodation->picture}}">
            </div>
            <div class="col-lg-8 col-md-12 mx-md-auto">
               <ul class="hotelInfo mx-auto">
                  <li >
                  
                        <h4>{{ $accomodation->name }} <strong class="right" ></strong> </h4>
                     
                  </li>
                  <li>
                     
                        <h4 class="name"> {{ $accomodation ->location}}<strong class="right review"></strong></h4>
                   
                  </li>
                  <li><span class="number">  {{$accomodation->number}} <span class="web-name">Travely</span><strong class="right price" >${{ $days * $accomodation->price}}
                     </strong></span>
                  </li>
                  <li><span class="details"> <i class="fa fa-hotel icon" aria-hidden="true"></i> <br><span>{{$accomodation->class}}/{{$accomodation->room_type}} </span> <strong class="right service">Per Person</strong> </span></li>
                  @if($days * $accomodation->price != 0)
                  <li><a href="{{route('cart.edit',$accomodation->id)}}"> 
                     <input type="submit"  value="Add to Cart" class="cart btn right">
                     </a>
                  </li>
                  @else
                  <li>
                     <div class="alert alert-danger" role="alert">
                        {{ __('Enter Valid checkIn and checkOut.') }}
                     </div>
                  </li>
                  @endif
               </ul>
            </div>
         </a>
         </div>
      </div>
      @endforeach
   </div>
</div> -->
@endsection