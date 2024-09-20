@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="PersianDateTimePicker\main.css">
<link rel="stylesheet" href="PersianDateTimePicker\js-persian-cal.css">
<script type="text/javascript" src="PersianDateTimePicker\js-persian-cal.min.js"></script>


<div class="content-area py-1">
	<div class="container-fluid">
		<h4>افزودن کاربر جدید</h4>

		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">افزودن کاربر جدید</a></li>
			<li class="breadcrumb-item"><a href="">لیست کاربران</a></li>
			<li class="breadcrumb-item active">کاربران مسدود شده</li>
		</ol>
		<div class="box box-block bg-white">
			<h5>فورم ثبت کاربر جدید:</h5>

			@include('layouts.errors')
			<form method="post" action="{{ route('createUser') }}" >
				{{ csrf_field() }}
				<div class="row">

					<div class="col-md-4">
						<div class="form-group">
							<label>جنسیت<span style="color: red">*</span></label>
							<select class="form-control" name="title" required>
								<option value=""></option>
								<option>آقای</option>
								<option>خانم</option>
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>نام<span style="color: red">*</span></label>
							<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus required placeholder="اسم کامل کاربر">
							@if ($errors->has('name'))
									<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
									</span>
							@endif
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>نام خانوادگی<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="lastName" placeholder="نام خانوادگی" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

			</div>

		<div class="row">

			<div class="col-md-4">
				<div class="form-group">
					<label>تلفن <span style="color: red">*</span></label>
					<input type="text" placeholder="0xxx-xxx-xxxx" data-mask="0999-999-9999" class="form-control" dir="ltr" name="phone" required>
				</div>
			</div>

			<div class="col-md-4">
					<div class="form-group">
						<label>آدرس فعلی<span style="color: red">*</span></label>
						 <input type="text" name="address" value="" class="form-control" required>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label>وظیفه<span style="color: red">*</span></label>
						<select class="form-control" name="type" required>
							<option value=""></option>
							<option value="2">مالک/مدیر سیستم</option>
							<option value="3">حسابدار</option>
							<option value="4">مشاور</option>
						</select>
					</div>
				</div>

			</div>

			<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>ایمیل آدرس<span style="color: red">*</span></label>
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required required placeholder="someone@domain.com">
							@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
							@endif
						</div>
					</div>


					<div class="col-md-4">
						<div class="form-group">
							<label  for="University Name" style="color:black">گذرواژه <span style="color: red">*</span></label>
							<input id="myInput" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="********** زبان ورودی تان باید انگلیسی باشد" >
							@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
						</div>
						<input type="checkbox" onclick="myFunction()"> نمایش گذرواژه
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label  for="Field of Study" style="color:black">تکرار گذرواژه <span style="color: red">*</span></label>
							<input id="myInput1" type="password" class="form-control"  name="password_confirmation"  required required placeholder="**********">
						</div>
					</div>
					<input type="checkbox" onclick="myFunction1()"> نمایش گذرواژه
	  	</div>

				<br>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
							<i class="ti-save"></i>
							<span>ذخیره</span>
						</button>
						<button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
							<i class="ti-loop"></i>
							<span>لغو</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>




@endsection
