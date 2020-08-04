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
                     <ul>
                        <a href= "{{url('login')}}" >Login</a>&nbsp&nbsp&nbsp&nbsp
                        <a href="{{url('register')}}" >Register</a>
                     </ul>
                     <div class="box">
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <h2 class="web-name">Travely</h2>
                        <form method="POST" action="{{ route('password.email') }}">
                           {{ csrf_field() }}
                          
                           <div class="inputBox">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              <label><b>{{ __('E-Mail Address') }}</b></label>
                           </div>
                           <input type="submit" value="{{ __('Send Password Reset Link') }}"><br>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</body>
</html>
