@extends('front_end.nav')
@section('customPackage')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 622px;"></div>
@endsection
@section('content')
<div class="ftco-section">
   <div>
      <div class="col-lg-3 col-md-6 col-sm-12 col-12 cart-payment">
         <div class="flex">
            <div class="col-lg-3 col-md-3 col-sm-2 col-2">
               <img class="w-100" src="./img/visa.png">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-2">
               <img class="w-100" src="./img/mastercard.png">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-2">
               <img class="w-100" src="./img/paypal.png">
            </div>
         </div>
         <div class="box mt-5 p-4 md-5">
            <h3 class="payment">PAYMENT METHOD</h3>
            <div class="form-group">
               <input  type="radio" name="Payment" value="paypal" id="paypal" class="mr-2"><span>Paypal</span>
            </div>
            <div class="form-group">
               <input type="radio" name="Payment" value="masterCard" id="masterCard" class="mr-2"><span>Master Card</span>
            </div>
            <div class="form-group">
               <input  type="radio" name="Payment" value="visaCard" id="visaCard" class="mr-2"><span>Visa Card</span><br>
            </div>
            <div class="form-group">
               <input  type="checkbox"  class="mr-2"><span >I have read and accept the terms and conditions</span><br>
            </div>
            <div class="form-group">
               <a href="{{url('genericPackages')}}"> 
               <input type="submit"  value="Continue Find Packages" style="background: #f9be37;color: #fff;" class="cart btn">
               </a>
            </div>
         </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12 col-10 ">
         @if (Session::has('success'))
         <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
         </div>
         @endif
         <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
            data-cc-on-file="false"
            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
            id="payment-form">
            @csrf
            <div class="fields">
               <div class="form-group">
                  <label><span class="red">*</span><span class="ml-2" >Credit Card No</span></label>
                  <input type="text" autocomplete='off' class="form-control card-number" placeholder="xxxx-xxxx-xxxx-xxxx">
               </div>
               <div class="form-group">
                  <label><span class="red">*</span><span class="ml-2" >Name On Card</span></label>
                  <input type="text" class="form-control ">
               </div>
               <div class="form-group">
                  <label><span class="red">*</span><span class="ml-2" >Month</span></label>
                  <input type="text" class="form-control card-expiry-month">
               </div>
               <div class="form-group">
                  <div class="row" >
                     <div class="col-md-6">
                        <label><span class="red">*</span><span class="ml-2" >Expiration Year</span></label>
                        <input type="text" placeholder="YYYY" class="form-control card-expiry-year">
                     </div>
                     <div class="col-md-6">
                        <label ><span class="red">*</span><span class="ml-2" >CVV</span></label>
                        <input type="text" autocomplete='off' placeholder="ex.123" class="form-control card-cvc">
                     </div>
                  </div>
               </div>
               <div class='form-row row'>
                  <div class='col-md-12 error form-group hide'>
                     <div class='alert-danger alert'>Please correct the errors and try
                        again.
                     </div>
                  </div>
               </div>
               <input type="submit" id="masterCardId" style="background:#f9be37;color:#fff;" class="form-control btn btn-primary" value="Master Card">
               <input type="submit" id="visaCardId" style="background:#f9be37;color:#fff;" class="form-control btn btn-primary" value="Visa Card">
         </form>
         </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 col-10 cart-checkout" >
         <div class="box p-4 md-5">
            <h3 class="cartTotal mb-4">CART TOTAL</h3>
            <p class="d-flex mb-5">
               <span >subtotal</span>
               <span >${{(double)str_replace(',', '', Cart::subTotal())}}</span>
            </p>
            <p class="d-flex mb-5">
               <span >Tax</span>
               <span >${{(double)str_replace(',', '', Cart::tax())}}</span>
            </p>
            <hr>
            <p class="d-flex mb-5" >
               <span>Total</span>
               <span class="total">${{(double)str_replace(',', '', Cart::total())}}</span>
            </p>
            <div class="form-group order">


               <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
                                          <input type="hidden" name="cmd" value="_cart">
                                          <input type="hidden" name="upload" value="1">
                                          <input type="hidden" name="business" value="nabeelahmad7779@gmail.com">

                                          <input type="hidden" name="item_name_1" value="Name1">
                                          <input type="hidden" name="amount_1" value="{{(double)str_replace(',', '', Cart::subTotal())}}">
                                          

                                          
                                           <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/checkOutOrder" />
                                          

                                          <input type="hidden" name="return" id="return" value="http://localhost:8000/thankyou" />

                                      
                                          <input type="submit" id="paypalId" style="background:#f9be37;color:#fff;" class="form-control btn btn-primary" value="Paypal">
                                      
                                    </form>
<!-- 
               <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="upload" value="1">
                  <input type="hidden" name="business" value="blockchain69.007@gmail.com">
                  <input type="hidden" name="amount_1" value="{{(double)str_replace(',', '', Cart::subTotal())/162}}">
                  <input type="hidden" name="shipping_1" value="{{(double)str_replace(',', '', Cart::tax())/162}}">
                  <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/checkOutOrder" />
                  <input type="hidden" name="return" id="return" value="http://localhost:8000/checkOutOrder" />
                  <input type="submit" id="paypalId" style="background:#f9be37;color:#fff;" class="form-control btn btn-primary" value="Paypal">
               </form> -->
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   $('#paypalId').hide();
           //  $('#cashbtn').hide();
             $(':radio[id=paypal]').change(function(){
                  
                  $( document ).ready(function() {
                      $('#paypalId').show();
                      $('#masterCardId').hide();
                      $('#visaCardId').hide();
                  });

                  
             });
   
     $('#masterCardId').hide();
           //  $('#cashbtn').hide();
             $(':radio[id=masterCard]').change(function(){

               $( document ).ready(function() {
                 $('#masterCardId').show();
                  $('#visaCardId').hide();
                  $('#paypalId').hide();
   
             });
           });     
   
       $('#visaCardId').hide();
           //  $('#cashbtn').hide();
             $(':radio[id=visaCard]').change(function(){

              $( document ).ready(function() {
                 $('#visaCardId').show();
                 $('#paypalId').hide();
                  $('#masterCardId').hide();
   
             });
           });    
   
   
</script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
   var stripe = Stripe('pk_test_FdGUWYz7wMfJo8ilifVxjD1F00ZbAp3Euk');
   
   // Create an instance of Elements.
   var elements = stripe.elements();
   $(function() {
       var $form         = $(".require-validation");
     $('form.require-validation').bind('submit', function(e) {
       var $form         = $(".require-validation"),
           inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
           $inputs       = $form.find('.required').find(inputSelector),
           $errorMessage = $form.find('div.error'),
           valid         = true;
           $errorMessage.addClass('hide');
    
           $('.has-error').removeClass('has-error');
       $inputs.each(function(i, el) {
         var $input = $(el);
         if ($input.val() === '') {
           $input.parent().addClass('has-error');
           $errorMessage.removeClass('hide');
           e.preventDefault();
         }
       });
     
       if (!$form.data('cc-on-file')) {
         e.preventDefault();
         Stripe.setPublishableKey($form.data('stripe-publishable-key'));
         Stripe.createToken({
           number: $('.card-number').val(),
           cvc: $('.card-cvc').val(),
           exp_month: $('.card-expiry-month').val(),
           exp_year: $('.card-expiry-year').val()
         }, stripeResponseHandler);
       }
     
     });
   
     function stripeResponseHandler(status, response) {
           if (response.error) {
               $('.error')
                   .removeClass('hide')
                   .find('.alert')
                   .text(response.error.message);
           } else {
               // token contains id, last4, and card type
               var token = response['id'];
               // insert the token into the form so it gets submitted to the server
               $form.find('input[type=text]').empty();
               $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
               $form.get(0).submit();
           }
       }
     
   });
</script>
@endsection