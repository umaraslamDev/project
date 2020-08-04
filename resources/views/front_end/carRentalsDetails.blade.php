@extends('front_end.carRentalPackages')
@section('Packages')
<form>
<div class="col-lg-8 col-md-10 mx-auto">
   <div class="row">
      <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
         <h2><b>{{$rental->name}}</b><span style="float:right;"> ${{$rental->price}}</span></h2>
      </div>
      <div class="col-md-12">
         <div class="w3-content w3-display-container">
            <img class="mySlides" src="/image/admin/rentals/{{$rental->picture}}" style="width:980px;height: 600px;">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
         </div>
         <div class="col-md-12 hotel-single mt-4 mb-5 pl-0">
            <p class="details">{{$rental->detail}}</p>
            <div class="cart-list mb-5">
               <table class="table">
                  <thead class="thead-primary">
                     <tr>
                        <th class="text-center">Location</th>
                        <th class="text-center">Cell No</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Email</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="text-center middle">
                        <td>{{$rental->country}}</td>
                        <td>{{$rental->number}}</td>
                        <td>{{$rental->address}}</td>
                        <td>{{$rental->email}}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="row box">
               <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <h4><b>Facilities</b></h4>
                  <ul class="hotelInfo mx-auto">
                     <li><span class="icon" style="color: #f9be37;"><span class="icon-person"></span></span>&nbsp&nbspSeats {{$rental->seats}}</li>
                     <li><span class="icon" style="color: #f9be37;"><span class="icon-hotel"></span></span>&nbsp&nbspAC {{$rental->availability}}</li>
                     <li><a href="{{url('/rental', $rental->id)}}"> 
                        <input type="submit"  value="Add to Cart" class="cart btn">
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         
         </div>
         <h4><b>Related Hotels</b></h4>
         <section>
            <div class="container-fluid">
      <div class="row">
          @foreach($hotels as $accomodation)
           <a href="{{url('/hotelDetails', $accomodation->id)}}" style="text-decoration: none;">
         <div  class="col-xl-4 col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
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
                        <span class="price black">${{ $accomodation->price}}<br></span>
                     </div>
                  </div>
                  <p class="black">{{ $accomodation->pick_up_address }}</p>
                  <span class="black"><span style="color: #f9be37;" class="icon-phone black">&nbsp</span>{{$accomodation->number}}</span>
                  <span class="right black"><span style="color: #f9be37;" class="icon-person">&nbsp</span>{{$accomodation->no_of_persons}} person</span>
                  <p class="days black"><span><span style="color: #f9be37;" class="icon-hotel"></span>&nbsp&nbsp&nbsp&nbsp{{$accomodation->room_type}}</span></p>
                  <p class="days black"><span>

                  </p>
                 
                  
               </div>
                <hr>
               <p class="bottom-area d-flex right">
                     
                        
                        <a  style="padding:10px;border-radius:0px!important;text-decoration:none;"style="text-decoration:none;" class="addtocart" href="{{url('/addaccomo', $accomodation->id)}}">Add to Cart</a>
                        
                  </p>
            </div>
         </div>
      </a>
      @endforeach
      </div>
   </div>
         </section>

          <h4><b>Related Flights</b></h4>
          <section>
            <div class="container-fluid">
      <div class="row">
          @foreach($flights as $flight)
           <a href="{{url('/flightDetails', $flight->id)}}" style="text-decoration: none;">
         <div  class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="destination">
               <span style="box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important;" class="img img-2 d-flex justify-content-center align-items-center">
                     <img src="/image/admin/flights/{{$flight->picture}}" style="width: 100%;">
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
      </div>
   </div>
</div>
</form>
<script>
   // var slideIndex = 1;
   // showDivs(slideIndex);
   
   // function plusDivs(n) {
   //   showDivs(slideIndex += n);
   // }
   
   // function showDivs(n) {
   //   var i;
   //   var x = document.getElementsByClassName("mySlides");
   //   if (n > x.length) {slideIndex = 1}
   //   if (n < 1) {slideIndex = x.length}
   //   for (i = 0; i < x.length; i++) {
   //     x[i].style.display = "none";  
   //   }
   //   x[slideIndex-1].style.display = "block";  
   // }
   var myIndex = 0;
   carousel();
   
   function carousel() {
     var i;
     var x = document.getElementsByClassName("mySlides");
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
     }
     myIndex++;
     if (myIndex > x.length) {myIndex = 1}    
     x[myIndex-1].style.display = "block";  
     setTimeout(carousel, 2000); // Change image every 2 seconds
   }
</script>
@endsection