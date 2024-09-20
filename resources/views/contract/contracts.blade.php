@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی قراردادها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی قراردادها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن قرارداد جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		@include('layouts.errors')

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>اسکن قرارداد</th>
							<th>تاریخ</th>
							<th>اسم مشتری</th>
							<th>کد فایل</th>
							<th>نوع قرارداد</th>
							<th>قیمت</th>
							<th>پول پیش</th>
							<th>کرایه</th>
							<th>کد قرارداد</th>
							<th>کمیسیون</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						@foreach($contracts as $row => $contract)
							<tr>
								<td>{{ $row+1 }}</td>
								<td  style="width: 50px !important; padding: 2px;">
									<a href="{{ asset('UploadedImages/contracts/').'/'.$contract->contract_scan}}"><img src="{{ asset('UploadedImages/contracts/').'/'.$contract->contract_scan}}"  style="width: 100% !important; "></a>
								</td>
								<td>{{ $contract->date}}</td>
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
								<td>{{ number_format($contract->price)}} <span>تومان</span></td>
								<td>{{ number_format($contract->advance_paid)}} <span>تومان</span></td>
								<td>{{ number_format($contract->rent)}} <span>تومان</span></td>
								<td>{{ $contract->contract_code}}</td>
								<td>{{ number_format($contract->commission)}} <span>تومان</span></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="{{url('contractInfo').'/' .$contract->id}}" title="جزئیات">
										<i class="ti-info-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('editContract').'/' .$contract->id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#archive_{{$contract->id}}" title="بایگانی" data-toggle='modal'>
										<i class="fa fa-archive text-info"></i>
									</a>
									@include('contract.archive')
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('deleteContract').'/' .$contract->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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
