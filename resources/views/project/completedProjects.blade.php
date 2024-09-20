@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>پروژه های تکمیل شده</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی پروژه ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن پروژه جدید</a></li>
			<li class="breadcrumb-item active">پروژه های تکمیل شده</li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>#</th>
							<th>تاریخ ثبت</th>
							<th>مالک پروژه</th>
							<th>نوع پروژه</th>
							<th>موقعیت</th>
							<th>مساحت</th>
							<th>تاریخ ساخت</th>
							<th>تاریخ تحویل</th>
						</tr>
					</thead>
					<tbody>
						@foreach($projects as $row => $project)
							<tr>
								<td>{{ $row+1 }}</td>
								<td>{{ $project->date}}</td>
								<td>{{ $project->prefix}} {{ $project->name}}</td>
								<td>{{ $project->project_type}}</td>
								<td>{{ $project->location}}</td>
								<td>{{ $project->space}}</td>
								<td>{{ $project->start_date}}</td>
								<td>{{ $project->end_date}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
