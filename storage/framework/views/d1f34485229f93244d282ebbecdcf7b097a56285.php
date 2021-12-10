
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title><?php echo $__env->yieldContent('title'); ?> | BlueForceTech Interview Test Assignment</title>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="css/style.css">

<!--[if lt IE 9]>
				<script src="js/html5shiv.min.js"></script>
				<script src="js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper home">


<header class="header min-header">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="index.html" class="navbar-brand logo">
<img src="img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index.html" class="menu-logo">
<img src="img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="active"><a href="index.html">HOME</a></li>
<li class="has-submenu">
<a href="">INSTRUCTORS <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="instructor-dashboard.html">Instructors Dashboard</a></li>
<li><a href="courses.html">Courses</a></li>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="schedule-timings.html">Schedule Timing</a></li>
<li><a href="my-student.html">Students List</a></li>
<li><a href="student-profile.html">Students Profile</a></li>
<li><a href="chat-instructor.html">Chat</a></li>
<li><a href="invoices.html">Invoices</a></li>
<li><a href="instructor-profile-settings.html">Profile Settings</a></li>
<li><a href="reviews.html">Reviews</a></li>
<li><a href="instructor-register.html">Instructor Register</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="">STUDENTS <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="has-submenu">
<a href="#">Instructors</a>
<ul class="submenu">
<li><a href="map-grid.html">Map Grid</a></li>
<li><a href="map-list.html">Map List</a></li>
</ul>
</li>
<li><a href="search.html">Search Instructor</a></li>
<li><a href="instructor-profile.html">Instructor Profile</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="checkout.html">Checkout</a></li>
<li><a href="booking-success.html">Booking Success</a></li>
<li><a href="student-dashboard.html">Student Dashboard</a></li>
<li><a href="favourites.html">Favourites</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="profile-settings.html">Profile Settings</a></li>
<li><a href="change-password.html">Change Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="">PAGES <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="voice-call.html">Voice Call</a></li>
<li><a href="video-call.html">Video Call</a></li>
<li><a href="search.html">Search Instrctors</a></li>
<li><a href="calendar.html">Calendar</a></li>
<li><a href="components.html">Components</a></li>
<li class="has-submenu">
<a href="invoices.html">Invoices</a>
<ul class="submenu">
<li><a href="invoices.html">Invoices</a></li>
<li><a href="invoice-view.html">Invoice View</a></li>
</ul>
</li>
<li><a href="blank-page.html">Starter Page</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="">BLOG <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
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


<section class="section home-banner row-middle">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-7">
<div class="banner-content">
<p>DreamsCLG</p>
<h1>Achieve Your Dreams.</h1>
<h1>Book your Course.</h1>
<div class="btn-item">
<a class="btn get-btn" href="courses.html">Get Started</a>
<a class="btn courses-btn" href="courses.html">All Courses</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section college">
<div class="container">
<div class="row">
<div class="col-12 col-md-7 mx-auto">
<div class="section-header text-center">
<h5>Top Colleges</h5>
<h2 class="header-title">DISCOVER OUR COLLEGES</h2>
</div>
</div>
<div class="col-md-12">
<div class="college-slider slider">

<div class="services-item">
<div class="img-part">
<img src="img/college/college-01.png" class="img-fluid" alt="">
</div>
<div class="content-part">
<div class="content-text">
<h3>Imperial College London</h3>
<h4 class="title">65 Courses</h4>
</div>
</div>
</div>


<div class="services-item">
<div class="img-part">
<img src="img/college/college-02.png" class="img-fluid" alt="">
</div>
<div class="content-part">
<div class="content-text">
<h3>King's College London</h3>
<h4 class="title">15 Courses</h4>
</div>
</div>
</div>


<div class="services-item">
<div class="img-part">
<img src="img/college/college-01.png" class="img-fluid" alt="">
</div>
<div class="content-part">
<div class="content-text">
<h3>London Business School</h3>
<h4 class="title">40 Courses</h4>
</div>
</div>
</div>


<div class="services-item">
<div class="img-part">
<img src="img/college/college-02.png" class="img-fluid" alt="">
</div>
<div class="content-part">
<div class="content-text">
<h3>Imperial College London</h3>
<h4 class="title">65 Courses</h4>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="clg see-all text-center">
<a href="college.html" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a>
</div>
</div>
</div>


<div class="clg-course">
<div class="row">
<div class="col-12 col-md-7 mx-auto">
<div class="section-header text-center">
<h5>Latest Course</h5>
<h2 class="header-title">WE PROVIDE BEST COURSES</h2>
</div>
</div>
</div>
<div class="row">

<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-01.jpg" alt="" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Electrical Engineering</a></h2>
<p>Technology / Space / Electrical</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-02.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Computer Engineering</a></h2>
<p>Technology / Space / Computer</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-03.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Construction Design</a></h2>
<p>Technology / Space / Construction</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-04.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Aerospace Engineering</a></h2>
<p>Technology / Space / Aerospace</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-05.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Architectural Design</a></h2>
<p>Technology / Space / Architecture</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-06.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Bachelor of Fine Arts </a></h2>
<p>Technology / Space / Arts</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-07.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Business Management</a></h2>
<p>Technology / College / Business</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
 <p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="course-section">
<div class="course-top">
<div class="course-img">
<a href="course-details.html"><img src="img/courses/course-08.jpg" alt="image" class="img-fluid"></a>
</div>
<div class="course-text d-flex justify-content-between align-items-center">
<div class="left">3.2</div>
<div class="right">$40.00</div>
</div>
<div class="course-user">
<img src="img/instructors/instructor-thumb-01.jpg" alt="" class="img-fluid">
</div>
</div>
<div class="course-content">
<h5>Imperial College London</h5>
<h2><a href="course-details.html">Electrical Engineering</a></h2>
<p>Technology / Space / Electrical</p>
<div class="d-flex align-items-center justify-content-between course-slots">
<div class="slot">
<p>Total Seats</p>
<h5>200</h5>
</div>
<div class="slot">
<p>Available</p>
<h5>100</h5>
</div>
<div class="slot">
<p>Duration</p>
<h5>6 Months</h5>
</div>
</div>
<div class="text-center">
<a href="course-details.html" class="btn course-btn">Book Now</a>
</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-12">
<div class="see-all  text-center">
<a href="courses.html" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section student">
<div class="container">
<div class="row">
<div class="col-md-10 mx-auto">
<h5>We Are Best</h5>
<h3>5500+ STUDENTS TRUSTED COURSES</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam, quised nostrud exercitation. Duis aute irure dolor in reprehen derit in voluptate </p>
<div class="button"><a href="courses.html" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a></div>
</div>
</div>
</div>
</section>


<section class="section instructor">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-12 col-12 mx-auto">
<div class="section-header text-center">
<h5>OUR INSTRUCTORS</h5>
<h2 class="header-title">MEET OUR EXPERT INSTUCTORS</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="instructor-slider slider">

<div class="instructor-item">
<div class="profile-box">
<div class="img-part">
<img src="img/instructors/instructor-thumb-01.jpg" class="img-fluid" alt="instructor">
</div>
<div class="profile-info">
<div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star non-checked"></i><i class="fa fa-star non-checked"></i></div>
<h3><a href="instructor-profile.html">David Lee</a></h3>
<h4>Aerospace Engineering</h4>
</div>
<div class="instructor-line"></div>
</div>
<div class="profile-detail">
<div class="row">
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-01.png" class="img-fluid" alt="college"></div>
<div><p>University of Hertfordshire</p></div>
</div>
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-02.png" class="img-fluid" alt="college"></div>
<div><h5>Expertise</h5> <p class="exp">Aerodynamics</p> </div>
</div>
</div>
<div class="d-flex justify-content-between align-items-center">
<div class="experience">Experience : 25 years</div>
<a href="booking.html" class="btn btn-read">BOOK NOW</a>
</div>
</div>
</div>


<div class="instructor-item">
<div class="profile-box">
<div class="img-part">
<img src="img/instructors/instructor-thumb-02.jpg" class="img-fluid" alt="instructor">
</div>
<div class="profile-info">
<div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star non-checked"></i><i class="fa fa-star non-checked"></i></div>
<h3><a href="instructor-profile.html">Sofia Brient</a></h3>
<h4>Aerospace Engineering</h4>
</div>
<div class="instructor-line"></div>
</div>
<div class="profile-detail">
<div class="row">
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-01.png" class="img-fluid" alt="college"></div>
<div><p>University of Hertfordshire</p></div>
</div>
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-02.png" class="img-fluid" alt="college"></div>
<div><h5>Expertise</h5> <p class="exp">Aerodynamics</p> </div>
</div>
</div>
<div class="d-flex justify-content-between align-items-center">
<div class="experience">Experience : 25 years</div>
<a href="booking.html" class="btn btn-read">BOOK NOW</a>
</div>
</div>
</div>


<div class="instructor-item">
<div class="profile-box">
<div class="img-part">
<img src="img/instructors/instructor-thumb-03.jpg" class="img-fluid" alt="instructor">
</div>
<div class="profile-info">
<div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star non-checked"></i><i class="fa fa-star non-checked"></i></div>
<h3><a href="instructor-profile.html">Darren Pennet</a></h3>
<h4>Aerospace Engineering</h4>
</div>
<div class="instructor-line"></div>
</div>
<div class="profile-detail">
<div class="row">
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-01.png" class="img-fluid" alt="college"></div>
<div><p>University of Hertfordshire</p></div>
</div>
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-02.png" class="img-fluid" alt="college"></div>
<div><h5>Expertise</h5> <p class="exp">Aerodynamics</p> </div>
</div>
</div>
<div class="d-flex justify-content-between align-items-center">
<div class="experience">Experience : 25 years</div>
<a href="booking.html" class="btn btn-read">BOOK NOW</a>
</div>
</div>
</div>


<div class="instructor-item">
<div class="profile-box">
 <div class="img-part">
<img src="img/instructors/instructor-thumb-04.jpg" class="img-fluid" alt="instructor">
</div>
<div class="profile-info">
<div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star non-checked"></i><i class="fa fa-star non-checked"></i></div>
<h3><a href="instructor-profile.html">Ruby Perrin</a></h3>
<h4>Aerospace Engineering</h4>
</div>
<div class="instructor-line"></div>
</div>
<div class="profile-detail">
<div class="row">
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-01.png" class="img-fluid" alt="college"></div>
<div><p>University of Hertfordshire</p></div>
</div>
<div class="col-6 d-flex align-items-center clg">
<div class="icon"><img src="img/icon/icon-02.png" class="img-fluid" alt="college"></div>
<div><h5>Expertise</h5> <p class="exp">Aerodynamics</p> </div>
</div>
</div>
<div class="d-flex justify-content-between align-items-center">
<div class="experience">Experience : 25 years</div>
<a href="booking.html" class="btn btn-read">BOOK NOW</a>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="see-all  text-center">
<a href="map-list.html" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a>
</div>
</div>
</div>
</div>
</section>


<section class="section register">
<div class="container">
<div class="row">
<div class="col-12 col-lg-5 col-md-7 mx-auto text-center">
<h5>Register Now</h5>
<h2 class="header-title">Get 5+ Courses Free Access on Register</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut laboreet dolore magna</p>
</div>
<div class="col-12 col-lg-12 mx-auto text-center">
<div class="reg-count d-flex justify-content-center">
<div class="count">
<span>45</span>
<p>Days</p>
</div>
<div class="count">
<span>12</span>
<p>Hrs</p>
</div>
<div class="count">
<span>36</span>
<p>Min</p>
</div>
<div class="count">
<span>36</span>
<p>Min</p>
</div>
</div>
<a href="register.html" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a>
</div>
</div>
</div>
</section>


<section class="section review">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-header text-center">
<h5>OUR REVIEWS</h5>
<h2 class="header-title">CHECK OUR STUDENTS REVIEWS</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="review-slider slider">

<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="javascript:void(0);"><img class="img-fluid" src="img/review/review-01.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3>Davis Payerf</h3>
<h5>Mechanical Engineering</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.2</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat</p>
</div>
</div>


<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="javascript:void(0);"><img class="img-fluid" src="img/review/review-01.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3>Davis Payerf</h3>
<h5>Mechanical Engineering</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.2</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat</p>
</div>
</div>


<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="javascript:void(0);"><img class="img-fluid" src="img/review/review-01.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3>Davis Payerf</h3>
<h5>Mechanical Engineering</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.2</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat</p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>


<section class="section news">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-header text-center">
<h5>OUR NEWS</h5>
<h2 class="header-title">OUR LATEST NEWS</h2>
</div>
</div>
</div>
<div class="row">

<div class="col-md-12">
<div class="news-blog d-flex">
<div class="news-img">
<img src="img/news/news-01.jpg" class="img-fluid" alt="">
</div>
<div class="d-flex align-items-center">
<div class="news-content">
<span>June 21, 2020</span>
<h2><a href="blog-details.html">While the lovely valley team work</a></h2>
<p>Event Description. A party is a gathering of people who have been invited by a host for the purposes of… </p>
</div>
<div class=""><a href="blog-details.html" class="btn btn-read">READ MORE</a></div>
</div>
</div>
</div>


<div class="col-md-12">
<div class="news-blog d-flex">
<div class="news-img">
<img src="img/news/news-02.jpg" class="img-fluid" alt="">
</div>
<div class="d-flex align-items-center">
<div class="news-content">
<span>June 21, 2020</span>
<h2><a href="blog-details.html">While the lovely valley team work</a></h2>
<p>Event Description. A party is a gathering of people who have been invited by a host for the purposes of… </p>
</div>
<div class=""><a href="blog-details.html" class="btn btn-read">READ MORE</a></div>
</div>
</div>
</div>

<div class="col-md-12">
<div class="see-all">
<a href="blog-grid.html" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a>
</div>
</div>
</div>
</div>
</section>


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
<p class="mb-0">© 2021 All Rights Reserved</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="copyright-text center-text">
<p class="mb-0"><a href="term-condition.html">Terms and Conditions</a> - <a href="privacy-policy.html">Privacy Policy</a></p>
</div>
</div>
<div class="col-md-2 col-lg-4 right-text">
<div class="social-icon">
<ul>
<li><a href="#" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
<li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
<li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
<li><a href="#" class="icon" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
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
</html><?php /**PATH C:\bkupp\lokl\repo\blueforcetest\resources\views/temp.blade.php ENDPATH**/ ?>