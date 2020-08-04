@extends('front_end.carRentalPackages')
@section('Packages')
<div class="col-lg-8 col-md-10 mx-md-auto">
   <section class="ftco-section">
   <div class="container-fluid">
      <div class="row">

         @foreach($rentals as $rental)
         <a href="{{url('/carRentalDetails', $rental->id)}}" style="text-decoration: none;">
           <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
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
                        <span class="price black">${{$days * $rental->price}}</span>
                     </div>
                  </div>
                  <p class="black">{{ $rental->pick_up_address }}</p>
                  <span class="black"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$rental->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-event_seat">&nbsp</span>{{$rental->seats}} Seats</span>
                  <p class="days black"><br><span><span style="color: #f9be37;" class="icon-today"></span>&nbsp&nbsp{{$days}} days</span>

                  </p>
                 
               </div>
                <hr>
                  <p class="bottom-area d-flex right">
                     <span class="ml-auto">
                        @if($days * $rental->price != 0)
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
</div>
@endsection

<!-- <div class="col-md-12 bg-light md-mx-auto">
           
               <a href="{{url('/carRentalDetails')}}">
               <div class="col-lg-4 col-md-12 mx-md-auto">
                  <img src="/image/admin/rentals/{{$rental->picture}}" style="width: 100%!important;">
               </div>
               <div class="col-lg-8 col-md-12 mx-md-auto">

                 

                 <ul class="hotelInfo mx-auto">



                      <li>
                        <a href="{{url('/carRentalDetails',$rental->id)}}" style="color:#000;"><span style="font-size:30px;">{{ $rental->type }}  <strong class="right" ></strong> </span></a></li> 
                        <li ><a href="{{url('/carRentalDetails')}}"><h4>{{ $rental->name }}  <strong class="right" ></strong> </h4></a></li>         
                        <li><a href="{{url('/carRentalDetails')}}"><h4 class="name">{{ $rental->pick_up_address }}<strong class="right review">${{$rental->price}}/Day</strong></h4></a></li>
                        <li><a href="{{url('/carRentalDetails')}}" class="number"> {{ $rental->number}}  <span class="web-name"></span><strong class="right price" > ${{ $days * $rental->price}}/Total</strong></a></li>
                        <li><a href="{{url('/carRentalDetails')}}" class="seats">Seats {{ $rental->seats}} <strong class="right" ></strong> </a></li>
                        <li ><a href="{{url('/carRentalDetails')}}"><h4>{{ $rental->company_name }}  <strong class="right" ></strong> </h4></a></li>  
                        @if($days * $rental->price != 0)
                        <li><a href="{{route('cart.edit',$rental->id)}}"> 
                        <input type="submit"  value="Add to Cart" class="cart btn right">
                        </a></li>
                        @else
                        <li>  <div class="alert alert-danger" role="alert">
                        {{ __('Enter Valid checkIn and checkOut.') }}
                        </div></li>
                        @endif 
                  </ul>
               </div>
               
                 </a>
            </div>
         -->