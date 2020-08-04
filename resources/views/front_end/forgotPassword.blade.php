<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/travely.css">
      <title>Forgot Password</title>
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
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </div>
                        @endif
                        @if ($message = Session::has('success'))
                        <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <h2 class="web-name">Travely</h2>
                        <form action="{{url('send/email')}}" name="myForm" onsubmit="return validateForm()" method="post">
                           {{ csrf_field() }}
                           <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/verification" />
                           <input type="hidden" name="return" id="return" value="http://localhost:8000/verification" />
                           <div class="inputBox">
                              <input type="email" name="email" id="email" required>
                              <label><b>Email:</b></label>
                           </div>
                           <input type="submit" value="Submit"><br>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         function validateForm() {
           var x = document.forms["myForm"]["email"].value;
           
           if (x == "") {
             alert("*Enter Email");
             return false;
           }
           if (x.indexOf("@",0) < 0) {
             alert("*Please Enter a Valid Email Address");
             return false;
           }
         
           if(x.indexOf(".", 0) < 0){
             alert("*Please Enter a Valid Email Address");
             return false;
           }
         
          
         
         
         }
      </script>
   </body>
</html>