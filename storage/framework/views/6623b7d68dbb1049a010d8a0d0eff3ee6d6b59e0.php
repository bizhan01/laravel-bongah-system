<?php $__env->startSection('content'); ?>
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
				<div class="alert alert-success-fill alert-dismissible fade in" role="alert">
					<center><br>
					<form action = "/updateUserStatus/<?php echo $user[0]->id; ?>" method ="post" enctype="multipart/form-data" >
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
						<input type="hidden" name="name" value="<?php echo $user[0]->name; ?>">
						<input type="hidden" name="lastName" value="<?php echo $user[0]->lastName; ?>">
						<input type="hidden" name="phone" value="<?php echo $user[0]->phone; ?>">
						<input type="hidden" name="email" value="<?php echo $user[0]->email; ?>">
						<input type="hidden" name="password" value="<?php echo $user[0]->password; ?>">
						<input type="hidden" name="type" value="<?php echo $user[0]->type; ?>">
						<input type="hidden" name="address" value="<?php echo $user[0]->address; ?>">
						<input type="hidden" name="number" value="<?php echo $user[0]->phone; ?>">
						<input type="hidden" name="status" value="1">
						<input type="hidden" name="profileImage" value="<?php echo $user[0]->profileImage; ?>">
            <img style="height: 70px; border-radius: 50%" src="/UploadedImages/<?php echo $user[0]->profileImage; ?>" alt="" /><br>
						<h3><?php echo $user[0]->name; ?></h3>
						<strong>آیا مطمین استید کاربر فوق دوباره فعال سازی شود؟</strong><br></br>
						<input type="submit" name="submit" value="فعال سازی مجدد" class="btn btn-rounded btn-info">
					</form>
					<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</center>
				</div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>