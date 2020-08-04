@extends('front_end.nav')
@section('customPackage')
<div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 622px;"></div>
@endsection
@section('content')
<section class="ftco-section">
   <div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="cart-list mb-5">
            <table class="table">
               <thead class="thead-primary">
                  <tr>
                     <th class="text-center"></th>
                     <th class="text-center">Name</th>
                     <th class="text-center">Price</th>
                     <th class="text-center">Quantity</th>
                     <th class="text-center">Total</th>
                  </tr>
               </thead>
               <tbody>
                  
                  @foreach($cartItems as $cartItem)
                  <tr class="text-center middle">
                     <td class="product-remove" > 
                        {!!	Form::open(['route' => ['cart.destroy',$cartItem->rowId],'method' => 'DELETE']) !!}
                        <input type="submit" class="btn btn-danger" id="cart_delete" value="delete">
                        {!! Form::close() !!}
                     </td>
                    
                     <td class="product-name">
                        <h3>{{$cartItem->name}}</h3>
                     </td>
                     <td class="price">{{$cartItem->price}}</td>
                     <td class="quantity">
                        <div class="mb-3" style="color: #f9be37;">
                           {!!	Form::open(['route' => ['cart.update',$cartItem->rowId],'method' => 'PUT']) !!}
                           <input name="qty" id="qty" class="quantity form-control" min="1" max="10" type="number"  value="{{$cartItem->qty}}">
                           <input type="hidden"  id="quant" value="{{$cartItem->rowId}}">

                        {!! Form::close() !!}
                        </div>
                     </td>

                     <td class="total">$ {{($cartItem->price * $cartItem->qty)}}</td>
                  </tr>
                  <!-- END TR-->
                  @endforeach
                  
                  
                  <!-- END TR-->
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div class="row justify-content-end">
      <div class="col-md-4" >
         <div class="box p-4 md-5 ">
            <h3 class="cartTotal mb-4">CART TOTAL</h3>
            <p class="d-flex mb-5">
               <span >subtotal</span>
               <span >${{(double)str_replace(',', '', Cart::subTotal())}}</span>
            </p>
            
            <hr>
            <p class="d-flex mb-5" >
               <span>Total</span>
               <span class="total">${{(double)str_replace(',', '', Cart::subtotal())}}</span>
            </p>
            @if(Auth::check())

           
            <form action="{{url('checkOutOrder')}}">
               <div class="form-group order-booking">
                
                  <input type="submit"   class="form-control btn btn-primary" value="PROCEED TO CHECKOUT">
               </div>
            </form>
           
            @else
            <h3 style="color:#fff;">You have to login for checkout</h3>
            @endif
            <div class="form-group">
               <a href="{{url('genericPackages')}}"> 
               <input type="submit"  value="Continue Find Packages" style="background: #f9be37;color: #fff;" class="cart form-control btn">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>



@endsection