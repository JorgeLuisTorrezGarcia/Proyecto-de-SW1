<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('user')); ?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3"><?php echo e(__("User")); ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo e(route('user')); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span><?php echo e(__("Dashboard")); ?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            <?php echo e(__("Shop")); ?>

        </div>
    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('user.order.index')); ?>">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span><?php echo e(__("Orders")); ?></span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('user.productreview.index')); ?>">
            <i class="fas fa-comments"></i>
            <span><?php echo e(__("Reviews")); ?></span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Posts
    </div>
    <!-- Comments -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('user.post-comment.index')); ?>">
          <i class="fas fa-comments fa-chart-area"></i>
          <span><?php echo e(__("Comments")); ?></span>
      </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul><?php /**PATH C:\laragon\www\Complete-Ecommerce-in-laravel-10-master\resources\views/user/layouts/sidebar.blade.php ENDPATH**/ ?>