@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی مشتریان</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی مشتریان</a></li>
			<li class="breadcrumb-item"><a href="">افزودن مشتری جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		@include('layouts.errors')

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table  class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>اسم</th>
							<th>اسم پدر /همسر</th>
							<th>نوع مشتری</th>
							<th>کد ملی</th>
							<th>تلفن</th>
							<th>آدرس فعلی</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						@foreach($customers as $row => $customer)
							<tr>
								<td>{{ $row+1 }}</td>
								<td>{{ $customer->prefix}} {{ $customer->name}}</td>
								<td>{{ $customer->father_name}}</td>
								<td>
									@if($customer->customer_type == 1)
										واگذار کننده
									@else
										گيرنده
									@endif
								</td>
						  	<td>{{ $customer->national_code}}</td>
								<td dir="ltr">{{ $customer->phone}}</td>
								<td>{{ $customer->address}}</td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="{{url('editCustomer').'/' .$customer->id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#archive_{{$customer->id}}" title="بایگانی" data-toggle='modal'>
										<i class="ti ti-archive text-info"></i>
									</a>
	                @include('customer.archive')
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('deleteCustomer').'/' .$customer->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
										<i class="ti ti-trash text-danger"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
