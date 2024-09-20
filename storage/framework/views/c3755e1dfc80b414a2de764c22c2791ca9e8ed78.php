<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>مشاور</th>
          <th>اسم مشتری</th>
          <th>کد فایل</th>
          <th>نوع قرارداد</th>
          <th>قیمت</th>
          <th>پول پیش</th>
          <th>کرایه</th>
          <th>کد قرارداد</th>
          <th>کمیسیون</th>
          <th>اسکن قرارداد</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $archivedContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row+1); ?></td>
            <td>
              <a href="<?php echo e(url('customerInfo').'/' .$contract->customer_id); ?>" title="اطلاعات مشتری" >
                <?php echo e($contract->customer_name); ?>

              </a>
            </td>
            <td>
              <a href="<?php echo e(url('customerInfo').'/' .$contract->customer_id); ?>" title="اطلاعات مشتری" >
                <?php echo e($contract->customer_name); ?>

              </a>
            </td>
            <td>
              <a href="<?php echo e(url('fileInfo').'/' .$contract->file_id); ?>" title="اطلاعات فایل" >
                <?php echo e($contract->file_id); ?>

              </a>
              </td>
            <td><?php echo e($contract->contract_type); ?></td>
            <td><?php echo e($contract->price); ?></td>
            <td><?php echo e($contract->advance_paid); ?></td>
            <td><?php echo e($contract->rent); ?></td>
            <td><?php echo e($contract->contract_code); ?></td>
            <td><?php echo e($contract->commission); ?></td>
            <td  style="width: 50px !important; padding: 2px;">
              <img src="<?php echo e(asset('UploadedImages/contracts/').'/'.$contract->contract_scan); ?>"  style="width: 100% !important; ">
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
