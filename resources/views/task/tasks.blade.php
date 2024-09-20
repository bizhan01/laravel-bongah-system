@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>یاداشت های من</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">همه ی یاداشت ها</a></li>
			<li class="breadcrumb-item"><a href="">یاداشت های کامل شده</a></li>
			<li class="breadcrumb-item active">سایر</li>
		</ol>
    @include('task.addTask')
		<div class="box box-block bg-white">
			@include('layouts.errors') </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> افزودن مورد جدید</a>
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable">
					<thead>
						<tr>
							<th>وضعیت</th>
							<th>عنوان</th>
							<th>توضیحات</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($tasks as $task)
							<tr>
								<td>
									@if($task->status == 1)
										<span class="btn btn-rounded btn-sm btn-danger "><li class="fa fa-spinner fa-spin fa-fw"></li></button>
									@else
										<span class="btn btn-rounded btn-sm btn-success fa fa-check"></span>
									@endif
								</td>
								<td>{{$task->title}}</td>
								<td>{{ $task->description}}</td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="#status_{{$task->id}}" title="تغییر وضعیت" data-toggle='modal'>
										<i class="fa  fa-hourglass-half text-info"></i>
									</a>
                  @include('task.changeStatus')

									&nbsp;&nbsp;&nbsp;
									<a href="#edit_{{$task->id}}" title="ویرایش" data-toggle='modal'>
										<i class="fa fa-edit text-success"></i>
									</a>

                  @include('task.editTask')
									&nbsp;&nbsp;&nbsp;
									<a  href="#delete_{{$task->id}}" title="حذف" data-toggle='modal'>
										<i class="ti ti-trash text-danger"></i>
									</a>
									@include('task.deleteTask')
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
