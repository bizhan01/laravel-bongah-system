<?php $__env->startSection('content'); ?>
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی اطلاعات پروژه</h3></center>
        <form action = "/updateProject/<?php echo $project[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">

						<div class="col-md-4">
							<div class="form-group">
								<label>مشتری/مالک پروژه<span style="color: red">*</span></label>
								<select class="form-control" name="customer_id" required>
									<option value="<?php echo $project[0]->customer_id; ?>"><?php echo $project[0]->name; ?></option>
                  <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>نوع پروژه<span style="color: red">*</span></label>
								<input id="name" type="text" class="form-control" name="project_type" value="<?php echo $project[0]->project_type; ?>" required autofocus required placeholder="اسم کامل کاربر">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>موقعیت<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="location" value="<?php echo $project[0]->location; ?>" placeholder="نام خانوادگی" required>
								<span class="font-90 text-muted"></span>
							</div>
						</div>


				</div>

			<div class="row">

        <div class="col-md-4">
          <div class="form-group">
            <label>مساحت<span style="color: red">*</span></label>
             <input type="text" name="space" value="<?php echo $project[0]->space; ?>" class="form-control" required>
          </div>
        </div>

					<div class="col-md-4">
							<div class="form-group">
								<label>تاریخ ساخت<span style="color: red">*</span></label>
								 <input type="text" name="start_date" value="<?php echo $project[0]->start_date; ?>" class="form-control" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>تاریخ تحویل<span style="color: red">*</span></label>
								 <input type="text" name="end_date" value="<?php echo $project[0]->end_date; ?>" class="form-control" required>
							</div>
						</div>

				</div>

        <div class="row">
         <div class="col-md-3">
            <div class="form-group">
              <label for="">اعمال عملیات</label><br>
              <input type="submit" name="submit" value="ذخیره" class="btn btn-success">
             <input type="reset"  value="لغو" class="btn btn-warning ">
            </div>
          </div>
        </div>

			 <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
      </nav>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>