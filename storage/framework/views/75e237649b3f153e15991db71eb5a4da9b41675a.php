


<?php $__env->startSection('title',"Users"); ?>

<?php $__env->startSection('scripts'); ?>
  <link href="<?php echo e(asset('lib/datatables/css/datatables.min.css')); ?>" rel="stylesheet" /> 
	
	<!-- DataTables js -->
	<script src="<?php echo e(asset('lib/datatables/js/datatables.min.js')); ?>"></script>
	 <script src="<?php echo e(asset('lib/datatables/js/datatables-init.js')); ?>"></script>
	 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('page-header',['title' => "Users"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="card">
<div class="card-body pt-0">

<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Users</a>
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
<th>Full name</th>
<th>Username</th>
<th>Role</th>
<th>Date joined</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$vu = "javascript:void(0)";

if(count($users) > 0)
{
  foreach($users as $a)
  {
	  $ad = explode(' ',$a['date']);	  
	  $ru = url('remove-user').'?xf='.$a['id'];
	  
?>
<tr>
<td>
<h2 class="table-avatar">
<a href="<?php echo e($vu); ?>" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" src="img/instructor-01.jpg" alt="User Image">
</a>
<a href="<?php echo e($vu); ?>"><?php echo e($a['fname']); ?> <span><?php echo e($a['lname']); ?></span></a>
</h2>
</td>
<td><?php echo e($a['username']); ?> </td>
<td><?php echo e($a['role']); ?> </td>
<td><?php echo e($ad[0]); ?> <span class="d-block text-info"><?php echo e($ad[1]." ".$ad[2]); ?></span></td>
<td>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\blueforcetest\resources\views/users.blade.php ENDPATH**/ ?>