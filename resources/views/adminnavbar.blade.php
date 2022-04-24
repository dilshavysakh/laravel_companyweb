
      
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo text-white h3" href="index.html" style="text-decoration: auto">
            <h4>COMPANY WEB</h4>
          </a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/employee')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Employee Details</span>
            </a>
            <a class="nav-link" href="{{url('/create_employee')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-plus"></i>
              </span>
              <span class="menu-title">Add New Employee</span>
            </a>
            <a class="nav-link" href="{{url('/company')}}">
              <span class="menu-icon">
                <i class="mdi mdi-city"></i>
              </span>
              <span class="menu-title">Company Details</span>
            </a>
            <a class="nav-link" href="{{url('/create_company')}}">
              <span class="menu-icon">
                <i class="mdi mdi-book-open"></i>
              </span>
              <span class="menu-title">Add New Company</span>
            </a>
          </li>
        </ul>
    </nav>
