


<?php $__env->startSection('title',"Appointments"); ?>

<?php $__env->startSection('scripts'); ?>
  <link href="<?php echo e(asset('lib/datatables/css/datatables.min.css')); ?>" rel="stylesheet" /> 
	
	<!-- DataTables js -->
	<script src="<?php echo e(asset('lib/datatables/js/datatables.min.js')); ?>"></script>
	 <script src="<?php echo e(asset('lib/datatables/js/datatables-init.js')); ?>"></script>
	 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('page-header',['title' => "Appointments"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
<th>User</th>
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
	  
	  $u = $a['user'];
	  $s = $a['status']; $ss = "success";
	  if($s == "cancelled") $ss = "danger";
	  else if($s == "pending") $ss = "warning";
	  
	  $ru = url('remove-appointment').'?xf='.$a['id'];
	  
?>
<tr>
<td>
<h2 class="table-avatar">
<a href="<?php echo e($vu); ?>" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="<?php echo e($vu); ?>"><?php echo e($u['fname']); ?> <span><?php echo e($u['lname']); ?></span></a>
</h2>
</td>
<td><?php echo e($ad[0]); ?> <span class="d-block text-info"><?php echo e($ad[1]." ".$ad[2]); ?></span></td>
<td><?php echo e($bd[0]); ?> </td>
<td>&#8358;<?php echo e($amt); ?></td>
<td><span class="badge badge-pill bg-<?php echo e($ss); ?>-light"><?php echo e(ucwords($s)); ?></span></td>
<td class="text-right">
<div class="table-action">
<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
<i class="fas fa-eye"></i> View
</a>
<a href="<?php echo e($ru); ?>" class="btn btn-sm bg-danger-light">
<i class="fas fa-trash"></i> Remove
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



</div>

</div>
</div>
</div>
</div>
</div>
</div>

 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\blueforcetest\resources\views/appointments.blade.php ENDPATH**/ ?>