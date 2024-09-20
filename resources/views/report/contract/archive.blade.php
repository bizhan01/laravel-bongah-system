<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>مشاور</th>
          <th>اسم مشتری</th>
          <th>کد فایل</th>
          <th>نوع قرارداد</th>
          <th>قیمت</th>
          <th>پول پیش</th>
          <th>کرایه</th>
          <th>کد قرارداد</th>
          <th>کمیسیون</th>
          <th>اسکن قرارداد</th>
        </tr>
      </thead>
      <tbody>
        @foreach($archivedContracts as $row => $contract)
          <tr>
            <td>{{ $row+1 }}</td>
            <td>
              <a href="{{url('customerInfo').'/' .$contract->customer_id}}" title="اطلاعات مشتری" >
                {{ $contract->customer_name}}
              </a>
            </td>
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
            <td>{{ $contract->price}}</td>
            <td>{{ $contract->advance_paid}}</td>
            <td>{{ $contract->rent}}</td>
            <td>{{ $contract->contract_code}}</td>
            <td>{{ $contract->commission}}</td>
            <td  style="width: 50px !important; padding: 2px;">
              <img src="{{ asset('UploadedImages/contracts/').'/'.$contract->contract_scan}}"  style="width: 100% !important; ">
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
