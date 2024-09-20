<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>درباره شرکت</h4>
    <?php echo $__env->make('companyInfo.addInfo', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="box box-block bg-white">
			<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> افزودن اطلاعات شرکت </a>
				<br></br>
				<div class="box bg-white product-view mb-2">
					<?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="box-block">
						<div class="row">
							<div class="col-md-4 col-sm-5">
								<div class="pv-images mb-1 mb-sm-0">
									<div class="mb-1">
										<img class="img-fluid" src="<?php echo e(asset('../UploadedImages/about/').'/'.$info->logo); ?>" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-7">
								<div class="pv-content">
									<div class="pv-title">
										اطلاعات کامل شرکت
										<a class="text-danger" href="#"><i class="fa fa-star"></i></a>
									</div>
									<table class="table mb-md-0">
										<tr class="table-success">
											<td>مدل فایل:</td>
											<th><?php echo e($info->company_name); ?></th>
										</tr>
										<tr class="table-success">
											<td>پارکنیگ</td>
											<th><?php echo e($info->company_email); ?></th>
										</tr>
										<tr class="table-info">
											<td>نوع فایل:</td>
											<th><?php echo e($info->company_cell_phone); ?></th>
										</tr>
										<tr class="table-success">
											<td>آسانسور</td>
											<th><?php echo e($info->company_website); ?></th>
										</tr>
										<tr class="table-warning">
											<td>قیمت</td>
											<th><?php echo e($info->company_phone); ?></th>
										</tr>
										<tr class="table-success">
											<td>طبقه</td>
											<th><?php echo e($info->company_address); ?></th>
										</tr>
										<tr class="table-success">
											<td>علمیات:</td>
											<th>
												<a href="#edit_<?php echo e($info->id); ?>" title="ویرایش" data-toggle='modal'>
													<i class="fa fa-edit text-success"></i>
												</a>

												<?php echo $__env->make('companyInfo.editInfo', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
												&nbsp;&nbsp;&nbsp;
												<a  href="#delete_<?php echo e($info->id); ?>" title="حذف" data-toggle='modal'>
													<i class="ti ti-trash text-danger"></i>
												</a>
												<?php echo $__env->make('companyInfo.deleteInfo', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
											</th>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>