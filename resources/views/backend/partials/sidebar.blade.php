<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> <img src="/images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
        <div class="profile-name">
          <p class="name">Richard V.Welsh</p>
          <p class="designation">Manager</p>
          <div class="badge badge-teal mx-auto mt-3">Online</div>
        </div>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="{!! route('admin.index') !!}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#product-pages" aria-expanded="false" aria-controls="product-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Products</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="product-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{!! route('admin.product.index') !!}">Products</a></li>
          <li class="nav-item"> <a class="nav-link" href="{!! route('admin.product.create') !!}">Create Product</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#caregory-pages" aria-expanded="false" aria-controls="caregory-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Category</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="caregory-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{!! route('admin.category.index') !!}">Categories</a></li>
          <li class="nav-item"> <a class="nav-link" href="{!! route('admin.category.create') !!}">Add Category</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="brand-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Brand</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="brand-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{!! route('admin.brand.index') !!}">manage Brands</a></li>
          <li class="nav-item"> <a class="nav-link" href="{!! route('admin.brand.create') !!}">Add Brand</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
