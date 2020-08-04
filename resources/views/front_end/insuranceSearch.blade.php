@extends('front_end.insurancePackages')
@section('Packages')
<div class="col-lg-8 col-md-10 mx-md-auto">
   <div class="row">
      @foreach($insurances as $insurance)
      <div class="col-md-12 bg-light md-mx-auto">
         <div class="box">
            <a href="{{url('/insuranceDetails',$insurance->id)}}" class="linktd">
               <div class="row">
                  <div class="col-md-2">
                     <li class="insuranceName"><b>{{ $insurance->company_name }}</b></li>
                  </div>
                  <div class="col-md-3 col-sm-4 col-4">
                     <li class="mb-20 insuranceInfo">$<b>{{ $insurance->flight_accident_price*$persons }}</b><br>Accidental Death & Disabillity</li>
                     <li class="mb-20 insuranceInfo">$<b>{{ $insurance->trip_cancelatiom_price *$persons}}</b><br>Trip Cancelation</li>
                     <li class="mb-20 insuranceInfo insuranceInfoE">$<b>{{ $insurance->trip_intuption_price *$persons }}</b><br>Trip Intruption </li>
                  </div>
                  <div class="col-md-3 col-sm-4 col-4">
                     <li class="mb-20 insuranceInfo insuranceInfo40">$<b>{{ $insurance->medical_evacuation_price *$persons }}</b><br>Medical Cover</li>
                     <li class="mb-20 insuranceInfo insuranceInfo30">$<b>{{ $insurance->accidental_death_price *$persons}}</b><br>Accidental Death</li>
                     <li class="mb-20 insuranceInfo insuranceInfoE">$<b>{{ $insurance->trip_cancelatiom_price *$persons }}</b><br>Trip Cancelation </li>
                  </div>
                  <div class="col-md-4 col-sm-4 col-4">
                     <li class="mb-20 insuranceInfo insuranceInfo40"><b>{{ $insurance->number }}</b><br>Phone Number</li>
                     <li class="mb-20 insuranceInfo">$<b>{{ $insurance->price*$persons}}</b><br>Price</li>
                     <li class="mb-20 insuranceInfo"><b>{{ $insurance->country}}</b></li>
                     <li class="mb-20 insuranceInfo">
                        <form action="{{url('/insurance',$insurance->id)}}"><input type="submit" class="addtocart form-control" value="Add to Cart"></form>
                     </li>
                  </div>
               </div>
            </a>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection