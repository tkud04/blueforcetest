
@extends('layout')

@section('title',"Profile")

@section('content')

@include('page-header',['title' => "Profile"])


<div class="content">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="card">
<div class="card-body pt-0">

<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Personal Detail</span></a>
</li>
</ul>
</nav>


<div class="tab-content pt-0">

<div id="pat_appointments" class="tab-pane fade show active">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Instructor</th>
<th>Appt Date</th>
<th>Booking Date</th>
<th>Amount</th>
<th>Follow Up</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="instructor-profile.html" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="instructor-profile.html">Me <span>Instructor</span></a>
</h2>
</td>
<td>14 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
<td>12 Nov 2019</td>
<td>$160</td>
<td>16 Nov 2019</td>
<td><span class="badge badge-pill bg-success-light">Confirm</span></td>
<td class="text-right">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="instructor-profile.html" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="instructor-profile.html">Me <span>Instructor</span></a>
</h2>
</td>
<td>12 Nov 2019 <span class="d-block text-info">8.00 PM</span></td>
<td>12 Nov 2019</td>
<td>$250</td>
<td>14 Nov 2019</td>
<td><span class="badge badge-pill bg-success-light">Confirm</span></td>
<td class="text-right">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="instructor-profile.html" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="instructor-profile.html">Me <span>Instructor</span></a>
</h2>
</td>
<td>11 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
<td>10 Nov 2019</td>
<td>$400</td>
<td>13 Nov 2019</td>
<td><span class="badge badge-pill bg-danger-light">Cancelled</span></td>
<td class="text-right">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="instructor-profile.html" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="instructor-profile.html">Me <span>Instructor</span></a>
</h2>
</td>
<td>10 Nov 2019 <span class="d-block text-info">3.00 PM</span></td>
<td>10 Nov 2019</td>
<td>$350</td>
<td>12 Nov 2019</td>
<td><span class="badge badge-pill bg-warning-light">Pending</span></td>
<td class="text-right">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
<i class="fas fa-print"></i> Print
</a>
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="far fa-eye"></i> View
</a>
</div>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>


<div id="pat_medical_records" class="tab-pane fade">
<div class="card card-table mb-0">
<div class="card-body">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="img/login-banner.jpg" class="img-fluid" alt="Sign up">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>View your profile</h3>
</div>

 <form method="post" action="{{url('profile')}}" id="p-form">
 {!! csrf_field() !!}
<div class="row">

<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="fname" id="profile-fname" value="{{$user->fname}}" placeholder="First name">
<label class="focus-label">First Name</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating"  name="lname" id="profile-lname" value="{{$user->lname}}" placeholder="Last name">
<label class="focus-label">Last Name</label>
</div>
</div>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="{{$user->username}}" readonly>
<label class="focus-label">Username</label>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" id="p-form-btn">Submit</button>

</form>

</div>
</div>
</div>

</div>
</div>
</div>


</div>

</div>
</div>
</div>
</div>
</div>
</div>

 	
@stop