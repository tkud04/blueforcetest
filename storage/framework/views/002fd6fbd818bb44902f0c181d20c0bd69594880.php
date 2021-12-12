<?php
$su = url("signup");
?>



<?php $__env->startSection('title',"Login"); ?>


<?php $__env->startSection('content'); ?>

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
<h3>Log in</h3>
</div>

 <form method="post" action="<?php echo e(url('login')); ?>" id="l-form">
 <?php echo csrf_field(); ?>


<div class="form-group form-focus">
<input type="text" class="form-control floating" name="id" id="login-id" type="text" placeholder="Desired username">
<label class="focus-label">Username</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating" name="password" id="login-password" placeholder="Password">
<label class="focus-label">Create Password</label>
</div>
<div class="text-right">
<a class="forgot-link" href="<?php echo e(url('signup')); ?>">Don't have an account?</a>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" id="l-form-btn">Login</button>
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

 	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\blueforcetest\resources\views/login.blade.php ENDPATH**/ ?>