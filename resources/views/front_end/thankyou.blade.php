<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/travely.css">
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
                        <form  method="GET" action="{{url('genericPackages')}}">
                           @csrf
                           
                           <div class="inputBox">
                              <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                       {{Cart::destroy()}}
                                       <div class="inputBox">
                              
                                          <h4 style="margin-bottom: 50px;"><b>Thank You {{ Auth::user()->name }}</b></h4>
                                          
                                       </div>
                                        {{ session('status') }}
                                        <h4 style="margin-bottom: 50px;"><b>Your Package has been placed</b></h4>
                                    </div>

                                    @else
                                       <h4>Error</h4>
                                @endif

                               
                            </div>
                              
                              
                           </div>

                           <input type="submit" value="Continue Find Packages">
                           <br>
                           
                        </form>

                           <form method="POST" action="{{url('send/email')}}">
                           {{ csrf_field() }}
                          
                           <div class="inputBox">
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              <label><b>{{ __('E-Mail Address') }}</b></label>
                           </div>
                           <input type="submit" value="{{ __('Send Email') }}"><br>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
  
   </body>
</html>