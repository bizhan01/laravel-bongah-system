<!-- My Tasks -->
<div class="template-options">
  <div class="to-toggle"><button type="button" class="btn btn-danger btn-rounded"><?php echo e($tasksCount); ?></button></div>
  <div class="custom-scroll custom-scroll-dark">
    <div class="to-content">
      <a class="btn btn-info btn-block waves-effect waves-light mb-2" href="" >برنامه های انجام نشده</a>
      <table class="table table-striped ">
        <tbody>
          <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <?php if($task->status == 1): ?>
                  <span class="btn btn-rounded btn-sm btn-danger "><li class="fa fa-spinner fa-spin fa-fw"></li></button>
                <?php else: ?>
                  <span class="btn btn-rounded btn-sm btn-success fa fa-check"></span>
                <?php endif; ?>
              </td>
              <td><?php echo e($task->title); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
