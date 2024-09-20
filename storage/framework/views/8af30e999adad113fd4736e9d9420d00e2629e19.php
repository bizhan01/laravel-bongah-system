<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <h4>امکانات کاربردی</h4>
    <ol class="breadcrumb no-bg mb-1">
      <li class="breadcrumb-item"><a href="#">خانه</a></li>
      <li class="breadcrumb-item"><a href="#">امکانات</a></li>
      <li class="breadcrumb-item active">کمک</li>
    </ol>

  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="box box-block bg-white tile tile-4 mb-2">
        <div class="t-icon left bg-danger"><i class="fa  fa-graduation-cap"></i></div>
        <div class="t-content text-xs-right">
          <br>
          <h3 class="mb-0">آموزش</h3>
          <br>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="box box-block bg-white tile tile-4 mb-2">
        <div class="t-icon left bg-success"><i class="fa fa-question-circle"></i></div>
        <div class="t-content text-xs-right">
          <br>
          <h3 class="mb-0">پشتيباني</h3>
          <br>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <a href="#objection" data-toggle="modal">
        <div class="box box-block bg-white tile tile-4 mb-2">
          <div class="t-icon left bg-primary"><i class="fa  fa-smile-o"></i></div>
          <div class="t-content text-xs-right">
            <br>
            <h3 class="mb-0">انتقادات</h3>
            <br>
          </div>
        </div>
      </a>
      <?php echo $__env->make('toolBox.objection', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <a href="#suggestion" data-toggle="modal">
        <div class="box box-block bg-white tile tile-4 mb-2">
          <div class="t-icon left bg-warning"><i class="fa  fa-info-circle"></i></div>
          <div class="t-content text-xs-right">
            <br>
            <h3 class="mb-0">پشنهادات</h3>
            <br>
          </div>
        </div>
      </a>
      <?php echo $__env->make('toolBox.suggestion', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <a href="<?php echo e(route('calculator')); ?>" target="blank">
        <div class="box box-block bg-white tile tile-4 mb-2">
          <div class="t-icon left bg-danger"><i class="fa  fa-calculator"></i></div>
          <div class="t-content text-xs-right">
            <br>
            <h3 class="mb-0">ماشین حساب</h3>
            <br>
          </div>
        </div>
      </a>
    </div>


    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <a href="<?php echo e(route('calendar')); ?>">
        <div class="box box-block bg-white tile tile-4 mb-2">
          <div class="t-icon left bg-success"><i class="fa  fa-calendar"></i></div>
          <div class="t-content text-xs-right">
            <br>
            <h3 class="mb-0">تقویم</h3>
            <br>
          </div>
        </div>
      </a>
    </div>


    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <a href="#dateConverter" data-toggle="modal">
        <div class="box box-block bg-white tile tile-4 mb-2">
          <div class="t-icon left bg-primary"><i class="fa  fa-calendar-plus-o"></i></div>
          <div class="t-content text-xs-right">
            <br>
            <h3 class="mb-0">تبدیل تاریخ</h3>
            <br>
          </div>
        </div>
      </a>
      <?php echo $__env->make('toolBox.dateConverter', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="box box-block bg-white tile tile-4 mb-2">
        <div class="t-icon left bg-warning"><i class="ti-receipt"></i></div>
        <div class="t-content text-xs-right">
          <br>
          <h3 class="mb-0">پشنهادات</h3>
          <br>
        </div>
      </div>
    </div> -->
  </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>