@extends('front_end.packages')
@section('Packages')
<div class="col-lg-8 col-md-10 mx-md-auto">
   <section class="ftco-section">
   <div class="container-fluid">
      <div class="row">

         @foreach($genericpackages as $genericPackage)
         <a href="{{url('/genericPackagesDetails', $genericPackage->id)}}" style="text-decoration: none;">
           <div class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
            <div class="destination">
               <span style="box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important;" class="img img-2 d-flex justify-content-center align-items-center">
                     <img src="/image/admin/generic/{{$genericPackage->picture}}" style="width: 100%;height: 300px;">
               </span>
               <div class="text p-3" style="height: 180px;">
                  <div class="d-flex">
                     <div class="one">
                        <h3 class="black accomodationName"><b>{{ $genericPackage->hotel_name }}</b></h3>
                        
                     </div>
                     <div class="two">
                        <span class="price black">${{$genericPackage->price}}<br></span>
                     </div>
                  </div>
                  <p class="black"><span style="color: #f9be37;" class="icon-plane"></span>&nbsp&nbsp{{ $genericPackage->flight_name }} Airways</p>
                  <span class="black"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$genericPackage->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-car">&nbsp</span>{{$genericPackage->rental}}</span>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-hotel"></span>&nbsp&nbsp&nbsp&nbsp{{$genericPackage->room_type}}</span></p>
                  <p class="days black"><span style="color: #f9be37;" class="icon-location-arrow"></span>&nbsp&nbsp<span ><b>{{$genericPackage->from}} to {{$genericPackage->where}}</b></span>
                    <span class="right" ><b>{{$genericPackage->sdays}} to {{$genericPackage->edays}}</b></span>
                  </p>
                 
                  
               </div>
                <hr>
               <p class="bottom-area d-flex right">
                     <span class="ml-auto">
                        @if($genericPackage->price != 0)
                        <a  style="text-decoration:none;" class="addtocart" href="{{url('/generic_package', $genericPackage->id)}}">Add to Cart</a>
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