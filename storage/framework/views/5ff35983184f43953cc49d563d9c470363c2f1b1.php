<?php $__env->startSection('content'); ?>
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی اطلاعات قرارداد</h3></center>
        <form action = "/updateContract/<?php echo $contract[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">
            <input type="hidden" name="user_id" value="<?php echo $contract[0]->user_id; ?>">

						<div class="col-md-4">
							<div class="form-group">
								<label>تاریخ ثبت قرارداد<span style="color: red">*</span></label>
									<input type="text" class="form-control" name="date" value="<?php echo $contract[0]->date; ?>" placeholder="روز-ماه-سال" id="pdpF2" autocomplete="off" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>طرف قرارداد<span style="color: red">*</span></label>
                  <select class="form-control" name="customer_id" id='searchOptions' required>
                    <option value="<?php echo $contract[0]->customer_id; ?>"><?php echo $contract[0]->customer_name; ?></option>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->prefix); ?> <?php echo e($customer->name); ?> - <?php echo e($customer->father_name); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>کد فایل<span style="color: red">*</span></label>
                <select class="form-control" name="file_id" id='searchOptions2' required>
                  <option value="<?php echo $contract[0]->file_id; ?>"><?php echo $contract[0]->file_id; ?></option>
                  <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($file->id); ?>"><?php echo e($file->id); ?> - <?php echo e($file->file_model); ?> - <?php echo e($file->file_type); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
							</div>
						</div>
				</div>

			<div class="row">

        <div class="col-md-3">
          <div class="form-group">
            <label>نوع قرارداد:<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="contract_type" value="<?php echo $contract[0]->contract_type; ?>" placeholder="نام خانوادگی" required>
            <span class="font-90 text-muted"></span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label>قیمت<span style="color: red">*</span></label>
             <input type="text" name="price" value="<?php echo $contract[0]->price; ?>" class="form-control" required>
          </div>
        </div>

					<div class="col-md-3">
							<div class="form-group">
								<label>پول پیش<span style="color: red">*</span></label>
								 <input type="text" name="advance_paid" value="<?php echo $contract[0]->advance_paid; ?>" class="form-control" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>کرایه<span style="color: red">*</span></label>
								 <input type="text" name="rent" value="<?php echo $contract[0]->rent; ?>" class="form-control" required>
							</div>
						</div>

          </div>

          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                <label>کد قرارداد<span style="color: red">*</span></label>
                 <input type="text" name="contract_code" value="<?php echo $contract[0]->contract_code; ?>" class="form-control" required>
              </div>
            </div>

						<div class="col-md-3">
							<div class="form-group">
								<label>شروع قرارداد:<span style="color: red">*</span></label>
								 <input type="text" name="startDate" value="<?php echo $contract[0]->startDate; ?>" class="form-control" placeholder="روز-ماه-سال" id="pdpF22" class="form-control pdate" autocomplete="off" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>ختم قرارداد:<span style="color: red">*</span></label>
								 <input type="text" name="endDate" value="<?php echo $contract[0]->endDate; ?>" class="form-control" placeholder="روز-ماه-سال" id="pdpF222" class="form-control pdate" autocomplete="off" required>
							</div>
						</div>

            <div class="col-md-3">
							<div class="form-group">
								<label>کمیسیون:<span style="color: red">*</span></label>
								 <input type="text" name="commission" value="<?php echo $contract[0]->commission; ?>" class="form-control" required>
							</div>
						</div>
					</div>



        <div class="row form-group">
        <div class="col-md-12">
          <label  style="color: black">اسکن قرارداد</label>
          <input type="hidden" name="contract_scan" value="<?php echo $contract[0]->contract_scan; ?>">
          <input type="file" name="contract_scan" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/contracts/<?php echo $contract[0]->contract_scan; ?>" />
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


  <script src="../Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
  <script src="../Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
  <script>
      $(function () {
          //usage
          $(".usage").persianDatepicker();

          //formatting
          $("#pdpF1").persianDatepicker({ formatDate: "YYYY/MM/DD 0h:0m:0s:ms" });
          $("#pdpF2").persianDatepicker({ formatDate: "YYYY-0M-0D" });
          $("#pdpF22").persianDatepicker({ formatDate: "YYYY-0M-0D" });
          $("#pdpF222").persianDatepicker({ formatDate: "YYYY-0M-0D" });
          $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

          //startDate is tomarrow
          var p = new persianDate();
          $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


      });
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>