<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="./css/bootstrap.css">
      <link rel="stylesheet" href="./css/travely.css">
      <title>login</title>
   </head>
   <body >
      <div class="home container">
         <div class="row align-items-center text-center innercontainer">
            <div class="col-12 text-center">
               <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-10 col-10 mx-auto text-center box-shadow">
                     <ul >
                        <a  href= "{{url('login')}}" >Sign In</a>
                        <a  href="{{url('register')}}" >/ Sign up</a>
                     </ul>
                     <div class="box" >
                        <h2 style="color:#f9be37" >Travely</h2>
                        <form action="{{url('resetPassword')}}" >
                           <div class="inputBox" style="position: relative;">
                              <input  type="text" id="number"   required>
                              <label><b>Security Code:</b></label>
                           </div>
                           <input type="submit"  class="btn btn-primary" value="Submit"><br>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>