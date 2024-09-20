<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی قراردادها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی قراردادها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن قرارداد جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>اسکن قرارداد</th>
							<th>تاریخ</th>
							<th>اسم مشتری</th>
							<th>کد فایل</th>
							<th>نوع قرارداد</th>
							<th>قیمت</th>
							<th>پول پیش</th>
							<th>کرایه</th>
							<th>کد قرارداد</th>
							<th>کمیسیون</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($row+1); ?></td>
								<td  style="width: 50px !important; padding: 2px;">
									<a href="<?php echo e(asset('UploadedImages/contracts/').'/'.$contract->contract_scan); ?>"><img src="<?php echo e(asset('UploadedImages/contracts/').'/'.$contract->contract_scan); ?>"  style="width: 100% !important; "></a>
								</td>
								<td><?php echo e($contract->date); ?></td>
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
								<td><?php echo e(number_format($contract->price)); ?> <span>تومان</span></td>
								<td><?php echo e(number_format($contract->advance_paid)); ?> <span>تومان</span></td>
								<td><?php echo e(number_format($contract->rent)); ?> <span>تومان</span></td>
								<td><?php echo e($contract->contract_code); ?></td>
								<td><?php echo e(number_format($contract->commission)); ?> <span>تومان</span></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('contractInfo').'/' .$contract->id); ?>" title="جزئیات">
										<i class="ti-info-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('editContract').'/' .$contract->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#archive_<?php echo e($contract->id); ?>" title="بایگانی" data-toggle='modal'>
										<i class="fa fa-archive text-info"></i>
									</a>
									<?php echo $__env->make('contract.archive', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteContract').'/' .$contract->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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