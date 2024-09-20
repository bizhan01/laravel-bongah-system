@if(auth()->user()->type == 1 && auth()->user()->status == 1)
	@include('superAdminDashborad')
@elseif(auth()->user()->type == 2 && auth()->user()->status == 1)
	@include('adminDashborad')
@elseif(auth()->user()->type == 3 && auth()->user()->status == 1)
	@include('accounterDashborad')
@elseif(auth()->user()->type == 4 && auth()->user()->status == 1)
	@include('adviserDashborad')
@else
	  @include('blocked')
@endif
