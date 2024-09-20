@extends('layouts.master')
@section('content')
<script src="js/jquery.min.js"> </script>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>گزارشات قراردادها</h4>
		<ul class="nav nav-tabs" role="tablist" style="color: red !important;">
			<li class="nav-item" >
				<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" >همه ی قراردادها</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">آرشیو</a>
			</li>
		</ul>
		<div class="tab-content box box-block bg-white b-t-0 mb-2">
			<div class="tab-pane active" id="tab-1" role="tabpanel">
				@include('report.contract.allContracts')
			</div>
			<div class="tab-pane" id="tab-2" role="tabpanel">
				@include('report.contract.archive')
			</div>
		</div>
	</div>
</div>
@endsection
