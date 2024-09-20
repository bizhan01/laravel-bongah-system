<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>آرشیو فایل ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی فایل ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن فایل جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>کد فایل</th>
							<th>مالک</th>
							<th>مدل فایل</th>
							<th>نوع فایل</th>
							<th>قیمت</th>
							<th>پول پیش</th>
							<th>کرایه</th>
							<th>موقعیت</th>
							<th>مساحت</th>
							<th>پارکنیگ</th>
							<th>آنسانسور</th>
							<th>طبقه</th>
							<th>تاریخ ساخت</th>
							<th>تاریخ تحویل</th>
							<th>آدرس</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($row+1); ?></td>
								<td><?php echo e($file->id); ?></td>
								<td><?php echo e($file->name); ?></td>
								<td><?php echo e($file->file_model); ?></td>
								<td><?php echo e($file->file_type); ?></td>
								<td><?php echo e($file->price); ?></td>
								<td><?php echo e($file->advance_paid); ?></td>
								<td><?php echo e($file->rent); ?></td>
								<td><?php echo e($file->location); ?></td>
								<td><?php echo e($file->space); ?></td>
								<td><?php echo e($file->parking); ?></td>
								<td><?php echo e($file->lift); ?></td>
								<td><?php echo e($file->stage); ?></td>
								<td><?php echo e($file->manufacture_date); ?></td>
								<td><?php echo e($file->delivery_date); ?></td>
								<td><?php echo e($file->address); ?></td>
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