@extends('front_end.customPackage')
@section('rentals')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
</div>
<section class="footer-section justify-content-end ftco-search">
   <div class="container-wrap">
      <div class="box-center no-gutters">
         <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center"  role="tablist" aria-orientation="vertical">
               <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link " >Flight</a>
               <a style="text-decoration:none;" class="nav-link " href="{{url('/hotels')}}" >Hotel</a>
               <a style="text-decoration:none;" class="nav-link active " href="{{url('/rentals')}}">Rental</a>
               <a style="text-decoration:none;" class="nav-link" href="{{url('/insurances')}}" >Travel Insurance</a>
            </div>
            <div class="col-md-12 tab-wrap">
               <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                  <form action="{{url('/carRentalPackages')}}" class="search-destination">
                     <div class="tab-pane " id="v_pills_3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                        <div class="row">
                           <div class="col-md align-items-end">
                              <div class="form-group">
                                 <label for="#">Location</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" name="rental_location" class="form-control" placeholder="Location" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md align-items-end">
                              <div class="form-group">
                                 <label for="#">Check In</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" autocomplete='off' name="rental_check_in" class="form-control" id="carRentalCheckIn"  placeholder="Check In" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md align-items-end">
                              <div class="form-group">
                                 <label for="#">Check Out</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" autocomplete='off' name="rental_check_out" class="form-control" id="carRentalCheckOut"  placeholder="From" required>
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
     $('#carRentalCheckIn').datepicker({
       minDate: 0,
     });
   
     $('#carRentalCheckOut').datepicker({
       minDate: 0,
     });
   
   
   });
</script>
@endsection