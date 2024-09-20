<div class="box box-block bg-white">
  <!-- date Start -->
    <div class="">
      <div class="row">
        <div class="col-md-4">
          <label  style="color: black">تاریخ شروع<span style="color: red">*</span></label>
            <input type="text" name="from" class="form-control from" id="pdpF2" placeholder="روز-ماه-سال" value="<?php echo e(old('from')); ?>" required>
        </div>
        <div class="col-md-4">
          <label  style="color: black">تاریخ ختم<span style="color: red">*</span></label>
          <input type="text" name="to" class="form-control to" id="pdpF22" placeholder="روز-ماه-سال"  required>
        </div>
        <div class="col-md-4">
          <h6>&nbsp;</h6>
          <a href="">
            <button class="btn btn-success btn-block"  id="btnGetOrderByDate">
              <a href="" class="text-black">جستجو</a>
            </button>
          </a>
        </div>
      </div>
    </div><hr>
    <!-- date End -->
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>تاریخ</th>
          <th>مشاور</th>
          <th>مالک پروژه</th>
          <th>نوع پروژه</th>
          <th>موقعیت</th>
          <th>مساحت</th>
          <th>شروع پروژه</th>
          <th>ختم پروژه</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row+1); ?></td>
            <td><?php echo e($project->date); ?></td>
            <td><?php echo e($project->user_name); ?></td>
            <td><?php echo e($project->prefix); ?> <?php echo e($project->name); ?></td>
            <td><?php echo e($project->project_type); ?></td>
            <td><?php echo e($project->location); ?></td>
            <td><?php echo e($project->space); ?></td>
            <td><?php echo e($project->start_date); ?></td>
            <td><?php echo e($project->end_date); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>


<!-- Print Report -->
<a href="<?php echo e(route('printProjectReport')); ?>" class="btn btn-inverse waves-effect waves-light">
<button type="button" class="btn btn-info label-left float-xs-right mr-0-5">
  <span class="btn-label"><i class="ti-printer"></i></span>
  چاپ گزارش
</button>
</a>



<script type="text/javascript" src="<?php echo e(asset('../vendors/jquery/jquery-1.12.3.min.js')); ?>"></script>
<script type="text/javascript">


  $(document).on('click','#btnGetOrderByDate',function(e){
    e.preventDefault();
    var from = $('.from').val();
    var to = $('.to').val();
    if (from.indexOf('/') > -1) {
      from = from.replace(/\//g,'/');
    }
    if (to.indexOf('/',to) > -1) {
      var to = to.replace(/\//g,'');
    }
    if (from.length > 0 && to.length > 0) {
      window.location.href = '<?= url('projectDateSearch') ?>'+'/'+from+'/'+to;
    }else{
      alert('لطفا تاریخ را مشخص کنید!');
    }
  });
</script>



<script src="./Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
<script src="./Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
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
