


<?php $__env->startSection('title',"Profile"); ?>

<?php $__env->startSection('scripts'); ?>
  <link href="<?php echo e(asset('lib/datatables/css/datatables.min.css')); ?>" rel="stylesheet" /> 
	
	<!-- DataTables js -->
	<script src="<?php echo e(asset('lib/datatables/js/datatables.min.js')); ?>"></script>
	 <script src="<?php echo e(asset('lib/datatables/js/datatables-init.js')); ?>"></script>
	 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('page-header',['title' => "Profile"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
<table class="table table-hover table-center mb-0 etuk-table">
<thead>
<tr>
<th>Instructor</th>
<th>Appt Date</th>
<th>Booking Date</th>
<th>Amount</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$vu = "javascript:void(0)";

if(count($appts) > 0)
{
  foreach($appts as $a)
  {
	  $ad = explode(' ',$a['appt_date']);
	  $bd = explode(' ',$a['date']);
	  $amt = number_format($a['amount'],2);
	  
	  $s = $a['status']; $ss = "success";
	  if($s == "cancelled") $ss = "danger";
	  else if($s == "pending") $ss = "warning";
	  
?>
<tr>
<td>
<h2 class="table-avatar">
<a href="<?php echo e($vu); ?>" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="<?php echo e($vu); ?>">Me <span>Instructor</span></a>
</h2>
</td>
<td><?php echo e($ad[0]); ?> <span class="d-block text-info"><?php echo e($ad[1]." ".$ad[2]); ?></span></td>
<td><?php echo e($bd[0]); ?> </td>
<td>&#8358;<?php echo e($amt); ?></td>
<td><span class="badge badge-pill bg-<?php echo e($ss); ?>-light"><?php echo e(ucwords($s)); ?></span></td>
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
<?php
  }
}
?>

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

 <form method="post" action="<?php echo e(url('profile')); ?>" id="p-form">
 <?php echo csrf_field(); ?>

<div class="row">

<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="fname" id="profile-fname" value="<?php echo e($user->fname); ?>" placeholder="First name">
<label class="focus-label">First Name</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating"  name="lname" id="profile-lname" value="<?php echo e($user->lname); ?>" placeholder="Last name">
<label class="focus-label">Last Name</label>
</div>
</div>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="<?php echo e($user->username); ?>" readonly>
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

 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\blueforcetest\resources\views/profile.blade.php ENDPATH**/ ?>