<?php
$bannerClass = "  min-header";
?>

@extends('layout')

@section('title',"Welcome")

@section('content')
 <section class="section home-banner row-middle">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-7">
<div class="banner-content">
<h1>Achieve Your Goals.</h1>
<h1>Book your appointment NOW.</h1>
<div class="btn-item">
<a id="" class="btn get-btn" href="javascript:void(0)">Book appointment</a>
<a class="btn courses-btn" href="{{url('about')}}">Learn more</a>
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
<h5>Top Activities</h5>
<h2 class="header-title">WHAT WE CAN DURING SESSIONS</h2>
</div>
</div>
<div class="col-md-12">
<div class="college-slider slider">
<?php
$activities = [
['img' => "img/activities/college-02.png",'title' => "Build backend API",'desc' => "Develop backend API and business logic using Laravel or Node.js",],
['img' => "img/activities/college-01.png",'title' => "Build frontend GUI",'desc' => "Design web application UI using Bootstrap or React + Material UI",],
['img' => "img/activities/college-02.png",'title' => "Build mobile app",'desc' => "Develop mobile apps for Android and iOS using React Native",],
['img' => "img/activities/college-01.png",'title' => "Build backend API",'desc' => "Write backend coode in Laravel or Node.js",],
['img' => "img/activities/college-02.png",'title' => "Build backend API",'desc' => "Write backend coode in Laravel or Node.js",],
];

foreach($activities as $a)
{
?>
<div class="services-item">
<div class="img-part">
<img src="{{$a['img']}}" class="img-fluid" alt="{{$a['title']}}">
</div>
<div class="content-part">
<div class="content-text">
<h3>{{$a['title']}}</h3>
<h4 class="title">{{$a['desc']}}</h4>
</div>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="clg see-all text-center">
<a href="javascript:void(0)" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a>
</div>
</div>
</div>

</div>
</section>

<section class="section student">
<div class="container">
<div class="row">
<div class="col-md-10 mx-auto">
<h5>I'm Very Good</h5>
<h3>5500+ SATISFIED TRUSTED CLIENTS</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam, quised nostrud exercitation. Duis aute irure dolor in reprehen derit in voluptate </p>
<div class="button"><a href="javascript:void(0)" class="btn all-btn">View all <i class="fas fa-caret-right right-arrow"></i></a></div>
</div>
</div>
</div>
</section>
@stop
