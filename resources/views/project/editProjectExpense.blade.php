@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی اطلاعات مصارف /هزینه های پروژه</h3></center>
        <form action = "/updateProjectExpense/<?php echo $expense[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">
              <input type="hidden" name="project_id" value="<?php echo $expense[0]->project_id; ?>">
						<div class="col-md-4">
							<div class="form-group">
								<label>تاریخ<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="date" value="<?php echo $expense[0]->date; ?>" required placeholder="روز-ماه-سال" id="pdpF2" autocomplete="off" >
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>جنس/کالا<span style="color: red">*</span></label>
								<input  type="text" class="form-control" name="item" value="<?php echo $expense[0]->item; ?>" required  placeholder="جنس/کالا">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>قیمت/هزینه<span style="color: red">*</span></label>
								<input type="number" min="1" class="form-control" name="cost" value="<?php echo $expense[0]->cost; ?>" placeholder="قیمت/هزینه" required>
								<span class="font-90 text-muted"></span>
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


  <script src="../../Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
  <script src="../../Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
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
