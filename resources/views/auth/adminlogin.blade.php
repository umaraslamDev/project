@extends('layouts.app')
@section('content')
<div class="home container">
   <div class="row align-items-center text-center innercontainer">
      <div class="col-12 text-center">
         <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-10 col-10 mx-auto text-center box-shadow">
               <div class="box">
                  <h2 class="web-name">Admin Login</h2>
                  <form  method="POST" action="{{route('login')}}">
                     @csrf
                     <div class="inputBox">
                        <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label><b>{{ __('E-Mail') }}</b></label>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                     </div>
                     <div class="inputBox">
                        <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>
                        <label><b>{{ __('Password') }}</b></label>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                     </div>
                     <input type="hidden" name="type" value="admin">
                     <input type="submit" value="Login">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection