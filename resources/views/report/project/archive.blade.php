<div class="box box-block bg-white">
  <div class="overflow-x-auto">
    <table class="table table-striped table-bordered dataTable" id="table-2">
      <thead>
        <tr>
          <th>#</th>
          <th>مالک پروژه</th>
          <th>نوع پروژه</th>
          <th>موقعیت</th>
          <th>مساحت</th>
          <th>تاریخ ساخت</th>
          <th>تاریخ تحویل</th>
        </tr>
      </thead>
      <tbody>
        @foreach($archivedProjects as $row => $project)
          <tr>
            <td>{{ $row+1 }}</td>
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
</div>
