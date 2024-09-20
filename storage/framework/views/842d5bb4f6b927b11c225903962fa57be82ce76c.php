<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی مشتریان</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی مشتریان</a></li>
			<li class="breadcrumb-item"><a href="">افزودن مشتری جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table  class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>اسم</th>
							<th>اسم پدر /همسر</th>
							<th>نوع مشتری</th>
							<th>کد ملی</th>
							<th>تلفن</th>
							<th>آدرس فعلی</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($row+1); ?></td>
								<td><?php echo e($customer->prefix); ?> <?php echo e($customer->name); ?></td>
								<td><?php echo e($customer->father_name); ?></td>
								<td>
									<?php if($customer->customer_type == 1): ?>
										واگذار کننده
									<?php else: ?>
										گيرنده
									<?php endif; ?>
								</td>
						  	<td><?php echo e($customer->national_code); ?></td>
								<td dir="ltr"><?php echo e($customer->phone); ?></td>
								<td><?php echo e($customer->address); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('editCustomer').'/' .$customer->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#archive_<?php echo e($customer->id); ?>" title="بایگانی" data-toggle='modal'>
										<i class="ti ti-archive text-info"></i>
									</a>
	                <?php echo $__env->make('customer.archive', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteCustomer').'/' .$customer->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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