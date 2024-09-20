@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>افزودن مشتری جدید</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی مشتریان</a></li>
			<li class="breadcrumb-item"><a href="">افزودن مشتری جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>
		<div class="box box-block bg-white">
			<h5></h5>
		<div class="box box-block bg-white" style="margin-top: -35px">
			 <form method="POST" action="{{ route('saveCustomer') }}" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  @include('layouts.errors')
			  <div class="content-area py-1">
			    <div class="container-fluid">
			      <div class="box box-block bg-white">
			        <h5>فرم افزودن مشتری جدید:</h5>

							<div class="form-material material-info">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">نوع مشتری: <span style="color: red">*</span></label>
									<div class="col-sm-10">
										<select name="customer_type" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option value="1">واگذار کننده</option>
												<option value="2">گيرنده</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-material material-info">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">عنوان: <span style="color: red">*</span></label>
									<div class="col-sm-10">
										<select name="prefix" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>آقای</option>
												<option>خانم</option>
										</select>
									</div>
								</div>
							</div>

			        <div class="form-material material-primary">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">اسم: <span style="color: red">*</span></label>
			            <div class="col-sm-10">
			              <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="اسم کوچک + فامیلی" required >
			            </div>
			          </div>
			        </div>

							<div class="form-material material-success">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">اسم پدر/همسر: <span style="color: red">*</span></label>
									<div class="col-sm-10">
										<input type="text" name="father_name" class="form-control" id="inputEmail3" placeholder="اسم پدر/همسر" required>
									</div>
								</div>
							</div>

							<div class="form-material material-danger">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">کد ملی:</label>
									<div class="col-sm-10">
										<input type="text" name="national_code" data-mask="999-99-999-9999-9" class="form-control" id="inputEmail3" placeholder="کد ملی" >
									</div>
								</div>
							</div>

							<div class="form-material material-warning">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">تلفن: <span style="color: red">*</span></label>
									<div class="col-sm-10">
										 <input type="text" name="phone"  placeholder="0xxx-xxx-xxxx" data-mask="0999-999-9999" class="form-control" dir="ltr"  required style="text-align: right">
										 <span>شماره تلفن تکراری نباید باشد.</span>
									</div>
								</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">آدرس: <span style="color: red">*</span></label>
									<div class="col-sm-10">
										<input type="text" name="address" class="form-control" id="inputEmail3" placeholder="آدرس" required>
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
@endsection
