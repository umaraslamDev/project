<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/travely.css">
      <title>Reset Password</title>
   </head>
   <body>
      <div class="home container">
         <div class="row align-items-center text-center innercontainer">
            <div class="col-12 text-center">
               <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-10 col-10 mx-auto text-center box-shadow">
                     <ul>
                        <a href="{{url('login')}}" >Sign In</a>/
                        <a href="{{url('register')}}" > Sign up</a>
                     </ul>
                     <div class="box">
                        <h2 class="web-name">Travely</h2>
                        <form action="{{url('Home')}}" name="myForm" onsubmit="return validateForm()">
                           <div class="inputBox">
                              <input type="password" name="password">
                              <label><b>New password:</b></label><br><span class="text-danger" id="password"></span>
                           </div>
                           <div class="inputBox">
                              <input type="password" name="confirmpassword">
                              <label><b>Confirm password:</b></label><span class="text-danger" id="confirmpassword"></span><br>
                           </div>
                           <input type="submit" value="Save"><br>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
   </body>
</html>