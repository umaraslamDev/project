<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/travely.css">
      <title>login</title>
   </head>
   <body>
      <div class="home-container">
         <div class="row  align-items-center h-50">
            <div class="col-lg-4 col-md-6 col-sm-10 mx-auto align-self-center box-shadow h-100">
               <ul>
                  <a href="{{url('Login')}}" class="signin">Sign In</a>
                  <a href="{{url('Signup')}}" >/ Sign up</a>
               </ul>
               <div class="box">
                  <h2 style="color:#f9be37">Travely</h2>
                  <form action="{{url('Home')}}">
                     <div class="inputBox">
                        <input type="email" required="">
                        <label><b>Emial:</b></label>
                     </div>
                     <div class="inputBox">
                        <input type="password" required="">
                        <label><b>password:</b></label><br>
                     </div>
                     <input type="submit" value="Login"><br>
                     <a class="white" href="{{url('forgotPassword')}}">Lost your password?</a><br>
                     <a class="white" href="{{url('Signup')}}">Don't have an account?</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
  
   </body>
</html>