<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:18:53 GMT -->
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>بنگاه</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/bootstrap4-rtl/css/bootstrap.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/themify-icons/themify-icons.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/font-awesome/css/font-awesome.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/animate.css/animate.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/jscrollpane/jquery.jscrollpane.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/waves/waves.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/switchery/dist/switchery.min.css')); ?>">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="css/core.css">

	</head>
	<body class="fixed-sidebar fixed-header skin-default">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader"></div>
			<!-- Sidebar -->
			<div class="site-overlay"></div>
			<div class="">
				<!-- Content -->
				<div class="content-area py-1">
					<div class="container-fluid">
						<div class="card">
							<?php $__currentLoopData = $company_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<center><br>
								<img src="\UploadedImages\about\<?php echo e($info->logo); ?>" height="60px" alt="" /><br>
								<strong><span> </span> <?php echo e($info->company_name); ?></strong><br>
								<strong><span> </span> مدیریت  املاک</strong><br>
							</center></br>
								<div class="card-block">
									<div class="row mb-2">
										<div class="col-sm-8 col-xs-6">
											<h5><span> </span> <?php echo e($info->company_name); ?></h5>
											<p><a class="text-primary" href="#"><span class="underline"><?php echo e($info->company_website); ?></span></a></p>
											<p><span> </span> آدرس:<br><?php echo e($info->company_address); ?></p>
										</div>
										<div class="col-sm-4 col-xs-6">
											<h5><span> </span>اطلاعات تماس:</h5>
											<div class="clearfix mb-0-25">
												<span class="float-xs-left"><span> </span>تلفن ثابت:</span>
												<span class="float-xs-right" dir="ltr"><?php echo e($info->company_phone); ?></span>
											</div>
											<div class="clearfix mb-0-25">
												<span class="float-xs-left"><span> </span>تلفن همراه:</span>
												<span class="float-xs-right" dir="ltr"><?php echo e($info->company_cell_phone); ?></span>
											</div>
											<div class="clearfix mb-0-25">
												<span class="float-xs-left"><span> </span>ایمیل آدرس:</span>
												<span class="float-xs-right" style="color: blue"><?php echo e($info->company_email); ?></span>
											</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<div class="card-block">
								<table class="table table-bordered table-striped mb-2" style="margin-top: -30px">
									<thead>
						        <tr>
											<th>#</th>
						          <th><span> </span>تاریخ</th>
						          <th><span> </span>مشاور</th>
						          <th><span> </span>اسم مشتری</th>
						          <th><span> </span>کد فایل</th>
						          <th><span> </span>نوع قرارداد</th>
						          <th><span> </span>کد قرارداد</th>
						          <th><span> </span>کمیسیون</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php $sum=0; ?>
						        <?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						          <tr>
												<td><?php echo e($row+1); ?></td>
						            <td><span> </span><?php echo e($contract->date); ?></td>
						            <td><span> </span>
						              <a href="<?php echo e(url('userInfo').'/' .$contract->user_id); ?>" title="اطلاعات مشتری" >
						                <?php echo e($contract->user_name); ?>

						              </a>
						            </td>
						            <td><span> </span>
						              <a href="<?php echo e(url('customerInfo').'/' .$contract->customer_id); ?>" title="اطلاعات مشتری" >
						                <?php echo e($contract->customer_name); ?>

						              </a>
						            </td>
						            <td><span> </span>
						              <a href="<?php echo e(url('fileInfo').'/' .$contract->file_id); ?>" title="اطلاعات فایل" >
						                <?php echo e($contract->file_id); ?>

						              </a>
						              </td>
						            <td><span> </span><?php echo e($contract->contract_type); ?></td>
						            <td><span> </span><?php echo e($contract->contract_code); ?></td>
						            <td><span> </span><?php echo e(number_format($contract->commission)); ?></td>
						          </tr>
						          <?php $sum += $contract->commission; ?>
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						        <tfoot>
						          <tr>
						            <th colspan="7"><span> </span>جمع کل کمیسیون های دریافت شده</th>
						            <th colspan="1"><span> </span><?php echo e(number_format($sum)); ?></th>
						          </tr>
						        </tfoot>
						      </tbody>
								</table>
							</div>
							<div class="card-footer clearfix hidden-print">
                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light">
  							<button type="button" class="btn btn-info label-left float-xs-right mr-0-5">
									<span class="btn-label"><i class="ti-printer"></i></span>
									چاپ
								</button>
								</a>
									<a href="<?php echo e(route('contractReport')); ?>"><button type="button" class="btn-warning" name="button" >برگشت</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jquery/jquery-1.12.3.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/tether/js/tether.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/bootstrap4-rtl/js/bootstrap.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/detectmobilebrowser/detectmobilebrowser.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jscrollpane/jquery.mousewheel.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jscrollpane/mwheelIntent.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jscrollpane/jquery.jscrollpane.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jquery-fullscreen-plugin/jquery.fullscreen-min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/waves/waves.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/switchery/dist/switchery.min.js')); ?>"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
	</body>


<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:18:53 GMT -->
</html>
