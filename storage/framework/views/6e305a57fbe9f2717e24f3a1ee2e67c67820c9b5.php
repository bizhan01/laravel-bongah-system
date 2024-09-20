<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>یاداشت های من</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی یاداشت ها</a></li>
			<li class="breadcrumb-item"><a href="">یاداشت های کامل شده</a></li>
			<li class="breadcrumb-item active">سایر</li>
		</ol>
    <?php echo $__env->make('task.addTask', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="box box-block bg-white">
			<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> افزودن مورد جدید</a>
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable">
					<thead>
						<tr>
							<th>وضعیت</th>
							<th>عنوان</th>
							<th>توضیحات</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td>
									<?php if($task->status == 1): ?>
										<span class="btn btn-rounded btn-sm btn-danger "><li class="fa fa-spinner fa-spin fa-fw"></li></button>
									<?php else: ?>
										<span class="btn btn-rounded btn-sm btn-success fa fa-check"></span>
									<?php endif; ?>
								</td>
								<td><?php echo e($task->title); ?></td>
								<td><?php echo e($task->description); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="#status_<?php echo e($task->id); ?>" title="تغییر وضعیت" data-toggle='modal'>
										<i class="fa  fa-hourglass-half text-info"></i>
									</a>
                  <?php echo $__env->make('task.changeStatus', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

									&nbsp;&nbsp;&nbsp;
									<a href="#edit_<?php echo e($task->id); ?>" title="ویرایش" data-toggle='modal'>
										<i class="fa fa-edit text-success"></i>
									</a>

                  <?php echo $__env->make('task.editTask', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									&nbsp;&nbsp;&nbsp;
									<a  href="#delete_<?php echo e($task->id); ?>" title="حذف" data-toggle='modal'>
										<i class="ti ti-trash text-danger"></i>
									</a>
									<?php echo $__env->make('task.deleteTask', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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