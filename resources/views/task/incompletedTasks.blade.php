<!-- My Tasks -->
<div class="template-options">
  <div class="to-toggle"><button type="button" class="btn btn-danger btn-rounded">{{$tasksCount}}</button></div>
  <div class="custom-scroll custom-scroll-dark">
    <div class="to-content">
      <a class="btn btn-info btn-block waves-effect waves-light mb-2" href="" >برنامه های انجام نشده</a>
      <table class="table table-striped ">
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
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
