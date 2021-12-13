


<?php $__env->startSection('title',"Book Appointment"); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="css/fullcalendar.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

<script src="js/jquery-ui.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/jquery.fullcalendar.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('page-header',['title' => "Book Appointment"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content">
<div class="container-fluid">
<div class="row mb-5">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-12 col-lg-12">
<div class="login-header">
<h3>Book an appointment</h3>
</div>

 <form method="post" action="<?php echo e(url('book-appointment')); ?>" id="b-form">
 <?php echo csrf_field(); ?>


<div class="form-group form-focus">
<input type="date" class="form-control floating" name="appt_date" id="book-appt-date">
<label class="focus-label">Appointment date</label>
</div>
<div class="form-group form-focus">
<input type="number" class="form-control floating" name="hours" id="book-hours" placeholder="How many hours?">
<label class="focus-label">Session duration (hours)</label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="amount" id="book-amount" value="0" readonly>
<label class="focus-label">Amount (&#8358;)</label>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" id="b-form-btn">Submit</button>

</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\blueforcetest\resources\views/book.blade.php ENDPATH**/ ?>