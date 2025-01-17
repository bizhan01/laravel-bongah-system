<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:31 GMT -->
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>ورود به سیستم کاربری</title>

		<!-- Vendor CSS -->
		<link rel="shortcat icon" type="image/x-icon" href="<?php echo e(asset('../img/logo/logo.png')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/bootstrap4-rtl/css/bootstrap.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/themify-icons/themify-icons.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/font-awesome/css/font-awesome.min.css')); ?>">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="css/core.css">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="img-cover" style="background-image: url(img/photos-1/5.jpg);">

		<div class="container-fluid">
			<div class="sign-form">
				<div class="row">
					<div class="col-md-4 offset-md-4 px-3">
						<div class="box b-a-0">
							<div class="p-2 text-xs-center">
								<img src="\img\logo\logo.png" height="60px" alt="" /><br></br>
								<h5>خوش آمدید</h5>
								<p>سیستم مدیریت مالی انستیتوت طبی ملت</p>
							</div>
							<form class="form-material mb-1" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

								<div class="form-group">
									<input type="email" id="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="exampleInputEmail" placeholder="ایمیل آدرس" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                  <?php if($errors->has('email')): ?>
                      <span class="invalid-feedback text-danger" role="alert" style="padding: 5px;">
                          <strong><?php echo e($errors->first('email')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
								<div class="form-group">
									<input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required id="exampleInputPassword" placeholder="گذرواژه">
                  <?php if($errors->has('password')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('password')); ?></strong>
                      </span>
                  <?php endif; ?>
								</div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                            <label class="form-check-label" for="remember">
                                <?php echo e(__('به خاطر داشته باش')); ?>

                            </label>
                        </div>
                    </div>
                </div>

								<div class="px-2 form-group mb-0">
									<button type="submit" class="btn btn-purple btn-block text-uppercase">وارد شدن</button>
								</div>
                <!-- <?php if(Route::has('password.request')): ?>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('گذرواژه را فراموش کردید؟')); ?>

                    </a>
                <?php endif; ?> -->

							</form>
              <br></br>
							<!-- <li>
							<span class="txt1">
								Don’t have an account?
							</span>
                <?php if(Route::has('register')): ?>
                    <a class="txt2" href="<?php echo e(route('register')); ?>">
                      <?php echo e(__('Sign Up')); ?>

                    </a>
                <?php endif; ?>
						</li> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jquery/jquery-1.12.3.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/tether/js/tether.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/bootstrap4-rtl/js/bootstrap.min.js')); ?>"></script>
	</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:31 GMT -->
</html>
