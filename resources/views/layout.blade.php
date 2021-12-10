
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>@yield('title') | BlueForceTech Interview Test Assignment</title>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="css/style.css">

@yield('styles')
@yield('scripts')

<!--[if lt IE 9]>
				<script src="js/html5shiv.min.js"></script>
				<script src="js/respond.min.js"></script>
		<![endif]-->
		
</head>
<body>

<div class="main-wrapper home">


<header class="header{{$bannerClass}}">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="{{url('/')}}" class="navbar-brand logo">
<img src="img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="{{url('/')}}" class="menu-logo">
<img src="img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="active"><a href="{{url('/')}}">HOME</a></li>
@if(!is_null($user) && $user->role == "admin")
<li class="has-submenu">
<a href="">ADMIN <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="{{url('dashboard')}}">Dashboard</a></li>
<li><a href="{{url('appointments')}}">Appointments</a></li>
<li><a href="{{url('users')}}">Users</a></li>
</ul>
</li>
@endif
<li class=""><a href="{{url('about')}}">ABOUT</a></li>
<li class=""><a href="{{url('faq')}}">FAQ</a></li>
<li class="searchbar">
<i class="fa fa-search" aria-hidden="true"></i>
<div class="togglesearch" style="display: none;">
<form>
<div class="input-group">
<input type="text" class="form-control">
<div class="input-group-append">
<button type="submit" class="btn btn-primary">search</button>
</div>
</div>
</form>
</div>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li><a href="login.html">Log in</a></li>
<li><a href="register.html" class="login-btn">Signup </a></li>
<li class="lang-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/flags/en.png" alt="Lang"> EN</a>
<div class="dropdown-menu">
<a href="javascript:void(0);" class="dropdown-item">
<img src="img/flags/en.png" alt="" height="16"> EN
</a>
</div>
</li>
<li class="course-amt">
<a href="courses.html" class="user-circle"><img src="img/course.png" width="22" alt=""></a>
<a href="courses.html" class="course">
<span>Courses</span>
<p>$200</p>
</a>
</li>
</ul>
</nav>
</header>

 <!--------- Session notifications-------------->
        	<?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals['okays'] as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }
              }
              
             ?> 

                 @if($pop != "" && $val != "")
                   @include('session-status',['pop' => $pop, 'val' => $val])
                 @endif
        	<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif 
					 
				@yield('content')
				

<footer class="footer">
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-about">
<h2 class="footer-title">ABOUT DreamsCLG</h2>
<div class="footer-about-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris </p>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">POPULAR COURSES</h2>
<ul>
<li><a href="courses.html">Development</a></li>
<li><a href="courses.html">Business</a></li>
<li><a href="courses.html">IT & Software</a></li>
<li><a href="courses.html">Office Productivity</a></li>
<li><a href="courses.html">Personal Development</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">SUPPORT</h2>
<ul>
<li><a href="booking.html">Booking</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="reviews.html">Reviews</a></li>
<li><a href="favourites.html">Favourites </a></li>
<li><a href="college.html">College</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-contact">
<h2 class="footer-title">NEWSLETTER</h2>
<p> Sign Up to Our Newsletter to Get Latest Updates & Services</p>
<div class="my-3 footer-newsletter">
<form class="input-group">
<input type="email" placeholder="Enter Your Email">
<div>
<button class="btn btn-newsletter" type="submit"><i class="fa fa-paper-plane text-white" aria-hidden="true"></i></button>
</div>
</form>
</div>
</div>

</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container">

<div class="copyright">
<div class="row">
<div class="col-md-4 col-lg-4">
<div class="copyright-text">
<p class="mb-0">© {{date("Y")}} All Rights Reserved</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="copyright-text center-text">
<p class="mb-0"><a href="{{url('terms')}}">Terms and Conditions</a> - <a href="{{url('privacy')}}">Privacy Policy</a></p>
</div>
</div>
<div class="col-md-2 col-lg-4 right-text">
<div class="social-icon">
<ul>
<li><a href="javascript:void(0)" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
<li><a href="javascript:void(0)" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
<li><a href="javascript:void(0)" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
<li><a href="javascript:void(0)" class="icon" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
</ul>
</div>
</div>
</div>
</div>

</div>
</div>

</footer>

</div>


<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="js/slick.js"></script>

<script src="js/script.js"></script>
</body>
</html>