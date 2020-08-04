@section('customPackage')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
</div>
<section class="footer-section justify-content-end ftco-search">
   <div class="container-wrap">
      <div class="box-center">
         <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab"  aria-orientation="vertical">
               <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link active" id="v-pills-1-tab"   >Flight</a>
               <a style="text-decoration:none;" class="nav-link " href="{{url('/hotels')}}" >Hotel</a>
               <a style="text-decoration:none;" class="nav-link " href="{{url('/rentals')}}" >Car</a>
               <a style="text-decoration:none;" class="nav-link" href="{{url('/insurances')}}" >Travel Insurance</a>
            </div>
         </div>
         <div class="col-md-12 tab-wrap">
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">
               <div class="tab-pane  active" id="v_pills_1" >
                  <form action="{{url('/flightPackages')}}" class="search-destination">
                     <div class="row">
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">From</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-my_location"></span></div>
                                 <input type="text" name="flight_from" class="form-control" placeholder="From" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Where</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-map-marker"></span></div>
                                 <input type="text" name="flight_where" class="form-control" placeholder="Where" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Check_In</label>
                              <div class="form-field">
                                 <span class="icon" style="width:20px;"><span class="icon-calendar"></span></span>
                                 <input type="text" name="flight_checkIn" class="form-control"  id="flightCheckIn" placeholder="Check in" required>
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Travelers</label>
                              <div class="form-field">
                                 <span class="icon" style="width:20px;"><span class="icon-person"></span></span> 
                                 <div name="travelers" id="travelers" class="form-control">
                                     <span class="icon" style="left:40px;color:#000;"><input type="hidden" name="adult" id="A" /> Adult</span>
                                    <span class="icon" style="left:100px;color:#000;"><input type="hidden" name="child" id="C"/>&nbspChild</span>
                                 </div>
                                 <!-- <select name="" id="" class="form-control" required>
                                    <option value="">0</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    </select> -->
                              </div>
                           </div>
                           <style type="text/css">
                              .handle-counter .counter-minus, .handle-counter .counter-plus{
                              padding: 0px 8px;
                              background: #f9be37;
                              border-radius: 0px;
                              border:none;
                              color:#fff;
                              }
                              .outline_off{
                              outline: none!important;
                              }
                           </style>
                           <div class="form-field">
                              <div  class="passenger form-control" style="display:none;
                                 position: absolute;top:85px; 
                                 box-shadow: 0 2px 16px rgba(0,0,0,0.15)!important; border-radius: 2px;width:250px;min-height: 140px;z-index: 1;padding:25px 0px;border:none;">
                                 <div class="container-fluid">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="row">
                                             <div class="col-4">
                                                <p style="font-size: 15px;"><b>Adult</b></p>
                                             </div>
                                             <div class="col-8">
                                                <div class="handle-counter pull-right" id="handleCounter">
                                                   <a class="counter-minus btn btn-primary">-</a>
                                                   <input type="text" id="adult" class="outline_off" style="border:none;" value="0">
                                                   <a class="counter-plus btn btn-primary">+</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-4">
                                                <p style="font-size: 15px;"><b>Child</b></p>
                                             </div>
                                             <div class="col-8">
                                                <div class="handle-counter pull-right" id="handleCounter2">
                                                   <a class="counter-minus minus btn btn-primary">-</a>
                                                   <input type="text" id="child" class="outline_off input2" style="border:none;"  value="0">
                                                   <a class="counter-plus plus btn btn-primary">+</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <br>   
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-self-end">
                           <div class="form-group">
                              <div class="form-field">
                                 <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane" id="v_pills_2">
                  <form action="{{url('/hotelPackages')}}" id="hotelSearch" class="search-destination">
                     <div class="row">
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Check In</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-calendar"></span></div>
                                 <input type="text" class="form-control" id="hotelCheckIn"  placeholder="Check In" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Check Out</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-calendar"></span></div>
                                 <input type="text" class="form-control"  id="hotelCheckOut" placeholder="From" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Guest</label>
                              <div class="form-field">
                                 <div class="select-wrap">
                                    <div class="icon"><span class="icon-person"></span></div>
                                    <select name="" id="" class="form-control" required>
                                       <option value="">0</option>
                                       <option value="">1</option>
                                       <option value="">2</option>
                                       <option value="">3</option>
                                       <option value="">4</option>
                                       <option value="">5</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-self-end">
                           <div class="form-group">
                              <div class="form-field">
                                 <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane" id="v_pills_3" >
                  <form action="{{url('/carRentalPackages')}}" class="search-destination">
                     <div class="row">
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Where</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-map-marker"></span></div>
                                 <input type="text" class="form-control" placeholder="Where" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Check In</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-calendar"></span></div>
                                 <input type="text" class="form-control"  id="carCheckIn" placeholder="Check In" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Check Out</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-calendar"></span></div>
                                 <input type="text" class="form-control"  id="carCheckout" placeholder="From" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-self-end">
                           <div class="form-group">
                              <div class="form-field">
                                 <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane " id="v_pills_4">
                  <form action="{{url('/travelInsurance')}}" class="search-destination">
                     <div class="row">
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Number of Person</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-person"></span></div>
                                 <input type="text" class="form-control" placeholder="Persons" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-items-end">
                           <div class="form-group">
                              <label for="#">Total Budget</label>
                              <div class="form-field">
                                 <div class="icon"><span class="icon-money"></span></div>
                                 <input type="text" class="form-control checkin_date" placeholder="Budget" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md align-self-end">
                           <div class="form-group">
                              <div class="form-field">
                                 <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
   $(document).ready(function(){
     $('#travelers').click(function(){
        $('#travelers').toggleClass('active')
       $('.passenger').toggleClass('active')
       if($('#travelers').hasClass('active')){
         $('.passenger').addClass('passs');
       }
       else{
         $('.passenger').removeClass('passs');
       }
     });
   });
   
   
</script>
<script>
   // var A = document.getElementById('adult').value;
   // var C = document.getElementById('child').value;
   
   // var adult = Number(A);
   // var child = Number(C);
   //  // var n =
   //  // Number(A)+' '+
   //  // Number(C);
   // document.getElementById('A').innerHTML=adult;
   // document.getElementById('C').innerHTML=child;
</script>
<script>
   $(function () {
     $('#flightCheckIn').datepicker({
       minDate: 0,
     });
   
     $('#flightCheckOut').datepicker({
       minDate: +1,
     });
   
     $('#hotelCheckIn').datepicker({
       minDate: 0,
     });
     $('#hotelCheckOut').datepicker({
       minDate: +1,
     });
     $('#carCheckIn').datepicker({
       minDate: 0,
     });
     $('#carCheckout').datepicker({
       minDate: 0,
     });
     $('#packageCheckIn').datepicker({
       minDate: 0,
     });
     $('#packageCheckout').datepicker({
       minDate: 0,
     });
   
   });
</script>
<script src="{{ URL::asset('./js/handleCounter.js') }}"></script>
<script>
   $(function ($) {
       var options = {
           minimum: 0,
           maximize: 10,
           onChange: valChanged,
           onMinimum: function(e) {
               console.log('reached minimum: '+e)
           },
           onMaximize: function(e) {
               console.log('reached maximize'+e)
           }
       }
       $('#handleCounter').handleCounter(options)
       $('#handleCounter2').handleCounter(options)
          
          
   $('#handleCounter3').handleCounter({maximize: 100})
   })
   function valChanged(d) {
   //            
         // document.getElementById('A').innerHTML=d;
        //  document.getElementById('C').innerHTML=d;
   }
   
</script>
@endsection