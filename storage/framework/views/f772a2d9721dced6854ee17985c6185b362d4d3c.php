<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی فایل ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی فایل ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن فایل جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
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
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						    <?php $sum=0; ?>
						<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
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
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('printFile').'/' .$file->id); ?>" title="چاپ" >
										<i class="fa fa-print text-success"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('editFile').'/' .$file->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#archive_<?php echo e($file->id); ?>" title="بایگانی" data-toggle='modal'>
										<i class="fa fa-archive text-info"></i>
									</a>
	                <?php echo $__env->make('file.archive', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteFile').'/' .$file->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
										<i class="ti ti-trash text-danger"></i>
									</a>
								</td>
							</tr>
							<?php $sum += $file->id; ?>
		          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		          <tfoot>
		            <tr>
		              <th colspan="4">جمع کل مصارف/هزینه ها در این پروژه</th>
		              <th colspan="1"><?php echo $sum; ?></th>
		            </tr>
		          </tfoot>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>