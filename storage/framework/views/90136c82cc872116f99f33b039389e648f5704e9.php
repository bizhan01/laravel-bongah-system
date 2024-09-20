<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <nav class="navbar navbar-light bg-white b-a mb-2">
      <center><h3>ثبت مصارف پروژه</h3></center> <br>
      <form method="POST" action="<?php echo e(route('saveProjectExpense')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <div class="row form-group">
            <input type="hidden" name="project_id" value="<?php echo $project[0]->id; ?>">
            <div class="col-md-4">
              <label  style="color: black">تاریخ<span style="color: red">*</span></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="text" name="date"  class="form-control pdate" required placeholder="روز-ماه-سال" id="pdpF2" autocomplete="off">
              </div>
            </div>

            <div class="col-md-4">
              <label  style="color: black">جنس<span style="color: red">*</span></label>
              <input type="text"  name="item" value=""  class="form-control"  placeholder="" required>
            </div>
            <div class="col-md-4">
              <label  style="color: black">قیمت<span style="color: red">*</span></label>
              <input type="number" min="1"  name="cost" name="advance_paid" data-a-sign="IR " class="form-control autonumber" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
            </div>
         </div>
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </form>
    </nav>
  </div>
</div>



<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="box col-lg-12 col-md-12 col-sm-12 box-block bg-white">
		  <center><h4 class="mb-1">لیست مصارف پروژه</h4></center>
      <table class=" table  table-striped table-bordered dataTable" id="table-2">
        <thead>
          <tr>
            <th>کد پروژه</th>
            <th>تاریخ </th>
            <th>جنس</th>
            <th>قیمت</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <tbody>
            <?php $sum=0; ?>
            <?php $__currentLoopData = $projectExpenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectExpens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($projectExpens->project_id); ?></td>
  						<td><?php echo e($projectExpens->date); ?></td>
  						<td><?php echo e($projectExpens->item); ?></td>
  						<td><?php echo e(number_format($projectExpens->cost)); ?></td>
              <td style="display: flex; flex-direction: row; justify-content: center;">
  						<a class="text-success" href="editProjectExpense/<?php echo e($projectExpens->id); ?>"><i class="fa fa-edit btn btn-rounded btn-success"></i></a> &nbsp  &nbsp
  						<a class="text-danger" href="deleteProjectExpense/<?php echo e($projectExpens->id); ?>" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn btn-rounded btn-danger"></i></a>
              </td>
            </tr>
          <?php $sum += $projectExpens->cost; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tfoot>
            <tr>
              <th colspan="4">جمع کل مصارف/هزینه ها در این پروژه</th>
              <th colspan="1"><?php echo e(number_format($sum)); ?></th>
            </tr>
          </tfoot>
        </tbody>
      </table>
        <?php $projectID = $project[0]->id; ?>

      <a href="<?php echo e(url('printProjectExpense').'/' .$projectID); ?>" class="btn btn-inverse waves-effect waves-light">
      <button type="button" class="btn btn-info label-left float-xs-right mr-0-5">
        <span class="btn-label"><i class="ti-printer"></i></span>
        چاپ آمار مصارف
      </button>
      </a>
    </div>
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
        $("#pdpF22").persianDatepicker({ formatDate: "YYYY" });
        $("#pdpF222").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

        //startDate is tomarrow
        var p = new persianDate();
        $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>