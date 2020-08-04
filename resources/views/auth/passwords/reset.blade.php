<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{ URL::asset('css/travely.css')}}">
      <title>Reset Password</title>
   </head>
   <body>
      <div class="home container">
         <div class="row align-items-center text-center innercontainer">
            <div class="col-12 text-center">
               <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-10 col-10 mx-auto text-center box-shadow">
                     <ul>
                        <a href="{{url('login')}}" >Sign In</a>&nbsp&nbsp&nbsp&nbsp
                        <a href="{{url('register')}}" > Sign up</a>
                     </ul>
                     <div class="box">
                        <h2 class="web-name">Travely</h2>
                       <form method="POST" action="{{ route('password.update') }}">
                         @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="inputBox">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="off" autofocus>

                                 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              <label><b>{{ __('E-Mail Address') }}</b></label><br><span class="text-danger" id="password"></span>
                           </div>
                           <div class="inputBox">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                 @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                              <label><b>{{ __('Password') }}</b></label><br><span class="text-danger" id="password"></span>
                           </div>
                           <div class="inputBox">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <label><b>{{ __('Confirm Password') }}</b></label><span class="text-danger" id="confirmpassword"></span><br>
                           </div>
                           <input type="submit" value="{{ __('Reset Password') }}"><br>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
   </body>
</html>
