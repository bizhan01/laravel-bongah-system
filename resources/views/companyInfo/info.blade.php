@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>درباره شرکت</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">درباره شرکت</a></li>
			<li class="breadcrumb-item"><a href="">ویرایش اطلاعات</a></li>
			<li class="breadcrumb-item active">حذف</li>
		</ol>
    @include('companyInfo.addInfo')
		<div class="box box-block bg-white">
			@include('layouts.errors') </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> افزودن اطلاعات شرکت </a>
				<br></br>
				<div class="box bg-white product-view mb-2">
					@foreach($infos as $info)
					<div class="box-block">
						<div class="row">
							<div class="col-md-4 col-sm-5">
								<div class="pv-images mb-1 mb-sm-0">
									<div class="mb-1">
										<img class="img-fluid" src="{{ asset('../UploadedImages/about/').'/'.$info->logo}}" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-7">
								<div class="pv-content">
									<div class="pv-title">
										اطلاعات کامل شرکت
										<a class="text-danger" href="#"><i class="fa fa-star"></i></a>
									</div>
									<table class="table mb-md-0">
										<tr class="table-success">
											<td>اسم مجموعه:</td>
											<th>{{$info->company_name}}</th>
										</tr>
										<tr class="table-success">
											<td>ایمیل آدرس:</td>
											<th>{{ $info->company_email}}</th>
										</tr>
										<tr class="table-info">
											<td>تلفن مدیریت:</td>
											<th>{{ $info->company_cell_phone}}</th>
										</tr>
										<tr class="table-success">
											<td>آدرس سایت:</td>
											<th>{{ $info->company_website}}</th>
										</tr>
										<tr class="table-warning">
											<td>تلفن ثابت:</td>
											<th>{{ $info->company_phone}}</th>
										</tr>
										<tr class="table-success">
											<td>آدرس</td>
											<th>{{ $info->company_address}}</th>
										</tr>
										<tr class="table-success">
											<td>علمیات:</td>
											<th>
												<a href="#edit_{{$info->id}}" title="ویرایش" data-toggle='modal'>
													<i class="fa fa-edit text-success"></i>
												</a>

												@include('companyInfo.editInfo')
												&nbsp;&nbsp;&nbsp;
												<a  href="#delete_{{$info->id}}" title="حذف" data-toggle='modal'>
													<i class="ti ti-trash text-danger"></i>
												</a>
												@include('companyInfo.deleteInfo')
											</th>
										</tr>
									</table>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>

		</div>
	</div>
</div>
@endsection
