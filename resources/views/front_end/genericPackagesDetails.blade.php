@extends('front_end.hotelPackages')
@section('Packages')
<form>
<div class="col-lg-8 col-md-10 mx-auto">
   <div class="row">
      <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
         <h2><b>{{$generic->hotel_name}}</b><span style="float:right;"> ${{$generic->price}}</span><br><br><span class="icon" style="color: #f9be37;"><span class="icon-plane"></span></span> 
             &nbsp&nbsp<span class="icon" style="color: #f9be37;"><span class="icon-hotel"></span></span>
             &nbsp&nbsp<span class="icon" style="color: #f9be37;"><span class="icon-car"></span></span>
             &nbsp&nbsp<span class="icon" style="color: #f9be37;"><span class="icon-insurance"></span></span>
         </h2>
      </div>
      <div class="col-md-12">
         <div class="w3-content w3-display-container">
            <img class="mySlides" src="/image/admin/generic/{{$generic->picture}}" style="width:980px;height: 600px;">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
         </div>
         <div class="col-md-12 hotel-single mt-4 mb-5 pl-0">
            <p class="details">{{$generic->detail}}</p>
            <div class="cart-list mb-5">
               <table class="table">
                  <thead class="thead-primary">
                     <tr>
                        <th class="text-center">From</th>
                        <th class="text-center">Where</th>
                        <th class="text-center">Cell No</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Email</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="text-center middle">
                        <td>{{$generic->from}}</td>
                        <td>{{$generic->where}}</td>
                        <td>{{$generic->number}}</td>
                        <td>{{$generic->address}}</td>
                        <td>{{$generic->email}}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="cart-list mb-5">
               <table class="table">
                  <thead class="thead-primary">
                     <tr>
                        <th class="text-center">Flight</th>
                        <th class="text-center">Insurance</th>
                        <th class="text-center">Rental</th>
                        <th class="text-center">Start date</th>
                        <th class="text-center">End date</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="text-center middle">
                        <td>{{$generic->flight_name}} Airways</td>
                        <td>{{$generic->insurance}}</td>
                        <td>{{$generic->rental}}</td>
                        <td>{{$generic->sdays}}</td>
                        <td>{{$generic->edays}}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="row box">
               <div class="col-lg-12 col-md-6 col-sm-10 col-10">
                  <h4><b>Facilities</b></h4>
                  <ul class="col-lg-12 col-md-12 col-sm-12 col-12 hotelInfo">

                     @if( $generic->room_type != null)
                     <li><span class="icon" style="color: #f9be37;"><span class="icon-star"></span></span>&nbsp&nbspHotel Class {{$generic->class}}</li>
                     @endif

                     <li><span class="icon" style="color: #f9be37;"><span class="icon-wifi"></span></span>&nbsp&nbspFree Wifi</li>

                     @if( $generic->room_type != null)
                        <li><span class="icon" style="color: #f9be37;"><span class="icon-hotel"></span></span>&nbsp&nbspRoom type {{$generic->room_type}}</li>
                      @endif 
                     <li><span class="icon" style="color: #f9be37;"><span class="icon-cancel"></span></span>&nbsp&nbspFree Cancellation</li>

                      <li><span class="icon" style="color: #f9be37;"><span class="icon-pool"></span></span>&nbsp&nbspPool</li>

                     <li><a href="{{url('/generic_package', $genericPackage->id)}}"> 
                        <input type="submit"  value="Add to Cart" class="cart btn">
                        </a></li>
                  </ul>
                 

                     
                    
               
                     
               </div>
            </div>
            <div class="row box">
               <div class="col-lg-12 col-md-6 col-sm-10 col-10">
                  <h4><b>Location</b></h4>
                     <p style="color: #666666;">
                        Located in London City Centre, this spa hotel is steps from Southbank Centre Book Market and Florence Nightingale Museum. St. Thomas' Hospital and Sea Life London Aquarium are also within 5 minutes. Waterloo Underground Station is only a 4-minute walk and Lambeth North Underground Station is 6 minutes.
                     </p>
               </div>
               <div class="col-lg-12 col-md-6 col-sm-10 col-10">
                  <h4><b>Hotel Features</b></h4>
                     <p style="color: #666666;">
                        This smoke-free hotel features 2 restaurants, a full-service spa, and an indoor pool. WiFi in public areas is free. Additionally, a fitness center, a bar/lounge, and a coffee shop/café are onsite.
                     </p>
               </div>
               <div class="col-lg-12 col-md-6 col-sm-10 col-10">
                  <h4><b>Room Amenities</b></h4>
                     <p style="color: #666666;">
                        All 1019 rooms offer free WiFi and free wired Internet, plasma TVs with cable channels, and comforts like memory foam beds and Egyptian cotton sheets. Guests will also find 24-hour room service, minibars, and coffee makers.
                     </p>
               </div>
            </div>
         </div>
         <h4><b>Related Hotels</b></h4>
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto ftco-animate">
                     <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(./img/hotel-1.jpg);">
                        </a>
                        <div class="text p-3">
                           <div class="d-flex">
                              <div class="one">
                                 <h3><a href="#">Paris, Italy</a></h3>
                                 <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                 </p>
                              </div>
                              <div class="two">
                                 <span class="price per-price">$40<br><small>/night</small></span>
                              </div>
                           </div>
                           <p>Far far away, behind the word mountains, far from the countries</p>
                           <p class="days"><span>2 days 3 nights</span></p>
                           <hr>
                           <p class="bottom-area d-flex">
                              <span class="ml-auto"><a href="#" style="text-decoration:none;">Book Now </a></span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto ftco-animate">
                     <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(./img/hotel-2.jpg);">
                        </a>
                        <div class="text p-3">
                           <div class="d-flex">
                              <div class="one">
                                 <h3><a href="#">Paris, Italy</a></h3>
                                 <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                 </p>
                              </div>
                              <div class="two">
                                 <span class="price per-price">$40<br><small>/night</small></span>
                              </div>
                           </div>
                           <p>Far far away, behind the word mountains, far from the countries</p>
                           <p class="days"><span>2 days 3 nights</span></p>
                           <hr>
                           <p class="bottom-area d-flex">
                              <span class="ml-auto"><a href="#" style="text-decoration:none;">Book Now </a></span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto ftco-animate">
                     <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(./img/hotel-3.jpg);">
                        </a>
                        <div class="text p-3">
                           <div class="d-flex">
                              <div class="one">
                                 <h3><a href="#">Paris, Italy</a></h3>
                                 <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                 </p>
                              </div>
                              <div class="two">
                                 <span class="price per-price">$40<br><small>/night</small></span>
                              </div>
                           </div>
                           <p>Far far away, behind the word mountains, far from the countries</p>
                           <p class="days"><span>2 days 3 nights</span></p>
                           <hr>
                           <p class="bottom-area d-flex">
                              <span class="ml-auto"><a href="#" style="text-decoration:none;">Book Now </a></span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto ftco-animate">
                     <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(./img/hotel-4.jpg);">
                        </a>
                        <div class="text p-3">
                           <div class="d-flex">
                              <div class="one">
                                 <h3><a href="#">Paris, Italy</a></h3>
                                 <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                 </p>
                              </div>
                              <div class="two">
                                 <span class="price per-price">$40<br><small>/night</small></span>
                              </div>
                           </div>
                           <p>Far far away, behind the word mountains, far from the countries</p>
                           <p class="days"><span>2 days 3 nights</span></p>
                           <hr>
                           <p class="bottom-area d-flex">
                              <span class="ml-auto"><a href="#" style="text-decoration:none;">Book Now </a></span>
                           </p>
                        </div>
                     </div>
                  </div>
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