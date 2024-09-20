@extends('layouts.master')
@section('content')
<script src="js/jquery.min.js"> </script>
<script src="js/jquery.custom.js"> </script>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>افزودن فایل جدید</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی فایل ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن فایل جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>
		<div class="box box-block bg-white">
			<h5></h5>
			@if(session('file_id'))
				<div class="alert alert-success-fill alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<span>فایل جدید با کد ذیل ذخیره شد!</span><br>
					<h1>{{ session('file_id') }}</h1>
				</div>
				@else
				  @include('layouts.errors')
				@endif
			</br>
		<div class="box box-block bg-white" style="margin-top: -35px">
			 <form method="POST" action="{{ route('saveFile') }}" enctype="multipart/form-data">
			  {{ csrf_field() }}

			  <div class="content-area py-1">
			    <div class="container-fluid">
			      <div class="box box-block bg-white">
			        <h5>فورم افزودن فایل:</h5>

							<div class="form-material material-info">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">مشتری</label>
									<div class="col-sm-10">
											<select class="form-control" name="owner_id" id='searchOptions' required>
												<option value="">انتخاب کنید</option>
				                	@foreach($customers as $customer)
												  	<option value="{{$customer->id}}">{{$customer->prefix}} {{$customer->name}} - {{$customer->father_name}}</option>
				                	@endforeach
											</select>
									</div>
								</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">مدل فایل</label>
									<div class="col-sm-10">
										<select name="file_model" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>خانه</option>
												<option>مغازه</option>
												<option>سوله</option>
												<option>انبار</option>
												<option>باغ</option>
												<option>زمین خالی</option>
												<option>سایر</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">نوع فایل</label>
									<div class="col-sm-10">
										<select name="file_type" class="form-control" id="deal_select" required >
												<option value="">---------</option>
												<option id="aa">فروش</option>
												<option id="bb">اجاره</option>
												<option id="cc">رهن</option>
										</select>
									</div>
								</div>
							</div>




							<div class="form-material material-success" id="a" style="display: none">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">قیمت</label>
									<div class="col-sm-10">
										<input type="number" name="price"  class="form-control autonumber" value="0">
									</div>
								</div>
							</div>

							<div class="" id="b" style="display: none">

								<div class="form-material material-danger" >
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">پول پیش</label>
										<div class="col-sm-10">
											<input type="number" name="advance_paid"  class="form-control autonumber" value="0">
										</div>
									</div>
								</div>

								<div class="form-material material-warning" >
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">کرایه</label>
										<div class="col-sm-10">
											<input type="text" name="rent"  class="form-control autonumber" value="0">
										</div>
									</div>
								</div>

							</div>

							<div class="form-material material-info">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">موقعیت</label>
									<div class="col-sm-10">
										  <input type="text" name="location" class="form-control" id="inputEmail3" placeholder="لطفا آدرس دقیق فایل را درج کنید" required>
									</div>
								</div>
							</div>

			        <div class="form-material material-primary">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">مساحت</label>
			            <div class="col-sm-10">
			              <input type="number" name="space" class="form-control" id="inputEmail3" placeholder="لطفا مساحت به متر مربع درج کنید." required>
			            </div>
			          </div>
			        </div>

							<div class="form-material material-success">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">پارکینگ</label>
									<div class="col-sm-10">
										<select name="parking" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>دارد</option>
												<option>ندارد</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-material material-danger">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">آسانسور</label>
									<div class="col-sm-10">
										<select name="lift" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>دارد</option>
												<option>ندارد</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-material material-warning">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">طبقه</label>
									<div class="col-sm-10">
										<select name="stage" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>اول</option>
												<option>دوم</option>
												<option>سوم</option>
												<option>چهارم</option>
												<option>پنجم</option>
												<option>ششم</option>
												<option>هفتم</option>
												<option>هشتم</option>
												<option>نهم</option>
												<option>دهم</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">تاریخ ساخت</label>
									<div class="col-sm-10">
										<div class="input-group">
											<!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
									    <!-- <input type="text" name="manufacture_date" id="pcal2" class="form-control pdate"> -->
											<select class="form-control" name="manufacture_date" required>
												<option value="">---------</option>
												<?php
													for ($x = 1350; $x <= 1401; $x++) {?>
															<option><?php echo " $x "; ?></option>
												 <?php
													}	?>
											</select>
									  </div>
									</div>
								</div>
							</div>

							<div class="form-material material-warning">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">تاریخ تحویل</label>
									<div class="col-sm-10">
										<div class="input-group">
									    <input type="text" name="delivery_date"  class="form-control pdate" placeholder="روز-ماه-سال" id="pdpF2" autocomplete="off">
									  </div>
									</div>
								</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">آدرس</label>
									<div class="col-sm-10">
										<input type="text" name="address" class="form-control" id="inputEmail3" placeholder="آدرس" required>
									</div>
								</div>
							</div>

							<div class="form-material material-danger">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">تغییر پذیر</label>
									<div class="col-sm-10">
										<select name="convertible" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>بلی</option>
												<option>خیر</option>
										</select>
									</div>
								</div>
							</div>


							<div class="form-material material-primary">
								<div class="form-group row">
									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">عکس اول</label>
										<input type="file"  name="img1" accept="image/*"  id="input-file-now" class="dropify" />
									</div>
									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">عکس دوم</label>
										<input type="file"  name="img2" accept="image/*"  id="input-file-now" class="dropify" />
									</div>
									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">عکس سوم</label>
										<input type="file"  name="img3" accept="image/*"  id="input-file-now" class="dropify" />
									</div>
									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">عکس چهارم</label>
										<input type="file"  name="img4" accept="image/*"  id="input-file-now" class="dropify" />
									</div>
								</div>
							</div>

			        <div class="row form-group">
			          <div class="col-md-6">
			            <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded" style="background-color: #a9c83e;">
			            <input type="reset" name="reset" value="لغو" class="btn btn-rounded bg-warning ">
			          </div>
			       </div>
			      </div>
			    </div>
			  </div>
			</form>
		</div>
		</div>
	</div>
</div>




<!-- Search Options  -->
<script>
$(document).ready(function(){

    // Initialize select2
    $("#searchOptions").select2();

    // Read selected option
    $('#but_read').click(function(){
        var username = $('#selUser option:selected').text();
        var userid = $('#selUser').val();

        $('#result').html("id : " + userid + ", name : " + username);
    });
});
</script>

<script src="Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
<script src="Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
<script>
    $(function () {
        //usage
        $(".usage").persianDatepicker();

        //formatting
        $("#pdpF1").persianDatepicker({ formatDate: "YYYY/MM/DD 0h:0m:0s:ms" });
        $("#pdpF2").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF22").persianDatepicker({ formatDate: "YYYY" });
        $("#pdpF222").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

        //startDate is tomarrow
        var p = new persianDate();
        $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


    });
</script>


@endsection
