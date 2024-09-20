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
						<div class="col-lg-12">
							<div class="col-lg-12" >
								<center>
									<img src="\img\logo\logo.png" height="60px" alt="" /><br>
									<strong>بنگاه ملت</strong><br>
									<strong>مدیریت  املاک</strong><br>
									</br>
								</center>
								<table class="table mb-md-0">
									<tr class="table-success">
										<td><span> </span>مشتری:</td>
										<th><span> </span><?php echo $expenses[0]->project_id; ?></th>
										<td><span> </span>مساحت:</td>
										<th><span> </span><?php echo $expenses[0]->space; ?></th>
									</tr>
									<tr class="table-info">
										<td><span> </span>نوع پروژه:</td>
										<th><span> </span><?php echo $expenses[0]->project_type; ?></th>
										<td><span> </span>تاریخ شروع:</td>
										<th><span> </span><?php echo $expenses[0]->start_date; ?></th>
									</tr>
									<tr class="table-warning">
										<td><span> </span>موقعیت:</td>
										<th><span> </span><?php echo $expenses[0]->location; ?></th>
										<td><span> </span>تاریخ تحویل:</td>
										<th><span> </span><?php echo $expenses[0]->end_date; ?></th>
									</tr>
								</table>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th><span> </span>شماره</th>
													<th><span> </span>تاریخ</th>
													<th><span> </span>جنس/کالا</th>
													<th><span> </span>قیمت / هزینه</th>
												</tr>
											</thead>
											<tbody>
												<?php $sum=0; ?>
										  	<?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
														<td><span> </span><?php echo e($row+1); ?></td>
														<td><span> </span><?php echo e($expense->date); ?></td>
														<td><span> </span><?php echo e($expense->item); ?></td>
														<td><span> </span><?php echo e(number_format($expense->cost)); ?></td>
													</tr>
													<?php $sum += $expense->cost; ?>
	 						           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 						           <tfoot>
	 						             <tr>
	 						               <th colspan="3"><span> </span>جمع کل مصارف/هزینه ها در این پروژه</th>
	 						               <th colspan="1"><?php echo e(number_format($sum)); ?></th>
	 						             </tr>
	 						           </tfoot>
											</tbody>
										</table>
										<strong class="float-xs-left"><span> </span>امضا و مهر مسول مالی</strong>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer clearfix hidden-print">
					<a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light">
					<button type="button" class="btn btn-info label-left float-xs-right mr-0-5">
						<span class="btn-label"><i class="ti-printer"></i></span>
						چاپ
					</button>
					</a>
						<a href="/"><button type="button" class="btn-warning" name="button" >برگشت</button></a>
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
