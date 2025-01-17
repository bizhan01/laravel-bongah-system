@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>آرشیو فایل ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی فایل ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن فایل جدید</a></li>
			<li class="breadcrumb-item active">آرشیو </li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>کد فایل</th>
							<th>مالک</th>
							<th>مدل فایل</th>
							<th>نوع فایل</th>
							<th>قیمت</th>
							<th>پول پیش</th>
							<th>کرایه</th>
							<th>موقعیت</th>
							<th>مساحت</th>
							<th>پارکنیگ</th>
							<th>آنسانسور</th>
							<th>طبقه</th>
							<th>تاریخ ساخت</th>
							<th>تاریخ تحویل</th>
							<th>آدرس</th>
						</tr>
					</thead>
					<tbody>
						@foreach($files as $row => $file)
							<tr>
								<td>{{ $row+1 }}</td>
								<td>{{ $file->id}}</td>
								<td>{{ $file->name}}</td>
								<td>{{ $file->file_model}}</td>
								<td>{{ $file->file_type}}</td>
								<td>{{ $file->price}}</td>
								<td>{{ $file->advance_paid}}</td>
								<td>{{ $file->rent}}</td>
								<td>{{ $file->location}}</td>
								<td>{{ $file->space}}</td>
								<td>{{ $file->parking}}</td>
								<td>{{ $file->lift}}</td>
								<td>{{ $file->stage}}</td>
								<td>{{ $file->manufacture_date}}</td>
								<td>{{ $file->delivery_date}}</td>
								<td>{{ $file->address}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
