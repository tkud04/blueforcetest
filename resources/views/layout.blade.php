
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

<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

	
	<!-- custom js -->
	<script src="{{asset('js/helpers.js').'?ver='.rand(56,99999)}}"></script>
	<script src="{{asset('js/mmm.js').'?ver='.rand(56,99999)}}"></script>
	
  	<!--SweetAlert--> 
    <link href="{{asset('lib/sweet-alert/sweetalert2.css')}}" rel="stylesheet">
    <script src="{{asset('lib/sweet-alert/sweetalert2.js')}}"></script>

@yield('styles')
@yield('scripts')

<!--[if lt IE 9]>
				<script src="js/html5shiv.min.js"></script>
				<script src="js/respond.min.js"></script>
		<![endif]-->
		
</head>
<body>

<div class="main-wrapper home">

<?php
if(!isset($bannerClass)) $bannerClass = "";
?>

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
<img src="img/logo.png" style="width: 100px; height: 50px" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="{{url('/')}}" class="menu-logo">
<img src="img/logo.png" style="width: 100px; height: 50px" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="active"><a href="{{url('/')}}">HOME</a></li>
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
@if(!is_null($user))
@if($user->role == "admin")
<li class="has-submenu">
<a href="">ADMIN <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="{{url('dashboard')}}">Dashboard</a></li>
<li><a href="{{url('appointments')}}">Appointments</a></li>
<li><a href="{{url('users')}}">Users</a></li>
</ul>
</li>
@else
<li class="has-submenu">
<a href="">MORE <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="{{url('dashboard')}}">Dashboard</a></li>
<li><a href="{{url('book-appointments')}}">Book an Appointment</a></li>
</ul>
</li>
@endif
@endif
</ul>
</div>
<ul class="nav header-navbar-rht">
<li><a href="{{url('login')}}">Log in</a></li>
<li><a href="{{url('signup')}}" class="login-btn">Signup </a></li>
<li class="lang-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/flags/en.png" alt="Lang"> EN</a>
<div class="dropdown-menu">
<a href="javascript:void(0);" class="dropdown-item">
<img src="img/flags/en.png" alt="" height="16"> EN
</a>
</div>
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
<h2 class="footer-title">ABOUT Me</h2>
<div class="footer-about-content">
<p>I'm an enthusiastic and goal-oriented individuual with a knack for solving challenging problems and making a difference in this world. A full-stack software developer specializing in websites and mobile apps.</p>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">POPULAR Activities</h2>
<ul>
<?php
$activities = [
['title' => "Build backend API",'desc' => "Develop backend API and business logic using Laravel or Node.js",],
['title' => "Build frontend GUI",'desc' => "Design web application UI using Bootstrap or React + Material UI",],
['title' => "Build mobile app",'desc' => "Develop mobile apps for Android and iOS using React Native",],
['title' => "Build backend API",'desc' => "Write backend coode in Laravel or Node.js",],
['title' => "Build backend API",'desc' => "Write backend coode in Laravel or Node.js",],
];

foreach($activities as $a)
{
?>
<li><a href="javascript:void(0)">{{$a['title']}}</a></li>
<?php
}
?>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">SUPPORT</h2>
<ul>
<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
<li><a href="{{url('terms')}}">Terms and Conditions</a></li>
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


<script src="js/slick.js"></script>

<script src="js/script.js"></script>
</body>
</html>