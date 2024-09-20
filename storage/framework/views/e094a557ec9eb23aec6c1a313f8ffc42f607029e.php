<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست کاربران</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">افزودن کاربر جدید</a></li>
			<li class="breadcrumb-item"><a href="">لیست کاربران</a></li>
			<li class="breadcrumb-item active">کاربران مسدود شده</li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>آقا/خانم</th>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<td>تلفن</td>
							<td>آدرس فعلی</td>
							<td>ایمیل آدرس</td>
							<td>عملیات</td>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="<?php echo e(asset('UploadedImages/').'/'.$user->profileImage); ?>"  style="width: 100% !important; ">
								</td>
								<td><?php echo e($user->created_at); ?></td>
								<td><?php echo e($user->name); ?></td>
								<td><?php echo e($user->lastName); ?></td>
								<td dir="ltr"><?php echo e($user->phone); ?></td>
								<td><?php echo e($user->address); ?></td>
								<td><?php echo e($user->email); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('editUser').'/' .$user->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href = 'blockUser/<?php echo e($user->id); ?>'> <i class="fa fa-ban text-warning"></i></a>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteUser').'/' .$user->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
										<i class="ti ti-trash text-danger"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>