<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="navbar navbar-light bg-white b-a mb-2">
      <center><h3>دفتر روزانه</h3></center> <hr>
      <!-- User List -->
        <div class="with-sub <?php if (Auth::user()->type == '3' || Auth::user()->type == '4'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار کابران:</h5>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>آقا/خانم</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>وظیفه</th>
                <th>تلفن</th>
                <th>آدرس فعلی</th>
                <th>ایمیل آدرس</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($user->title); ?></td>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->lastName); ?></td>
                  <td>
                    <?php if($user->type == 2): ?>
                     مدیر سیستم
                    <?php elseif($user->type == 3): ?>
                    حسابدار
                    <?php elseif($user->type == 4): ?>
                    مشاور
                    <?php else: ?>
                    <?php endif; ?>
                  </td>
                  <td dir="ltr"><?php echo e($user->phone); ?></td>
                  <td><?php echo e($user->address); ?></td>
                  <td><?php echo e($user->email); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

        <!--projects  -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '4'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار پروژه ها:</h5>
          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th>تاریخ ثبت</th>
                <th>مالک پروژه</th>
                <th>نوع پروژه</th>
                <th>موقعیت</th>
                <th>مساحت</th>
                <th>تاریخ ساخت</th>
                <th>تاریخ تحویل</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($project->date); ?></td>
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

        <!--projects expense -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '4'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار مصارف در پروژه ها:</h5>
          <table class=" table  table-striped">
            <thead>
              <tr>
                <th>کد پروژه</th>
                <th>تاریخ </th>
                <th>جنس</th>
                <th>قیمت</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $projectExpenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectExpens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($projectExpens->project_id); ?></td>
    						<td><?php echo e($projectExpens->date); ?></td>
    						<td><?php echo e($projectExpens->item); ?></td>
    						<td><?php echo e(number_format($projectExpens->cost)); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>


        <!--Customer-->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار مشتریان:</h5>
          <table  class="table table-striped table-bordered " >
            <thead>
              <tr>
                <th>اسم</th>
                <th>اسم پدر /همسر</th>
                <th>نوع مشتری</th>
                <th>کد ملی</th>
                <th>تلفن</th>
                <th>آدرس فعلی</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($customer->prefix); ?> <?php echo e($customer->name); ?></td>
                  <td><?php echo e($customer->father_name); ?></td>
                  <td>
                    <?php if($customer->customer_type == 1): ?>
                      واگذار کننده
                    <?php else: ?>
                      گيرنده
                    <?php endif; ?>
                  </td>
                  <td><?php echo e($customer->national_code); ?></td>
                  <td dir="ltr"><?php echo e($customer->phone); ?></td>
                  <td><?php echo e($customer->address); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        </div>

        <!--files -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار فایل ها:</h5>
          <table class="table table-striped table-bordered" >
  				<thead>
  					<tr>
  						<th data-priority="1">کد فایل</th>
  						<th data-priority="1">مالک</th>
  						<th data-priority="1">مدل فایل</th>
  						<th data-priority="1">نوع فایل</th>
  						<th data-priority="1">قیمت</th>
  						<th data-priority="1">پول پیش</th>
  						<th data-priority="1">کرایه</th>
  						<th data-priority="1">موقعیت</th>
  						<th data-priority="3">مساحت</th>
  						<th data-priority="6">آدرس</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  						<tr>
  							<td>
  								<a href="<?php echo e(url('fileInfo').'/' .$file->id); ?>" title="اطلاعات فایل" >
  									<?php echo e($file->id); ?>

  								</a>
  							</td>
  							<td><?php echo e($file->id); ?></td>
  							<td><?php echo e($file->file_model); ?></td>
  							<td><?php echo e($file->file_type); ?></td>
  							<td><?php echo e(number_format($file->price)); ?> <span style="color: blue">تومان</span></td>
  							<td><?php echo e(number_format($file->advance_paid)); ?> <span style="color: blue">تومان</span></td>
  							<td><?php echo e(number_format($file->rent)); ?> <span style="color: blue">تومان</span></td>
  							<td><?php echo e($file->location); ?></td>
  							<td><?php echo e($file->space); ?> متر مربع </td>
  							<td><?php echo e($file->address); ?></td>
  						</tr>
  	          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</tbody>
  			</table>
        </div>


        <!--contracts -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار قراردادها:</h5>
          <table class="table table-striped table-bordered">
  					<thead>
  						<tr>
  							<th>اسکن قرارداد</th>
  							<th>تاریخ</th>
  							<th>اسم مشتری</th>
  							<th>کد فایل</th>
  							<th>نوع قرارداد</th>
  							<th>قیمت</th>
  							<th>پول پیش</th>
  							<th>کرایه</th>
  							<th>کد قرارداد</th>
  							<th>کمیسیون</th>
  						</tr>
  					</thead>
  					<tbody>
  						<?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  							<tr>
  								<td  style="width: 50px !important; padding: 2px;">
  									<img src="<?php echo e(asset('UploadedImages/contracts/').'/'.$contract->contract_scan); ?>"  style="width: 100% !important; ">
  								</td>
  								<td><?php echo e($contract->date); ?></td>
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
  								<td><?php echo e(number_format($contract->price)); ?> <span>تومان</span></td>
  								<td><?php echo e(number_format($contract->advance_paid)); ?> <span>تومان</span></td>
  								<td><?php echo e(number_format($contract->rent)); ?> <span>تومان</span></td>
  								<td><?php echo e($contract->contract_code); ?></td>
  								<td><?php echo e(number_format($contract->commission)); ?> <span>تومان</span></td>
  							</tr>
  						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  					</tbody>
  				</table>
        </div>


      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>