@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="navbar navbar-light bg-white b-a mb-2">
      <center><h3>دفتر روزانه</h3></center> <hr>
      <!-- User List -->
        <div class="with-sub <?php if (Auth::user()->type == '3' || Auth::user()->type == '4'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار کابران:</h5>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>آقا/خانم</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>وظیفه</th>
                <th>تلفن</th>
                <th>آدرس فعلی</th>
                <th>ایمیل آدرس</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->title}}</td>
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
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!--projects  -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '4'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار پروژه ها:</h5>
          <table class="table table-striped table-bordered ">
            <thead>
              <tr>
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
              @foreach($projects as $project)
                <tr>
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

        <!--projects expense -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '4'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار مصارف در پروژه ها:</h5>
          <table class=" table  table-striped">
            <thead>
              <tr>
                <th>کد پروژه</th>
                <th>تاریخ </th>
                <th>جنس</th>
                <th>قیمت</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projectExpenses as $projectExpens)
              <tr>
                <td>{{$projectExpens->project_id}}</td>
    						<td>{{$projectExpens->date}}</td>
    						<td>{{$projectExpens->item}}</td>
    						<td>{{number_format($projectExpens->cost)}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>


        <!--Customer-->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار مشتریان:</h5>
          <table  class="table table-striped table-bordered " >
            <thead>
              <tr>
                <th>اسم</th>
                <th>اسم پدر /همسر</th>
                <th>نوع مشتری</th>
                <th>کد ملی</th>
                <th>تلفن</th>
                <th>آدرس فعلی</th>
              </tr>
            </thead>
            <tbody>
              @foreach($customers as $customer)
                <tr>
                  <td>{{ $customer->prefix}} {{ $customer->name}}</td>
                  <td>{{ $customer->father_name}}</td>
                  <td>
                    @if($customer->customer_type == 1)
                      واگذار کننده
                    @else
                      گيرنده
                    @endif
                  </td>
                  <td>{{ $customer->national_code}}</td>
                  <td dir="ltr">{{ $customer->phone}}</td>
                  <td>{{ $customer->address}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>

        <!--files -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار فایل ها:</h5>
          <table class="table table-striped table-bordered" >
  				<thead>
  					<tr>
  						<th data-priority="1">کد فایل</th>
  						<th data-priority="1">مالک</th>
  						<th data-priority="1">مدل فایل</th>
  						<th data-priority="1">نوع فایل</th>
  						<th data-priority="1">قیمت</th>
  						<th data-priority="1">پول پیش</th>
  						<th data-priority="1">کرایه</th>
  						<th data-priority="1">موقعیت</th>
  						<th data-priority="3">مساحت</th>
  						<th data-priority="6">آدرس</th>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($files as $file)
  						<tr>
  							<td>
  								<a href="{{url('fileInfo').'/' .$file->id}}" title="اطلاعات فایل" >
  									{{$file->id}}
  								</a>
  							</td>
  							<td>{{ $file->id}}</td>
  							<td>{{ $file->file_model}}</td>
  							<td>{{ $file->file_type}}</td>
  							<td>{{ number_format($file->price)}} <span style="color: blue">تومان</span></td>
  							<td>{{ number_format($file->advance_paid)}} <span style="color: blue">تومان</span></td>
  							<td>{{ number_format($file->rent)}} <span style="color: blue">تومان</span></td>
  							<td>{{ $file->location}}</td>
  							<td>{{ $file->space}} متر مربع </td>
  							<td>{{ $file->address}}</td>
  						</tr>
  	          @endforeach
  				</tbody>
  			</table>
        </div>


        <!--contracts -->
        <div class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
          <h5>آمار قراردادها:</h5>
          <table class="table table-striped table-bordered">
  					<thead>
  						<tr>
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
  						</tr>
  					</thead>
  					<tbody>
  						@foreach($contracts as $contract)
  							<tr>
  								<td  style="width: 50px !important; padding: 2px;">
  									<img src="{{ asset('UploadedImages/contracts/').'/'.$contract->contract_scan}}"  style="width: 100% !important; ">
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
  							</tr>
  						@endforeach
  					</tbody>
  				</table>
        </div>


      </div>
    </div>
  </div>
</div>
@endsection
