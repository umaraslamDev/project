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
         <div class="col-lg-4 col-md-6 col-sm-10 mx-auto box-shadow">
            <ul>
               <a href="{{url('Login')}}" >Sign In</a>
            </ul>
            <div class="box">
               <h2 class="web-name">Travely</h2>
               <form action="{{url('Login')}}">
                  <div class="inputBox">
                     <input type="text" required="">
                     <label><b>First Name:</b></label>
                  </div>
                  <div class="inputBox">
                     <input type="text" required="">
                     <label><b>Second Name:</b></label>
                  </div>
                  <div class="inputBox">
                     <input type="email" required="">
                     <label><b>Email:</b></label>
                  </div>
                  <div class="inputBox">
                     <input type="password" required="">
                     <label><b>password:</b></label><br>
                  </div>
                  <div class="inputBox">
                     <input type="password" required="">
                     <label><b>Confirm password:</b></label><br>
                  </div>
                  <input type="submit" value="Register"><br>
                  <a class="s-login"href="{{url('Login')}}">Already have an account ?</a><a href="{{url('Login')}}" class="inner"> Sign In</a>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>