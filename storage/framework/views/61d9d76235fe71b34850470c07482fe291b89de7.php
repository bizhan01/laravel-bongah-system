<?php $__env->startSection('content'); ?>
<?php echo $__env->make('task.incompletedTasks', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="row row-md">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-success"></span><i class="ti-check"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">مشتریان</h6>
                        <h1 class="mb-1"><?php echo e($customersCount); ?></h1>
                        <span class="text-muted font-90"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-danger"></span><i class="ti-help"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">فایل ها</h6>
                        <h1 class="mb-1"><?php echo e($filesCount); ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">پروژه ها</h6>
                        <h1 class="mb-1"><?php echo e($projectsCount); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">قراردادها</h6>
                        <h1 class="mb-1"><?php echo e($contractsCount); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <img src="..\img\photos-1\5.jpg" alt="" style="height: 400px; width: 100%" />
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>