<!-- Sidebar -->
<div class="site-overlay"></div>
<div class="site-sidebar" >
  <div class="custom-scroll custom-scroll-light" style="color: black">
    <ul class="sidebar-menu" >
      <li class="menu-title" >مینو ها</li>

      <li class="with-sub" >
        <a href="/" class="waves-effect  waves-light">
          <span class="s-icon"><i class="ti-anchor"></i></span>
          <span class="s-text">خانه</span>
        </a>
      </li>

      <!-- students -->
      <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="ti-id-badge"></i></span>
          <span class="s-text">کاربران</span>
        </a>
        <ul>
          <li><a href="<?php echo e(route('addUser')); ?>">افزودن کاربر جدید</a></li>
          <li><a href="<?php echo e(route('usersList')); ?>">لیست کاربران</a></li>
          <li><a href="<?php echo e(route('blockList')); ?>">کاربران مسدود شده</a></li>
        </ul>
      </li>





    </ul>
  </div>
</div>

<!-- Aside End -->
