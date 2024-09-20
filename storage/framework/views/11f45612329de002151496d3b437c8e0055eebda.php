<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>آقا/خانم</th>
          <th>اسم</th>
          <th>اسم پدر /همسر</th>
          <th>نوع مشتری</th>
          <th>کد ملی</th>
          <th>تلفن</th>
          <th>آدرس فعلی</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $archivedCustomers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row+1); ?></td>
            <td><?php echo e($customer->prefix); ?></td>
            <td><?php echo e($customer->name); ?></td>
            <td><?php echo e($customer->father_name); ?></td>
            <td>
              <?php if($customer->customer_type == 1): ?>
                واگذار کننده
              <?php else: ?>
                گيرنده
              <?php endif; ?>
            </td>
            <td><?php echo e($customer->national_code); ?></td>
            <td><?php echo e($customer->phone); ?></td>
            <td><?php echo e($customer->address); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
