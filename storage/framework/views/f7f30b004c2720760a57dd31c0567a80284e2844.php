<?php if(auth()->user()->type == 1 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('superAdminDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif(auth()->user()->type == 2 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('adminDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif(auth()->user()->type == 3 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('accounterDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif(auth()->user()->type == 4 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('adviserDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
	  <?php echo $__env->make('blocked', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
