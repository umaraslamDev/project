@extends('front_end.flights')
@section('content')
<section>
   <div class="package">
      <div class="col-md-3 sidebar-wrap p-4 px-5">
         <h3 class="heading"> Find Flights Packages </h3>
         <form>
            <div class="fields">
               
               <div class="form-group">
                  <input type="text" class="form-control"  id="flightName" placeholder="Name" required>
               </div>
               <div class="form-group">
                  <select class="form-control" id="priceSearch">
                     <option value="">$50 > $99</option>
                     <option value="">$100 > $1499</option>
                     <option value="">$1500 > $1999</option>
                     <option value="">$2000 > $2499</option>
                     <option value="">$2500 ></option>
                  </select>
               </div>
              
               <div class="form-group">
                  <input type="submit"  class="form-control btn btn-primary" value="Search">
               </div>
            </div>
         </form>
      </div>
      @yield('Packages')
   </div>
</section>
@endsection