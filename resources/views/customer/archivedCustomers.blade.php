@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>آرشیو مشتریان</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی مشتریان</a></li>
			<li class="breadcrumb-item"><a href="">افزودن مشتری جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		@include('layouts.errors')

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>آقا/خانم</th>
							<th>اسم</th>
							<th>اسم پدر /همسر</th>
							<th>نوع مشتری</th>
							<th>کد ملی</th>
							<th>تلفن</th>
							<th>آدرس فعلی</th>
						</tr>
					</thead>
					<tbody>
						@foreach($customers as $row => $customer)
							<tr>
								<td>{{ $row+1 }}</td>
								<td>{{ $customer->prefix}}</td>
								<td>{{ $customer->name}}</td>
								<td>{{ $customer->father_name}}</td>
								<td>
									@if($customer->customer_type == 1)
										واگذار کننده
									@else
										گيرنده
									@endif
								</td>
								<td>{{ $customer->national_Id}}</td>
								<td>{{ $customer->phone}}</td>
								<td>{{ $customer->address}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
