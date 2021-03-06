<div class="page-wrapper chiller-theme toggled">


   <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>{{ Auth::user()->name }}</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>

        </div>
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>          
          <li>
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Executive Board</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fas fa-tasks"></i>
              <span>Manager</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Overview Report</a>
                </li>
                <li>
                  <a href="#">Overview Refill Board</a>
                </li>
                <li>
                  <a href="#">In Order ( PO )
                    <span class="badge badge-pill badge-warning">3</span>
                  </a>
                </li>
                <li>
                  <a href="#">Revise PO
                    <span class="badge badge-pill badge-warning">1</span>
                  </a>
                </li>
                <li>
                  <a href="#">Order Confirmation
                  <span class="badge badge-pill badge-success">3</span>
                  </a>
                </li>
                <li>
                  <a href="#">Cancel Order</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-asterisk"></i>
              <span>Admin Coord</span>
              <span class="badge badge-pill badge-danger">10</span>
              <!-- <span class="badge badge-pill badge-warning">New</span> -->
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">In order
                    <span class="badge badge-pill badge-warning">3</span>
                  </a>
                </li>
                <li>
                <a href="#">Customer List</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-cubes"></i>
              <span>Operation Depart</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">QC Products <span class="badge badge-pill badge-danger">3</span></a>
                </li>
                <li>
                  <a href="#">Storage</a>
                </li>
                <li>
                  <a href="#">Transport To Store</a>
                </li>
              </ul>
            </div>
          </li>
    </div>

  </nav>
</div>
