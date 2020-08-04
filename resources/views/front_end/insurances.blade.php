@extends('front_end.customPackage')
@section('insurances')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
</div>
<section class="footer-section justify-content-end ftco-search">
   <div class="container-wrap">
      <div class="box-center no-gutters">
         <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center"  role="tablist" aria-orientation="vertical">
               <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link " >Flight</a>
               <a style="text-decoration:none;" class="nav-link " href="{{url('/hotels')}}" >Hotel</a>
               <a style="text-decoration:none;" class="nav-link  " href="{{url('/rentals')}}" >Rental</a>
               <a style="text-decoration:none;" class="nav-link active" href="{{url('/insurances')}}" >Travel Insurance</a>
            </div>
            <div class="col-md-12 tab-wrap">
               <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                  <form action="{{url('/travelInsurance')}}" class="search-destination">
                     <div class="tab-pane " id="v_pills_4" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                        <div class="row">
                           <div class="col-md align-items-end">
                              <div class="form-group">
                                 <label for="#">Location</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-my_location"></span></div>
                                    <input type="text" name="location"  class="form-control" placeholder="Location" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md align-items-end">
                              <div class="form-group">
                                 <label for="#">Persons</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="icon-person"></span></div>
                                    <input type="text" name="persons" class="form-control" placeholder="Persons" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md align-self-end">
                              <div class="form-group">
                                 <div class="form-field">
                                    <input type="submit" name="insurance_search" value="Search" class="form-control btn btn-primary">
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
@endsection