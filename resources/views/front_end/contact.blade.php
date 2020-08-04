@extends('front_end.nav') 
@section('customPackage')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 502px;"></div>
@endsection @section('content')
<section>
   <div class="container">
      <div class="col-lg-6">
         <h3 class="heading center"> Contact Us </h3>
         <form>
            <div class="fields">
               <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" required>
               </div>
               <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" required>
               </div>
               <div class="form-group">
                  <input type="number" class="form-control" placeholder="Phone Number" required>
               </div>
               <div class="form-group">
                  <textarea cols="71" rows="10" class="textarea" placeholder="Message" required></textarea>
               </div>
               <div class="form-group">
                  <input type="submit" style="background:#f9be37; border:#f9be37;" class="form-control btn btn-primary" value="Submit">
               </div>
            </div>
         </form>
      </div>
      <div class="col-md-6 map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8369065412994!2d74.23878101475616!3d31.391060281412525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190015234aaed7%3A0xd9c52401a7d2c1ad!2sThe+University+of+Lahore+(Main+Campus)!5e0!3m2!1sen!2s!4v1508331718228" width="470" height="485" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
   </div>
</section>
@endsection