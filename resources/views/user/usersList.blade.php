@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست کاربران</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">افزودن کاربر جدید</a></li>
			<li class="breadcrumb-item"><a href="">لیست کاربران</a></li>
			<li class="breadcrumb-item active">کاربران مسدود شده</li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>آقا/خانم</th>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<th>وظیفه</th>
							<td>تلفن</td>
							<td>آدرس فعلی</td>
							<td>ایمیل آدرس</td>
							<td>عملیات</td>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="{{ asset('UploadedImages/').'/'.$user->profileImage}}"  style="width: 100% !important; ">
								</td>
								<td>{{ $user->created_at}}</td>
								<td>{{ $user->name}}</td>
								<td>{{ $user->lastName}}</td>
								<td>
									@if($user->type == 2)
									 مدیر سیستم
									@elseif($user->type == 3)
									حسابدار
									@elseif($user->type == 4)
									مشاور
									@else
									@endif
								</td>
								<td dir="ltr">{{ $user->phone}}</td>
								<td>{{ $user->address}}</td>
								<td>{{ $user->email}}</td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="{{url('editUser').'/' .$user->id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href = 'blockUser/{{ $user->id }}'> <i class="fa fa-ban text-warning"></i></a>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('deleteUser').'/' .$user->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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
