<?php $__env->startSection('content'); ?>
<style media="screen">
  tr{
  height: 57px;
  }
</style>
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="box bg-white product-view mb-2">
      <div class="box-block">
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <div class="pv-images mb-1 mb-sm-0">
              <div class="mb-1">
                <a class="active" href="..\uploadedImages\files\<?php echo $file[0]->img1; ?>"><img class="img-fluid" src="..\uploadedImages\files\<?php echo $file[0]->img1; ?>" alt=""></a>
              </div>
              <div class="row row-sm">
                <div class="col-xs-4">
                  <a class="active" href="..\uploadedImages\files\<?php echo $file[0]->img2; ?>"><img class="img-fluid" src="..\uploadedImages\files\<?php echo $file[0]->img2; ?>" alt=""></a>
                </div>
                <div class="col-xs-4">
                  <a href="..\uploadedImages\files\<?php echo $file[0]->img3; ?>"><img class="img-fluid" src="..\uploadedImages\files\<?php echo $file[0]->img3; ?>" alt=""></a>
                </div>
                <div class="col-xs-4">
                  <a href="..\uploadedImages\files\<?php echo $file[0]->img4; ?>"><img class="img-fluid" src="..\uploadedImages\files\<?php echo $file[0]->img4; ?>" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-7">
            <div class="pv-content">
              <div class="pv-title">
                اطلاعات کامل فایل
                <a class="text-danger" href="#"><i class="fa fa-star"></i></a>
              </div>
              <table class="table mb-md-0">
                <tr class="table-success">
                  <td>مدل فایل:</td>
                  <th><?php echo $file[0]->file_model; ?></th>
                  <td>پارکنیگ</td>
                  <th><?php echo $file[0]->parking; ?></th>
                </tr>
                <tr class="table-info">
                  <td>نوع فایل:</td>
                  <th><?php echo $file[0]->file_type; ?></th>
                  <td>آسانسور</td>
                  <th><?php echo $file[0]->lift; ?></th>
                </tr>
                <tr class="table-warning">
                  <td>قیمت</td>
                  <th><?php echo e(number_format($file[0]->price)); ?>  <span style="color: blue">تومان</span></th>
                  <td>طبقه</td>
                  <th><?php echo $file[0]->stage; ?></th>
                </tr>
                <tr class="table-success">
                  <td>پول پیش</td>
                  <th><?php echo e(number_format($file[0]->advance_paid)); ?> <span style="color: blue">تومان</span></th>
                  <td>تاریخ ساخت</td>
                  <th><?php echo $file[0]->manufacture_date; ?></th>
                </tr>
                <tr class="table-info">
                  <td>کرایه</td>
                  <th><?php echo e(number_format( $file[0]->rent)); ?> <span style="color: blue">تومان</span></th>
                  <td>تاریخ تحویل</td>
                  <th><?php echo $file[0]->delivery_date; ?></th>
                </tr>
                <tr class="table-warning">
                  <td>موقعیت</td>
                  <th><?php echo $file[0]->location; ?></th>
                  <td>مساحت</td>
                  <th ><?php echo $file[0]->space; ?> <span style="color: blue">متر مربع</span></th>
                </tr>
                <tr class="table-info">
                  <td>آدرس</td>
                  <th colspan="3"><?php echo $file[0]->address; ?></th>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>