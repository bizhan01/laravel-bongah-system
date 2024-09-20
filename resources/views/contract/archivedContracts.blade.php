@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>قراردادهای بایگانی شده</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی قراردادها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن قرارداد جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>اسکن قرارداد</th>
							<th>اسم مشتری</th>
							<th>کد فایل</th>
							<th>نوع قرارداد</th>
							<th>قیمت</th>
							<th>پول پیش</th>
							<th>کرایه</th>
							<th>کد قرارداد</th>
						</tr>
					</thead>
					<tbody>
						@foreach($contracts as $row => $contract)
							<tr>
								<td>{{ $row+1 }}</td>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="{{ asset('UploadedImages/contracts/').'/'.$contract->contract_scan}}"  style="width: 100% !important; ">
								</td>
								<td>
									<a href="{{url('customerInfo').'/' .$contract->customer_id}}" title="اطلاعات مشتری" >
										{{ $contract->customer_name}}
									</a>
								</td>
								<td>
									<a href="{{url('fileInfo').'/' .$contract->file_id}}" title="اطلاعات فایل" >
										{{ $contract->file_id}}
									</a>
									</td>
								<td>{{ $contract->contract_type}}</td>
								<td>{{ number_format($contract->price)}} <span style="color: blue">تومان</span></td>
								<td>{{ number_format($contract->advance_paid)}} <span style="color: blue">تومان</span></td>
								<td>{{ number_format($contract->rent)}} <span style="color: blue">تومان</span></td>
								<td>{{ $contract->contract_code}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
