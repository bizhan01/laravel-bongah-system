@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی اطلاعات مشتری</h3></center>
        <form action = "/updateCustomer/<?php echo $customer[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">
            <input type="hidden" name="user_id" value="<?php echo $customer[0]->user_id; ?>">
						<div class="col-md-3">
							<div class="form-group">
								<label>نوع مشتری<span style="color: red">*</span></label>
								<select class="form-control" name="customer_type" required>
									<option>
                    <?php
                     if($customer[0]->customer_type == 1)
  										echo "واگذار کننده";
  									 else
  										echo "گيرنده";
                     ?>
                  </option>
                  <option value="1">واگذار کننده</option>
                  <option value="2">گيرنده</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>عنوان<span style="color: red">*</span></label>
								<select class="form-control" name="prefix" required>
									<option><?php echo $customer[0]->prefix; ?></option>
									<option>آقای</option>
									<option>خانم</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>نام<span style="color: red">*</span></label>
								<input id="name" type="text" class="form-control" name="name" value="<?php echo $customer[0]->name; ?>" required autofocus required placeholder="اسم کامل کاربر">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>نام پدر / همسر<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="father_name" value="<?php echo $customer[0]->father_name; ?>" placeholder="نام خانوادگی" required>
								<span class="font-90 text-muted"></span>
							</div>
						</div>


				</div>

			<div class="row">

        <div class="col-md-4">
          <div class="form-group">
            <label>کد ملی<span style="color: red">*</span></label>
             <input type="text" name="national_code" value="<?php echo $customer[0]->national_code; ?>" class="form-control" required>
          </div>
        </div>

					<div class="col-md-4">
							<div class="form-group">
								<label>شماره تلفن<span style="color: red">*</span></label>
								 <input type="text" name="phone" value="<?php echo $customer[0]->phone; ?>" class="form-control" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>آدرس<span style="color: red">*</span></label>
								 <input type="text" name="address" value="<?php echo $customer[0]->address; ?>" class="form-control" required>
							</div>
						</div>

				</div>

        <div class="row">
         <div class="col-md-3">
            <div class="form-group">
              <label for="">اعمال عملیات</label><br>
              <input type="submit" name="submit" value="ذخیره" class="btn btn-success">
             <input type="reset"  value="لغو" class="btn btn-warning ">
            </div>
          </div>
        </div>

			 @include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>
@endsection
