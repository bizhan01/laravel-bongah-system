<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی فایل ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی فایل ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن فایل جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<ul class="nav nav-tabs" role="tablist" style="color: red !important;">
			<li class="nav-item" >
				<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" >جستجوی عمومی</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">جستجو براساس قیمت فایل</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">جستجو براساس پول پیش فایل</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">جستجو براساس کرایه فایل</a>
			</li>
		</ul>

		<div class="tab-content box box-block bg-white b-t-0 mb-2">
			<div class="tab-pane active" id="tab-1" role="tabpanel">
				<?php echo $__env->make('file.general_file_search', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="tab-pane" id="tab-2" role="tabpanel">
				<?php echo $__env->make('file.search_file_price', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="tab-pane" id="tab-3" role="tabpanel">
				<?php echo $__env->make('file.search_file_advance_paid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="tab-pane" id="tab-4" role="tabpanel">
				<?php echo $__env->make('file.search_file_rent', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>

		<?php if(isset($message)): ?>
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  		<strong>خطا!</strong> معلومات مورد  نظر پیدا نشد.
			</div>
		<?php endif; ?>


		<?php if(isset($details)): ?>
		<div class="box box-block bg-white">
		    <table class="table table-striped table-bordered dataTable" id="table-2">
		    <thead>
		      <tr>
						<th>#</th>
		        <th data-priority="1">کد فایل</th>
		        <th data-priority="1">مالک</th>
		        <th data-priority="1">مدل فایل</th>
		        <th data-priority="1">نوع فایل</th>
		        <th data-priority="1">قیمت</th>
		        <th data-priority="1">پول پیش</th>
		        <th data-priority="1">کرایه</th>
		        <th data-priority="1">موقعیت</th>
		        <th data-priority="3">مساحت</th>
		        <th data-priority="6">آدرس</th>
		        <th data-priority="6">عملیات</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <tr>
							<td><?php echo e($row+1); ?></td>
		          <td>
		            <a href="<?php echo e(url('fileInfo').'/' .$file->id); ?>" title="اطلاعات فایل" >
		              <?php echo e($file->id); ?>

		            </a>
		          </td>
		          <td><?php echo e($file->name); ?></td>
		          <td><?php echo e($file->file_model); ?></td>
		          <td><?php echo e($file->file_type); ?></td>
		          <td><?php echo e(number_format($file->price)); ?> </td>
		          <td><?php echo e(number_format($file->advance_paid)); ?> </td>
		          <td><?php echo e(number_format($file->rent)); ?> </td>
		          <td><?php echo e($file->location); ?></td>
		          <td><?php echo e($file->space); ?> متر مربع </td>
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
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		  </table>
		</div>
		<?php else: ?>
		<div class="box box-block bg-white">
		    <table class="table table-striped table-bordered dataTable" id="table-2">
		    <thead>
		      <tr>
						<th>#</th>
		        <th data-priority="1">کد فایل</th>
		        <th data-priority="1">مالک</th>
		        <th data-priority="1">مدل فایل</th>
		        <th data-priority="1">نوع فایل</th>
		        <th data-priority="1">قیمت</th>
		        <th data-priority="1">پول پیش</th>
		        <th data-priority="1">کرایه</th>
		        <th data-priority="1">موقعیت</th>
		        <th data-priority="3">مساحت</th>
		        <th data-priority="6">آدرس</th>
		        <th data-priority="6">عملیات</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <tr>
							<td><?php echo e($row+1); ?></td>
		          <td>
		            <a href="<?php echo e(url('fileInfo').'/' .$file->id); ?>" title="اطلاعات فایل" >
		              <?php echo e($file->id); ?>

		            </a>
		          </td>
							<td>
		            <a href="<?php echo e(url('customerInfo').'/' .$file->owner_id); ?>" title="اطلاعات فایل" >
		              <?php echo e($file->name); ?>

		            </a>
		          </td>
		          <td><?php echo e($file->file_model); ?></td>
		          <td><?php echo e($file->file_type); ?></td>
		          <td><?php echo e(number_format($file->price)); ?> </td>
		          <td><?php echo e(number_format($file->advance_paid)); ?> </td>
		          <td><?php echo e(number_format($file->rent)); ?> </td>
		          <td><?php echo e($file->location); ?></td>
		          <td><?php echo e($file->space); ?> متر مربع </td>
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
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		  </table>
		</div>
		<?php endif; ?>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>