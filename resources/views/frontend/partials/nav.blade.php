<nav class="navbar bg-dark navbar-dark navbar-expand-md py-3">
  <div class="container">
    <a class="navbar-brand" href="#">E-commarce-site</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#MYnav" name="button"><span class="navbar-toggler-icon"></span></button>
    <div id="MYnav" class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="{!! route('index') !!}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{!! route('products.index') !!}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{!! route('contact') !!}">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
          <div class="dropdown-menu bg-warning">
            <a class="dropdown-item" href="">ONE</a>
            <a class="dropdown-item" href="">TWO</a>
            <a class="dropdown-item" href="">THREE</a>
            <div class="dropdown-divider">

            </div>
            <a class="dropdown-item" href="">FOUR</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{!! route('admin.index') !!}">Admin</a>
        </li>
      </ul>
      <form class="form-inline ml-auto" action="{!! route('search') !!}" method="get">
        <div class="input-group">
          <input class="form-control" name="search"  type="text" placeholder="Search for...">
          <span class="input-group-prepend">
            <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
          </span>
        </div>
      </form>
    </div>
  </div>
</nav>
