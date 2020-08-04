<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/travely.css')}}">
      <title>Register</title>
   </head>
   <body>
      <div class="home container">
         <div class="row align-items-center text-center innercontainer">
            <div class="col-12 text-center">
               <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-10 col-10 mx-auto text-center box-shadow">
                     <ul>
                        <a href="{{ route('login') }}" >Sign In</a>
                     </ul>
                     <div class="box">
                        <h2 class="web-name">Travely</h2>
                        <form method="POST" onsubmit="validateForm()" name="myForm" action="{{ route('register') }}">
                           @csrf
                           <div class="inputBox">
                              <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                              <label><b>{{ __('Name') }}</b></label>
                              @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                              </span>
                              @endif
                           </div>
                           <div class="inputBox">
                              <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                              <label for="email" ><b>{{ __('Email') }}</b></label>
                              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                           </div>
                           <div class="inputBox">
                              <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                              <label for="password" ><b>{{ __('Password') }}</b></label>
                              @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                           </div>
                           <div class="inputBox">
                              <input id="password-confirm" type="password"  name="password_confirmation" required>
                              <label for="password-confirm" ><b>{{ __('Confirm Password') }}</b></label>
                           </div>
                           <input type="submit" value="Register"><br>
                           <span class="s-login">Already have an account ?</span><span><a href="{{url('login')}}" class="inner"> Sign In</a></span>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         function validateForm() {
           var x = document.forms["myForm"]["password"].value;
           var y = document.forms["myForm"]["password_confirmation"].value;
           if (x == "") {
             alert("Enter Password");
             return false;
           }
           if (y == "") {
             alert("Enter Confirm Password");
             return false;
           }
           if (x != y) {
             alert("Password did not Match");
             return false;
           }
         
         
         
         
         }
      </script>
   </body>
</html>