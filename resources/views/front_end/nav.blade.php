<!DOCTYPE html>
<html lang="en">
   <div class="loader" ></div>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Travely</title>
      <link rel="stylesheet" href="{{ URL::asset('./css/travelyHeader.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('./css/travelyFooter.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('./css/icomoon.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('./css/animate.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('./css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('./css/travelyindexContent.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('./css/packages.css') }}">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
      <script src="{{ URL::asset('./js/jquery.min.js') }}"></script>
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Popper JS -->

      <script src="{{ URL::asset('./js/bootstrap.js') }}"></script>
      <script src="{{ URL::asset('./js/bootstrap.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <!-- <base href="./css/"> -->
      <style>
         .loader {
         position: fixed;
         left: 0px;
         top: 0px;
         width: 100%;
         height: 100%;
         z-index: 9999;
         background: url('./img/238.gif') no-repeat center center;
         background-color: #fff;
         }
      </style>
   </head>
   <body  id="scroll">
      <!-- Header -->
      <header id="navbar">
             <a href="{{url('Home')}}" class="navbar-brand my-navlink" style="text-decoration:none;color:#fff!important;">Travely</a>
         <div class="menu-toggle" id="scrollnavbar">

         </div>
         <nav class="d-n ftco-navbar-light smallnavbar largenavbar">
            <ul class="ml-auto navmenu scroll_y">
                  <li style="list-style: none!important;">
                     <ul>
                        <li class="nav-item anchor"><a class="my-navlink" href="{{url('Home')}}" >HOME</a></li>
                        <li class="nav-item anchor"><a class="my-navlink" href="{{url('about')}}" >ABOUT</a></li>
                        <li class="nav-item anchor"><a class="my-navlink" href="{{url('genericPackages')}}"  >PACKAGES</a></li>
                        <li class="nav-item anchor"><a class="my-navlink" href="{{url('contact')}}">CONTACT</a></li>
                        <li class="nav-item cart"><a class="my-navlink" href="{{route('cart.index')}}"><i class="fa fa-shopping-cart" style="font-size:28px;position: relative;top:-3px;"></i>&nbsp<span>{{Cart::count()}}</span></a></li>
                        <li>
                            @guest
                              <li class="nav-item">
                                 <a class="nav-link"  style="font-size: 25px;margin-right: 10px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                            @if (Route::has('register'))
                              <li class="nav-item">
                                 <a class="nav-link"  style="font-size: 25px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                              @endif
                              @else
                              <li class="nav-item anchor dropdown">
                                <a style="position: relative;top:-13px;" class="my-navlink nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" style="top: 60%;" >
                                  <!-- <a class="dropdown-item" href="#">Reset Password</a>
                                  <div class="dropdown-divider"></div> -->
                                   <a  class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                   @csrf
                                                </form>
                                </div>
                              </li>
                     
                              @endguest
                        </li> 
                     </ul>
                  </li>
            </ul>

         </nav> 

<!-- <nav class="navbar navbar-expand-lg navbar-dark w-100 mynavbar mb-0" >
         <a href="{{url('Home')}}" class="navbar-brand logo" style="text-decoration:none;color:#fff!important;">Travely</a>
   <nav class="navbar navbar-expand-lg navbar-dark ml-auto">      
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navmenu ml-auto">
      <li class="nav-item anchor">
        <a class="nav-link my-navlink" href="{{url('Home')}}" >HOME</a>
      </li>
      <li class="nav-item anchor" >
        <a class="nav-link my-navlink" href="{{url('about')}}" >ABOUT</a>
      </li>
      <li class="nav-item anchor">
        <a class="nav-link my-navlink" href="{{url('genericPackages')}}"  >PACKAGES</a>
      </li>
      <li class="nav-item anchor">
        <a class="nav-link my-navlink" href="{{url('contact')}}">CONTACT</a>
      </li>
      <li class="nav-item anchor">
        <a class="nav-link my-navlink cart" href="{{route('cart.index')}}"><span style="font-size: 28px;position: relative;top:-6px;"><i class="fa fa-shopping-cart"></i></span> <span style="position: relative;top:-6px;">{{Cart::count()}}</span></a>
      </li>
        @guest
                  <li class="nav-item">
                     <a class="nav-link"  style="font-size: 25px;margin-right: 10px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                     <a class="nav-link"  style="font-size: 25px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @endif
                  @else
      <li class="nav-item anchor dropdown">
        <a class="my-navlink nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Reset Password</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
        </div>
      </li>
        @endguest
    </ul>
  </div>
</nav>
</nav>
 -->



      </header>
      <!-- Text -->
      <span class="text-center pic-text">
         <h1 class="mb-4 inner-text"><span class="white">Discover</span> <br><span class="white">A new Place</span></h1>
         <p class="white">Find great places to stay, eat, shop, or visit from local experts</p>
         
      </span>
      <!-- Content -->
      @yield('customPackage')
      @yield('hotels')
      @yield('flights')
      @yield('rentals')
      @yield('insurances')
      <!-- Home -->
      @yield('travelagency')
      @yield('content')
      <!-- Footer -->
      <div class="footer-wrapper">
         <div class="top-img"></div>
         <div class="container-fluid">
            <div class="footer-social-icons">
               <ul>
                  <li><a href="{!! url('http://www.facebook.com') !!}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="{!! url('http://www.twitter.com') !!}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="{!! url('http://www.whatsapp.com') !!}" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                  <li><a href="{!! url('http://www.instagram.com') !!}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="{!! url('http://www.linkedin.com') !!}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="{!! url('http://www.youtube.com') !!}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="{!! url('http://www.googlePlus.com') !!}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="{!! url('http://www.skype.com') !!}" target="_blank"><i class="fa fa-skype"></i></a></li>
                  <li><a href="{!! url('http://www.wechat.com') !!}" target="_blank"><i class="fa fa-wechat"></i></a></li>
                  <li><a href="{!! url('http://www.pinterest.com') !!}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
               </ul>
            </div>
            <div class="footer-mid-part">
               <div class="row">
                  <div class="col-lg-4 col-md-10 col-sm-10 col-10 mx-auto">
                     <div class="footer-section-one">
                        <div class="footer-heading">
                           <h2>Contact Us</h2>
                        </div>
                        <div class="footer-contact-box">
                           <div class="footer-contact-icon"><i class="fa fa-map-marker"></i></div>
                           <div class="footer-contact-text">
                              <p>Address: 230 A Revinue Society Johar Town Lahore</p>
                           </div>
                           <div class="clr"></div>
                        </div>
                        <div class="footer-contact-box">
                           <div class="footer-contact-icon"><i class="fa fa-phone"></i></div>
                           <div class="footer-contact-text">
                              <p><a href="tel:+92-3456058310">+92-3456058310</a></p>
                           </div>
                           <div class="clr"></div>
                        </div>
                        <div class="footer-contact-box">
                           <div class="footer-contact-icon"><i class="fa fa-fax"></i></div>
                           <div class="footer-contact-text">
                              <p><a href="fax:+92-3456058310">+92-3456058310</a></p>
                           </div>
                           <div class="clr"></div>
                        </div>
                        <div class="footer-contact-box">
                           <div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
                           <div class="footer-contact-text">
                              <p><a href="mailto:info@travely.com">info@travely.com</a></p>
                           </div>
                           <div class="clr"></div>
                        </div>
                        <div class="footer-contact-box">
                           <div class="footer-contact-icon"><i class="fa fa-globe"></i></div>
                           <div class="footer-contact-text">
                              <p><a href="http://www.travely.com">http://www.travely.com</a></p>
                           </div>
                           <div class="clr"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-10 col-sm-10 col-10 mx-auto">
                     <div class="footer-section-two">
                        <div class="footer-heading">
                           <h2>Quick Link</h2>
                        </div>
                        <div class="footer-link">
                           <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Airlines</a></li>
                              <li><a href="#">Accomodations</a></li>
                              <li><a href="#">Rentals</a></li>
                              <li><a href="#">Insurances</a></li>
                              <li><a href="#">abc</a></li>
                              <li><a href="#">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-10 col-sm-10 col-10 mx-auto">
                     <div class="footer-section-three">
                        <div class="footer-heading">
                           <h2>Get in touch</h2>
                        </div>
                        <div class="footer-form">
                           <form method="post" action="#">
                              <div class="footer-form-box">
                                 <input type="text" class="footer-form-style" placeholder="Name">
                              </div>
                              <div class="footer-form-box">
                                 <input type="text" class="footer-form-style" placeholder="Email">
                              </div>
                              <div class="footer-form-box">
                                 <input type="text" class="footer-form-style" placeholder="Phone Number">
                              </div>
                              <div class="footer-form-box">
                                 <input type="submit" class="footer-form-submit-style" value="SUBMIT" ">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <p>Copyright 2019 Travely All Rights Reserved</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $(document).ready(function(){
           $('.menu-toggle').click(function(){
             $('.menu-toggle').toggleClass('active')
             $('nav').toggleClass('active')
           })
         })
         
         
      </script>
      <script>
         window.onload = function() 
         {
             //display loader on page load 
             $('.loader').fadeOut();
         }
         
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
         var url = window.location;
         var element = $('nav ul li ul li a').filter(function() {
         return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
         if (element.is('li')) {
            element.addClass('active').parent().parent('li').addClass('active')
         }
         });
         
         
      </script>
      <script>
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
           if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
             document.getElementById("navbar").style.background = "#000";
             document.getElementById("navbar").style.top = "0px";
             document.getElementById("navbar").style.transition = "all ease-in-out 0.5s";
           } else {
             document.getElementById("navbar").style.background = "transparent";
             document.getElementById("navbar").style.top = "20px";
             document.getElementById("navbar").style.transition = "all ease-in-out 0.5s";
           }
         }
      </script>
      <script>
         function hideLoader() {
             $('#loading').hide();
         }
         
         $(window).ready(hideLoader);
         
         // Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
         setTimeout(hideLoader, 20 * 1000);
         
                   $(document).ready(function(){
                   $(".menu-toggle").click(function(){
                     $("#scroll").toggleClass("stopScrolling");
                   });
                 });
         
      </script>
   </body>
</html>