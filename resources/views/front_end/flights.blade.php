@extends('front_end.customPackage')
@section('flights')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
</div>
<section class="footer-section justify-content-end ftco-search">
   <div class="container-wrap">
      <div class="box-center no-gutters">
         <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center"  role="tablist" aria-orientation="vertical">
               <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link active" >Flight</a>
               <a style="text-decoration:none;" class="nav-link " href="{{url('/hotels')}}" >Hotel</a>
               <a style="text-decoration:none;" class="nav-link " href="{{url('/rentals')}}" >Rental</a>
               <a style="text-decoration:none;" class="nav-link" href="{{url('/insurances')}}" >Travel Insurance</a>
            </div>
            <div class="col-md-12 tab-wrap">
               <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                  <form action="{{url('/flightPackages')}}" onsubmit="return "class="search-destination">
                     <div class="tab-pane  active" id="v_pills_1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                        <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-4 align-items-end">
                              <div class="form-group">
                                 <label for="#">From</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-my_location"></span></div>
                                    <input type="text" name="flight_from" class="form-control" placeholder="From" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-2 col-lg-2 col-md-4 align-items-end">
                              <div class="form-group">
                                 <label for="#">Where</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" name="flight_where" class="form-control" placeholder="Where" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-2 col-lg-2 col-md-4 align-items-end">
                              <div class="form-group">
                                 <label for="#">Check In</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" name="flight_checkIn" autocomplete='off' class="form-control" id="flightCheckIn"  placeholder="Check In" required>
                                 </div>
                              </div>
                           </div>
                          
                          <div class="col-xl-3 col-lg-3 col-md-5 align-items-end">
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
                                                   <input type="text" id="adult" name="adult" class="outline_off" style="border:none;" value="0">
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
                                                   <input type="text" id="child" class="outline_off input2" name="child" style="border:none;"  value="0">
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
                           <div class="col-lg-2 col-md-4 align-self-end">
                              <div class="form-group">
                                 <div class="form-field">
                                    <input type="submit" name="flight_search" value="Search" class="form-control btn btn-primary">
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
   </div>
   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li  style="margin:5px;margin-top:5px;list-style: none;">{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
   </div>       
</section>
<script>
   $(function () {
     $('#flightCheckIn').datepicker({
      "dateFormat": "yy-mm-dd",
       minDate: 0,
     });
   
     
   
   
   });
</script>
<script src="{{ URL::asset('./js/handleCounter2.js') }}"></script>
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