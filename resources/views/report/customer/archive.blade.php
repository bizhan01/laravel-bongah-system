<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>آقا/خانم</th>
          <th>اسم</th>
          <th>اسم پدر /همسر</th>
          <th>نوع مشتری</th>
          <th>کد ملی</th>
          <th>تلفن</th>
          <th>آدرس فعلی</th>
        </tr>
      </thead>
      <tbody>
        @foreach($archivedCustomers as $row => $customer)
          <tr>
            <td>{{ $row+1 }}</td>
            <td>{{ $customer->prefix}}</td>
            <td>{{ $customer->name}}</td>
            <td>{{ $customer->father_name}}</td>
            <td>
              @if($customer->customer_type == 1)
                واگذار کننده
              @else
                گيرنده
              @endif
            </td>
            <td>{{ $customer->national_code}}</td>
            <td>{{ $customer->phone}}</td>
            <td>{{ $customer->address}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
