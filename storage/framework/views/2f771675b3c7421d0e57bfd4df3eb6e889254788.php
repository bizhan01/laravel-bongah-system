<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <h4>تقویم</h4>
    <ol class="breadcrumb no-bg mb-1">
      <li class="breadcrumb-item"><a href="#">خانه</a></li>
      <li class="breadcrumb-item"><a href="#">امکانات</a></li>
      <li class="breadcrumb-item active">کمک</li>
    </ol></br>

    <div class="box box-block bg-white">

  		<div class="box box-block bg-white" style="margin-top: -35px">
        <center><h3>تقویم هجری شمسی سال جاری</h3></center>
        <div class="col-lg-7"></div>
        <input type="text"  id="pdpDefault" style="border: 1px solid white; color: white"/>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
  		</div>
		</div>

  </div>
</div>

<script src="Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
<script src="Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
<script>
    $(function () {
        //usage
        $(".usage").persianDatepicker();

        //themes
        $("#pdpDefault ").persianDatepicker({ cellWidth: 78, cellHeight: 60, fontSize: 18, alwaysShow: true, });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>