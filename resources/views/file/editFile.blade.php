@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی اطلاعات فایل</h3></center>
        <form action = "/updateFile/<?php echo $file[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">

						<div class="col-md-4">
							<div class="form-group">
								<label>مالک<span style="color: red">*</span></label>
								<select class="form-control" name="owner_id" required>
									<option value="<?php echo $file[0]->owner_id; ?>"><?php echo $file[0]->prefix; ?> <?php echo $file[0]->name; ?></option>
                  @foreach($customers as $customer)
									<option value="{{$customer->id}}">{{$customer->name}}</option>
                  @endforeach
								</select>
							</div>
						</div>

            <div class="col-md-4">
              <div class="form-group">
                <label>مدل فایل<span style="color: red">*</span></label>
                 <select name="file_model" class="form-control" id="inputEmail3" required style="padding:0px">
                     <option value="<?php echo $file[0]->file_model; ?>"><?php echo $file[0]->file_model; ?></option>
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

						<div class="col-md-4">
							<div class="form-group">
								<label>نوع فایل<span style="color: red">*</span></label>
                <select name="file_type" class="form-control" id="inputEmail3" required style="padding:0px">
                    <option value="<?php echo $file[0]->file_type; ?>"><?php echo $file[0]->file_type; ?></option>
                    <option>فروش</option>
                    <option>اجاره</option>
                    <option>رهن</option>
                </select>
							</div>
						</div>
				</div>

        <div class="row">

          <div class="col-md-4">
            <div class="form-group">
              <label>قیمت</label>
              <input type="text" class="form-control" name="price" value="<?php echo $file[0]->price; ?>" placeholder="نام خانوادگی" >
              <span class="font-90 text-muted"></span>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>پول پیش</label>
               <input type="text" name="advance_paid" value="<?php echo $file[0]->advance_paid; ?>" class="form-control" >
            </div>
          </div>

            <div class="col-md-4">
                <div class="form-group">
                  <label>کرایه</label>
                   <input type="text" name="rent" value="<?php echo $file[0]->rent; ?>" class="form-control" >
                </div>
              </div>
          </div>

        <div class="row">

          <div class="col-md-4">
            <div class="form-group">
              <label>موقعیت<span style="color: red">*</span></label>
               <input type="text" name="location" value="<?php echo $file[0]->location; ?>" class="form-control" required>
            </div>
          </div>

            <div class="col-md-4">
                <div class="form-group">
                  <label>مساحت<span style="color: red">*</span></label>
                   <input type="text" name="space" value="<?php echo $file[0]->space; ?>" class="form-control" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>پارکنیگ<span style="color: red">*</span></label>
                   <select name="parking" class="form-control" id="inputEmail3" required style="padding:0px">
                       <option value="<?php echo $file[0]->parking; ?>"><?php echo $file[0]->parking; ?></option>
                       <option>دارد</option>
                       <option>ندارد</option>
                   </select>
                </div>
              </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label>آسانسور<span style="color: red">*</span></label>
                 <select name="lift" class="form-control" id="inputEmail3" required style="padding:0px">
                     <option value="<?php echo $file[0]->lift; ?>"><?php echo $file[0]->lift; ?></option>
                     <option>دارد</option>
                     <option>ندارد</option>
                 </select>
              </div>
            </div>

              <div class="col-md-4">
                  <div class="form-group">
                    <label>طبقه<span style="color: red">*</span></label>
                     <select name="stage" class="form-control" id="inputEmail3" required style="padding:0px">
                         <option value="<?php echo $file[0]->stage; ?>"><?php echo $file[0]->stage; ?></option>
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

                <div class="col-md-4">
                  <div class="form-group">
                    <label>تاریخ ساخت<span style="color: red">*</span></label>
                     <!-- <input type="text" name="manufacture_date" value="<?php echo $file[0]->manufacture_date; ?>" class="form-control" required placeholder="روز-ماه-سال" id="pdpF22" autocomplete="off"> -->
                     <select class="form-control" name="manufacture_date" required>
                       <option value=""><?php echo $file[0]->manufacture_date; ?></option>
                       <?php
                         for ($x = 1350; $x <= 1401; $x++) {?>
                             <option><?php echo " $x "; ?></option>
                        <?php
                         }	?>
                     </select>
                  </div>
                </div>

            </div>

			<div class="row">

        <div class="col-md-4">
          <div class="form-group">
            <label>تاریخ تحویل<span style="color: red">*</span></label>
             <input type="text" name="delivery_date" value="<?php echo $file[0]->delivery_date; ?>" class="form-control" placeholder="روز-ماه-سال" id="pdpF2" required>
          </div>
        </div>

					<div class="col-md-8">
							<div class="form-group">
								<label>آدرس<span style="color: red">*</span></label>
								 <input type="text" name="address" value="<?php echo $file[0]->address; ?>" class="form-control" required>
							</div>
						</div>

				</div>

        <div class="row">

          <div class="col-md-3">
            <div class="form-group">
              <label>عکس اول</label>
              <input type="hidden" name="img1" value="<?php echo $file[0]->img1; ?>">
              <input type="file" name="img1" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/files/<?php echo $file[0]->img1; ?>" />
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>عکس اول</label>
              <input type="hidden" name="img2" value="<?php echo $file[0]->img2; ?>">
              <input type="file" name="img2" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/files/<?php echo $file[0]->img2; ?>" />
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>عکس اول</label>
              <input type="hidden" name="img3" value="<?php echo $file[0]->img3; ?>">
              <input type="file" name="img3" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/files/<?php echo $file[0]->img3; ?>" />
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>عکس اول</label>
              <input type="hidden" name="img4" value="<?php echo $file[0]->img4; ?>">
              <input type="file" name="img4" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/files/<?php echo $file[0]->img4; ?>" />
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


  <script src="../Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
  <script src="../Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
  <script>
      $(function () {
          //usage
          $(".usage").persianDatepicker();

          //formatting
          $("#pdpF1").persianDatepicker({ formatDate: "YYYY/MM/DD 0h:0m:0s:ms" });
          $("#pdpF2").persianDatepicker({ formatDate: "YYYY-0M-0D" });
          $("#pdpF22").persianDatepicker({ formatDate: "YYYY-0M-0D" });
          $("#pdpF222").persianDatepicker({ formatDate: "YYYY-0M-0D" });
          $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

          //startDate is tomarrow
          var p = new persianDate();
          $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


      });
  </script>
@endsection
