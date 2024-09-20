<!-- Sidebar -->
<div class="site-overlay"></div>
<div class="site-sidebar" >
  <div class="custom-scroll custom-scroll-light" style="color: black">
    <ul class="sidebar-menu" >
      <li class="menu-title" >مینو ها</li>

      <li class="with-sub" >
        <a href="/" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-home"></i></span>
          <span class="s-text">خانه</span>
        </a>
      </li>



      <!-- customers -->
      <li class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-users"></i></span>
          <span class="s-text">مشتریان</span>
        </a>
        <ul>
          <li><a href="{{ route('customers') }}">همه مشتریان</a></li>
          <li><a href="{{ route('addCustomer') }}">افزودن مشتری جدید</a></li>
          <li><a href="{{ route('archivedCustomers') }}">آرشیو مشتریان</a></li>
        </ul>
      </li>

      <!-- Files -->
      <li class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-file"></i></span>
          <span class="s-text">فایل ها</span>
        </a>
        <ul>
          <li><a href="{{ route('files') }}">همه فایل ها</a></li>
          <li><a href="{{ route('addFile') }}">افزودن فایل جدید</a></li>
          <li><a href="{{ route('archivedFiles') }}">آرشیو </a></li>
        </ul>
      </li>

      <!-- Contracts -->
      <li class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-book"></i></span>
          <span class="s-text">قراردادها</span>
        </a>
        <ul>
          <li><a href="{{ route('contracts') }}">همه ی قراردادها</a></li>
          <li><a href="{{ route('addContract') }}">افزودن قرارداد جدید</a></li>
          <li><a href="{{ route('archivedContracts') }}">آرشیو</a></li>
        </ul>
      </li>



      <!-- Proects -->
      <li class="with-sub <?php if (Auth::user()->type == '2' || Auth::user()->type == '4'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-cubes"></i></span>
          <span class="s-text">پروژه ها</span>
        </a>
        <ul>
          <li><a href="{{ route('projects') }}">همه ی پروژه ها</a></li>
          <li><a href="{{ route('addProject') }}">افزودن پروژه</a></li>
          <li><a href="{{ route('completedProjects') }}">پروژه های تکمیل شده</a></li>
        </ul>
      </li>


      <!-- Reports -->
      <li class="with-sub <?php if (Auth::user()->type == '3' || Auth::user()->type == '4'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-line-chart"></i></span>
          <span class="s-text">گزارشات</span>
        </a>
        <ul>
          <li><a href="{{ route('customerReport') }}">گزارش مشتریان</a></li>
          <li><a href="{{ route('fileReport') }}">گزارش فایل ها</a></li>
          <li><a href="{{ route('contractReport') }}">گزارش قراردادها</a></li>
          <li><a href="{{ route('projectReport') }}">گزارش پروژه ها</a></li>
        </ul>
      </li>

      <!-- students -->
      <li class="with-sub <?php if (Auth::user()->type == '3' || Auth::user()->type == '4'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-user"></i></span>
          <span class="s-text">کاربران</span>
        </a>
        <ul>
          <li><a href="{{ route('usersList') }}">همه ی کاربران</a></li>
          <li><a href="{{ route('addUser') }}">افزودن کاربر جدید</a></li>
          <li><a href="{{ route('blockList') }}">کاربران مسدود شده</a></li>
        </ul>
      </li>

      <li class="with-sub" >
        <a href="{{ route('diaries') }}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-history"></i></span>
          <span class="s-text">دفتر روزانه</span>
        </a>
      </li>

      <li class="with-sub <?php if (Auth::user()->type == '3' || Auth::user()->type == '4'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="{{ route('info') }}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-building"></i></span>
          <span class="s-text">درباره شرکت</span>
        </a>
      </li>

      <li class="with-sub" >
        <a href="{{ route('tasks') }}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-calendar-check-o"></i></span>
          <span class="s-text">یاداشت ها</span>
        </a>
      </li>

      <li class="with-sub" >
        <a href="{{ route('tools') }}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-cubes"></i></span>
          <span class="s-text">امکانات</span>
        </a>
      </li>

      <!-- <li class="with-sub" >
        <a href="{{ route('test') }}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-cubes"></i></span>
          <span class="s-text">تست</span>
        </a>
      </li> -->


    </ul>
  </div>
</div>

<!-- Aside End -->
