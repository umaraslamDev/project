<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/travely.css')}}">
      <title>login</title>
   </head>
   <body>
      <div class="home container">
         <div class="row align-items-center text-center innercontainer">
            <div class="col-12 text-center">
               <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-10 col-10 mx-auto text-center box-shadow">
                     <div class="box">
                        <h2 class="title">Travely</h2>
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
                           <input type="hidden" name="type" value="user">
                           <input type="submit" value="Login">
                           <br>
                           @if (Route::has('password.request'))
                           <a class="btn btn-link forgothover white" href="{{ route('password.request') }}">
                           {{ __('Forgot Your Password?') }}
                           </a>
                           @endif
                           <br>
                           <a class="white forgothover" href="{{route('register')}}">Don't have an account?</a>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>