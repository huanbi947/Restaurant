<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="{{url('/users')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/foodmenu')}}" class="nav-link">
              <i class="nav-icon fas fa-hamburger"></i>
              <p>
                Foodchef
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/viewchef')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Chef
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/viewreservation')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                reservation
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/orders')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Order
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>










    