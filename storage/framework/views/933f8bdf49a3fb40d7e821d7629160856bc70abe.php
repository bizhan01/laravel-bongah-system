<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="row row-md">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-success"></span><i class="ti-check"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">کاربران فعال</h6>
                        <h1 class="mb-1"></h1>
                        <span class="text-muted font-90">لست کاربرانی که اجازه فعالیت دارند</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-danger"></span><i class="ti-help"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">کاربران غیر فعال</h6>
                        <h1 class="mb-1"></h1>
                        <i class="text-success mr-0-5"></i><span>لست کاربرانی که اجازه فعالیت ندارند</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">اعلانات </h6>
                        <h1 class="mb-1"></h1>
                        <div id="sparkline1"><canvas width="60" height="20" style="display: inline-block; width: 60px; height: 20px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box box-block bg-white tile tile-1 mb-2">
                    <div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
                    <div class="t-content">
                        <h6 class="text-uppercase mb-1">اخبار</h6>
                        <h1 class="mb-1"></h1>
                        <div id="sparkline1"><canvas width="60" height="20" style="display: inline-block; width: 60px; height: 20px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
        <img src="..\img\photos-1\5.jpg" alt="" style="height: 400px; width: 100%" />
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>