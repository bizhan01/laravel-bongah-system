@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>همه ی پروژه ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی پروژه ها</a></li>
			<li class="breadcrumb-item"><a href="">افزودن پروژه جدید</a></li>
			<li class="breadcrumb-item active">پروژه های تکمیل شده</li>
		</ol>


		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-1">
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
							<th>عملیات</th>
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
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="{{url('projectExpense').'/' .$project->project_id}}" title="مصارف">
										<i class="ti-bar-chart-alt text-info"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('editProject').'/' .$project->project_id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="#completed_{{$project->project_id}}" title="بایگانی" data-toggle='modal'>
										<i class="fa fa-check text-success"></i>
									</a>
	                @include('project.completed')
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('deleteProject').'/' .$project->project_id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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
