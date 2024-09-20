<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>کد فایل</th>
          <th>مالک</th>
          <th>مدل فایل</th>
          <th>نوع فایل</th>
          <th>قیمت</th>
          <th>پول پیش</th>
          <th>کرایه</th>
          <th>موقعیت</th>
          <th>مساحت</th>
          <th>پارکنیگ</th>
          <th>آنسانسور</th>
          <th>طبقه</th>
          <th>تاریخ ساخت</th>
          <th>تاریخ تحویل</th>
          <th>آدرس</th>
        </tr>
      </thead>
      <tbody>
        @foreach($files as $row => $file)
          <tr>
            <td>{{ $row+1 }}</td>
            <td>{{ $file->id}}</td>
            <td>{{ $file->name}}</td>
            <td>{{ $file->file_model}}</td>
            <td>{{ $file->file_type}}</td>
            <td>{{ $file->price}}</td>
            <td>{{ $file->advance_paid}}</td>
            <td>{{ $file->rent}}</td>
            <td>{{ $file->location}}</td>
            <td>{{ $file->space}}</td>
            <td>{{ $file->parking}}</td>
            <td>{{ $file->lift}}</td>
            <td>{{ $file->stage}}</td>
            <td>{{ $file->manufacture_date}}</td>
            <td>{{ $file->delivery_date}}</td>
            <td>{{ $file->address}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>


<!-- Print Report -->
<a href="{{ route('printFileReport') }}" class="btn btn-inverse waves-effect waves-light">
<button type="button" class="btn btn-info label-left float-xs-right mr-0-5">
  <span class="btn-label"><i class="ti-printer"></i></span>
  چاپ گزارش
</button>
</a>
