<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-12">
        <div class="box box-block ">
          <div class="container-fluid">
            <div class="row text-xs-center">
              <div>
                <img src="\img\logo\logo.png" alt="" style="height: 80px"/><br>
                <h4 style="color: #f4a030">
                <span style="color: #26abd7 ">سامانه یکپارچه مدیریت اطلاعات بنگاه</span></h4>
              </div>
            </div>
          </div><br>

          <?php echo $__env->make('task.incompletedTasks', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <div class="row">

            <div class="col-md-4 ">
              <div class="modal static-modal custom-modal-5 ">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body card-header">
                      <div class="text-xs-center" style="padding: 0px">
                        <a href="<?php echo e(route('customers')); ?>"><h5>مشتریان</h5>
                        <div class="cm-icon bg-success  mb-1"><i class="fa fa-group"></i></div></a>
                        <div class="row ">
                          <div class="col-xs-6">
                            <a href="<?php echo e(route('addCustomer')); ?>"><button  class="btn btn-success btn-block">
                              <li class="fa fa-user-plus"></li>  افزودن
                            </button></a>
                          </div>
                          <div class="col-xs-6">
                            <a href="<?php echo e(route('customers')); ?>"><button type="button" class="btn btn-success ">
                              <li class="fa fa-users"></li>  همه ی مشتریان
                            </button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 ">
              <div class="modal static-modal custom-modal-5 ">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body card-header">
                      <div class="text-xs-center" style="padding: 0px">
                        <a href="<?php echo e(route('files')); ?>"><h5>فایل ها</h5>
                        <div class="cm-icon bg-primary  mb-1"><i class="fa fa-file"></i></div></a>
                        <div class="row ">
                          <div class="col-xs-6">
                            <a href="<?php echo e(route('addFile')); ?>"><button  class="btn btn-primary btn-block">
                              <li class="fa fa-plus-circle"></li>  افزودن
                            </button></a>
                          </div>
                          <div class="col-xs-6">
                            <a href="<?php echo e(route('files')); ?>"><button type="button" class="btn btn-primary ">
                              <li class="fa fa-folder-open"></li> همه ی فایل ها
                            </button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 ">
              <div class="modal static-modal custom-modal-5 ">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body card-header">
                      <div class="text-xs-center" style="padding: 0px">
                        <a href="<?php echo e(route('contracts')); ?>"><h5>قراردادها</h5>
                        <div class="cm-icon bg-info  mb-1"><i class="fa fa-book"></i></div></a>
                        <div class="row ">
                          <div class="col-xs-6">
                            <a href="<?php echo e(route('addContract')); ?>"><button  class="btn btn-info btn-block">
                              <li class="fa fa-edit"></li>  افزودن
                            </button></a>
                          </div>
                          <div class="col-xs-6">
                            <a href="<?php echo e(route('contracts')); ?>"><button type="button" class="btn btn-info btn-block">
                              <li class="fa fa-suitcase"></li>  همه ی قراردادها
                            </button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><br>

          <!-- Statistics -->
          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="box box-block tile tile-2 bg-success mb-2">
                <div class="t-icon right"><i class="fa fa-users"></i></div>
                <div class="t-content">
                  <h1 class="mb-1"><?php echo e($myCustomersCount); ?></h1>
                  <h6 class="text-uppercase">مشتریان</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="box box-block tile tile-2 bg-primary mb-2">
                <div class="t-icon right"><i class="fa fa-file"></i></div>
                <div class="t-content">
                  <h1 class="mb-1"><?php echo e($myFilesCount); ?></h1>
                  <h6 class="text-uppercase">فایل ها</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="box box-block tile tile-2 bg-info  mb-2">
                <div class="t-icon right"><i class="fa fa-book"></i></div>
                <div class="t-content">
                  <h1 class="mb-1"><?php echo e($myContractsCount); ?></h1>
                  <h6 class="text-uppercase">قرادادها</h6>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>