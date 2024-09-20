<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>مالک پروژه</th>
          <th>نوع پروژه</th>
          <th>موقعیت</th>
          <th>مساحت</th>
          <th>تاریخ ساخت</th>
          <th>تاریخ تحویل</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $archivedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($row+1); ?></td>
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
