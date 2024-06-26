<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin')); ?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo e(route('admin')); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span><?php echo e(__("Dashboard")); ?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <?php echo e(__("Banner")); ?>

    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('file-manager')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><?php echo e(__("Media Manager")); ?></span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span><?php echo e(__("Banners")); ?></span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"><?php echo e(__("Banner Options")); ?>:</h6>
          <a class="collapse-item" href="<?php echo e(route('banner.index')); ?>"><?php echo e(__("Banners")); ?></a>
          <a class="collapse-item" href="<?php echo e(route('banner.create')); ?>"><?php echo e(__("Add Banners")); ?></a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            <?php echo e(__("Shop")); ?>

        </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span><?php echo e(__("Category")); ?></span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><?php echo e(__("Category Options")); ?>:</h6>
            <a class="collapse-item" href="<?php echo e(route('category.index')); ?>"><?php echo e(__("Category")); ?></a>
            <a class="collapse-item" href="<?php echo e(route('category.create')); ?>"><?php echo e(__("Add Category")); ?></a>
          </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
          <i class="fas fa-cubes"></i>
          <span><?php echo e(__("Products")); ?></span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Options:</h6>
            <a class="collapse-item" href="<?php echo e(route('product.index')); ?>"><?php echo e(__("Products")); ?></a>
            <a class="collapse-item" href="<?php echo e(route('product.create')); ?>"><?php echo e(__("Add Product")); ?></a>
          </div>
        </div>
    </li>

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
          <i class="fas fa-table"></i>
          <span><?php echo e(__("Brands")); ?></span>
        </a>
        <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><?php echo e(__("Brand Options")); ?>:</h6>
            <a class="collapse-item" href="<?php echo e(route('brand.index')); ?>"><?php echo e(__("Brands")); ?></a>
            <a class="collapse-item" href="<?php echo e(route('brand.create')); ?>"><?php echo e(__("Add Brand")); ?></a>
          </div>
        </div>
    </li>

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
          <i class="fas fa-truck"></i>
          <span><?php echo e(__("Shipping")); ?></span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><?php echo e(__("Shipping Options")); ?>:</h6>
            <a class="collapse-item" href="<?php echo e(route('shipping.index')); ?>"><?php echo e(__("Shipping")); ?></a>
            <a class="collapse-item" href="<?php echo e(route('shipping.create')); ?>"><?php echo e(__("Add Shipping")); ?></a>
          </div>
        </div>
    </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('order.index')); ?>">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span><?php echo e(__("Orders")); ?></span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('review.index')); ?>">
            <i class="fas fa-comments"></i>
            <span><?php echo e(__("Reviews")); ?></span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      <?php echo e(__("Posts")); ?>

    </div>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
        <i class="fas fa-fw fa-folder"></i>
        <span><?php echo e(__("Posts")); ?></span>
      </a>
      <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Post Options:</h6>
          <a class="collapse-item" href="<?php echo e(route('post.index')); ?>"><?php echo e(__("Posts")); ?></a>
          <a class="collapse-item" href="<?php echo e(route('post.create')); ?>"><?php echo e(__("Add Post")); ?></a>
        </div>
      </div>
    </li>

     <!-- Category -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
          <i class="fas fa-sitemap fa-folder"></i>
          <span><?php echo e(__("Category")); ?></span>
        </a>
        <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><?php echo e(__("Category Options")); ?>:</h6>
            <a class="collapse-item" href="<?php echo e(route('post-category.index')); ?>"><?php echo e(__("Category")); ?></a>
            <a class="collapse-item" href="<?php echo e(route('post-category.create')); ?>"><?php echo e(__("Add Category")); ?></a>
          </div>
        </div>
      </li>

      <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
            <i class="fas fa-tags fa-folder"></i>
            <span><?php echo e(__("Tags")); ?></span>
        </a>
        <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><?php echo e(__("Tag Options")); ?>:</h6>
            <a class="collapse-item" href="<?php echo e(route('post-tag.index')); ?>"><?php echo e(__("Tag")); ?></a>
            <a class="collapse-item" href="<?php echo e(route('post-tag.create')); ?>"><?php echo e(__("Add Tag")); ?></a>
            </div>
        </div>
    </li>

      <!-- Comments -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('comment.index')); ?>">
            <i class="fas fa-comments fa-chart-area"></i>
            <span><?php echo e(__("Comments")); ?></span>
        </a>
      </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        <?php echo e(__("General Settings")); ?>

    </div>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('coupon.index')); ?>">
          <i class="fas fa-table"></i>
          <span><?php echo e(__("Coupon")); ?></span></a>
    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
            <i class="fas fa-users"></i>
            <span><?php echo e(__("Users")); ?></span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('settings')); ?>">
            <i class="fas fa-cog"></i>
            <span><?php echo e(__("Settings")); ?></span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul><?php /**PATH C:\laragon\www\Complete-Ecommerce-in-laravel-10-master\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>