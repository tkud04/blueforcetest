@extends('layout')

@section('title',"Sign up")



@section('content')

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="img/login-banner.jpg" class="img-fluid" alt="Sign up">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Create an account</h3>
</div>

 <form method="post" action="{{url('signup')}}" id="s-form">
 {!! csrf_field() !!}
<div class="row">

<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="fname" id="signup-fname" placeholder="First name">
<label class="focus-label">First Name</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating"  name="lname" id="signup-lname" placeholder="Last name">
<label class="focus-label">Last Name</label>
</div>
</div>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating"  name="username" id="signup-username" type="text" placeholder="Desired username">
<label class="focus-label">Username</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating" name="pass" id="signup-password" placeholder="Password">
<label class="focus-label">Create Password</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating" name="pass_confirmation" id="signup-password-2" placeholder="Confirm password">
<label class="focus-label">Confirm Password</label>
</div>
<div class="text-right">
<a class="forgot-link" href="{{url('login')}}">Already have an account?</a>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" id="s-form-btn">Signup</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6">
<a href="javascript:void(0)" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
</div>
<div class="col-6">
<a href="javascript:void(0)" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>

 	
@stop
