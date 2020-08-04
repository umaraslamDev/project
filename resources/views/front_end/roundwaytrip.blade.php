<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Travely</title>
      <link rel="stylesheet" href="css/travely.css">
      <link rel="stylesheet" href="css/bootstrap.css">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-5 box" >
               <div class="row mx-auto">
                  <div class="col-md-12 mx-auto text-center">
                     <h2>ROUND TRIP</h2>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12 mx-auto inputBox">
                     <input style="width:100%" type="text" required="">
                     <label ><b>Departure</b></label>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12 mx-auto inputBox">
                     <input style="width:100%" type="text" required="">
                     <label ><b>Arrival</b></label>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12">
                     <div class="row ">
                        <div class="col-md-6 inputBox">
                           <input style="width:100%" type="date" required="">
                           <label ><b>Departure Date</b></label>
                        </div>
                        <div class="col-md-6 inputBox">
                           <input style="width:100%" type="date" required="">
                           <label ><b>Arrival Date</b></label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-6 inputBox">
                     <input style="width:100%" type="number" min="0" max="25" required="">
                     <label ><b>Adults</b></label>
                  </div>
                  <div class="col-md-6 inputBox">
                     <input style="width:100%" type="number" min="0" max="25" required="">
                     <label ><b>Children</b></label>
                  </div>
               </div>
               <div class="row my-3">
                  <div class="col-lg-12 inputBox">
                     <input style="width:100%" type="dropdown" required="">
                     <label ><b>Class</b></label>
                  </div>
               </div>
               <div class="row mx-auto">
                  <div class="col-md-12 mx-auto text-center">
                     <input style="width:100%" type="submit" value="Search Flight">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>