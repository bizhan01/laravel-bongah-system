@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>افزودن قرارداد جدید</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی قراردادها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن قرارداد جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>
		<div class="box box-block bg-white">
			<h5></h5>
		<div class="box box-block bg-white" style="margin-top: -35px">
			@if($success = session('success'))
				<div class="alert alert-success alert-dismissible fade in" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						</button>
					<div>
						<center>
							{{$success}}
							@foreach($contracts as $contract)
								<form method="POST" action="/archiveMyFile/{{$contract->file_id}}">
									<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
									<center class="modal-body">
										<p class="text-center">آیا مطمین به بایگانی فایل قرارداد شده استید؟</p>
										<h2 class="text-center">{{$contract->file_id}}</h2>
									</center>
									<input type="hidden" name="status" value="2">
								<div class="modal-footer">
										<button type="submit" name="edit" class="btn btn-info"><span class="fa fa-check"></span>  تایید و بایگانی نمودن</button>
								</div>
						 </form>
					 @endforeach
				 </center>
				</div>
			</div>
			@else
				  @include('layouts.errors')
			@endif

			 <form method="POST" action="{{ route('saveContract') }}" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  <div class="content-area py-1">
			    <div class="container-fluid">
			      <div class="box box-block bg-white">
			        <h5>فورم ثبت قرارداد جدید:</h5>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">تاریخ ثبت قرارداد:</label>
									<div class="col-sm-10">
									  <input type="text" name="date"  class="form-control pdate" placeholder="روز-ماه-سال" id="pdpF2" autocomplete="off" required>
									</div>
								</div>
							</div>

							<div class="form-material material-info">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">طرف قرارداد:</label>
									<div class="col-sm-10">
										<select class="form-control" name="customer_id" id='searchOptions' required>
											<option value="">انتخاب کنید</option>
											@foreach($customers as $customer)
												<option value="{{$customer->id}}">{{$customer->prefix}} {{$customer->name}} - {{$customer->father_name}} </option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

			        <div class="form-material material-primary">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">کد فایل:</label>
			            <div class="col-sm-10">
										<select class="form-control" name="file_id" id='searchOptions2' required>
											<option value="">انتخاب کنید</option>
											@foreach($files as $file)
												<option value="{{$file->id}}">{{$file->id}} - {{$file->file_model}} - {{$file->file_type}}</option>
											@endforeach
										</select>
			            </div>
			          </div>
			        </div>


							<div class="form-material material-success">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">نوع قرارداد:</label>
									<div class="col-sm-10">
										<select name="contract_type" class="form-control" id="deal_select" required style="padding:0px" required>
												<option value="">---------</option>
												<option id="aa">فروش</option>
												<option id="bb">اجاره</option>
												<option id="cc">رهن</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-material material-danger" id="a" style="display: none">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">قیمت:</label>
									<div class="col-sm-10">
										<input type="number" name="price"  class="form-control autonumber" value="0">
									</div>
								</div>
							</div>

							<div class="" id="b" style="display: none">
									<div class="form-material material-warning">
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">پول پیش:</label>
											<div class="col-sm-10">
												<input type="number" name="advance_paid"  class="form-control autonumber" value="0">
											</div>
										</div>
									</div>

									<div class="form-material material-primary">
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">کرایه:</label>
											<div class="col-sm-10">
												<input type="number" name="rent"  class="form-control autonumber" value="0">
											</div>
										</div>
									</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">کد قرارداد:</label>
									<div class="col-sm-10">
										<input type="text" name="contract_code" class="form-control" id="inputEmail3" placeholder="XXXX" required>
										<span>کد قرارداد نباید تکراری باشد!</span>
									</div>
								</div>
							</div>


							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">شروع قرارداد:</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" name="startDate" placeholder="روز-ماه-سال" id="pdpF22" class="form-control pdate" autocomplete="off" required>
										</div>
									</div>
								</div>
							</div>


							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">ختم قرارداد:</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" name="endDate" placeholder="روز-ماه-سال" id="pdpF222" class="form-control pdate" autocomplete="off">
										</div>
									</div>
								</div>
							</div>


							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">کمیسیون:</label>
									<div class="col-sm-10">
										<input type="number" name="commission" class="form-control" id="inputEmail3" placeholder="مبلغ توافقی کمیسیون را درج کنید." required>
									</div>
								</div>
							</div>

							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">اسکن قرارداد:</label>
									<div class="col-sm-10">
										<input type="file"  name="contract_scan" accept="image/*"  id="input-file-now" class="dropify" required>
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

$(document).ready(function(){

    // Initialize select2
    $("#searchOptions2").select2();

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
        $("#pdpF22").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF222").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

        //startDate is tomarrow
        var p = new persianDate();
        $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


    });
</script>

@endsection

<!--
***********************************************************
* ******************************************************* *
* * Author: Rahmatullah Bizhan                          * *
* * Email: rahmatullahbizhan@gmail.com                  * *
* * Please Kindly Report any error or bug you may face. * *
* * Contact me if you have any questions :)             * *
* ******************************************************* *
***********************************************************
-->
