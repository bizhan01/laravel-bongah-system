@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>گزارشات فایل ها</h4>
		<ul class="nav nav-tabs" role="tablist" style="color: red !important;">
			<li class="nav-item" >
				<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" >همه ی فایل ها</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">آرشیو</a>
			</li>
		</ul>
		<div class="tab-content box box-block bg-white b-t-0 mb-2">
			<div class="tab-pane active" id="tab-1" role="tabpanel">
				@include('report.file.allFiles');
			</div>
			<div class="tab-pane" id="tab-2" role="tabpanel">
				@include('report.file.archive');
			</div>
		</div>
	</div>
</div>
@endsection
