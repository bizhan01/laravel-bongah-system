<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>قراردادهای بایگانی شده</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی قراردادها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن قرارداد جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>اسکن قرارداد</th>
							<th>اسم مشتری</th>
							<th>کد فایل</th>
							<th>نوع قرارداد</th>
							<th>قیمت</th>
							<th>پول پیش</th>
							<th>کرایه</th>
							<th>کد قرارداد</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($row+1); ?></td>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="<?php echo e(asset('UploadedImages/contracts/').'/'.$contract->contract_scan); ?>"  style="width: 100% !important; ">
								</td>
								<td>
									<a href="<?php echo e(url('customerInfo').'/' .$contract->customer_id); ?>" title="اطلاعات مشتری" >
										<?php echo e($contract->customer_name); ?>

									</a>
								</td>
								<td>
									<a href="<?php echo e(url('fileInfo').'/' .$contract->file_id); ?>" title="اطلاعات فایل" >
										<?php echo e($contract->file_id); ?>

									</a>
									</td>
								<td><?php echo e($contract->contract_type); ?></td>
								<td><?php echo e(number_format($contract->price)); ?> <span style="color: blue">تومان</span></td>
								<td><?php echo e(number_format($contract->advance_paid)); ?> <span style="color: blue">تومان</span></td>
								<td><?php echo e(number_format($contract->rent)); ?> <span style="color: blue">تومان</span></td>
								<td><?php echo e($contract->contract_code); ?></td>
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