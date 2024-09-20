<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی پروژه ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی پروژه ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن پروژه جدید</a></li>
			<li class="breadcrumb-item active">پروژه های تکمیل شده</li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>مالک پروژه</th>
							<th>نوع پروژه</th>
							<th>موقعیت</th>
							<th>مساحت</th>
							<th>تاریخ ساخت</th>
							<th>تاریخ تحویل</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($project->prefix); ?> <?php echo e($project->name); ?></td>
								<td><?php echo e($project->project_type); ?></td>
								<td><?php echo e($project->location); ?></td>
								<td><?php echo e($project->space); ?></td>
								<td><?php echo e($project->manufacture_date); ?></td>
								<td><?php echo e($project->delivery_date); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('projectExpense').'/' .$project->id); ?>" title="مصارف">
										<i class="ti-bar-chart-alt text-info"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('editProject').'/' .$project->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#completed_<?php echo e($project->id); ?>" title="بایگانی" data-toggle='modal'>
										<i class="fa fa-check text-success"></i>
									</a>
	                <?php echo $__env->make('project.completed', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteProject').'/' .$project->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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