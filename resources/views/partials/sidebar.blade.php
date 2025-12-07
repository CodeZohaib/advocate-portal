<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/project/dashboard.php" class="brand-link d-flex align-items-center">
   &nbsp; <i class="bi bi-briefcase fs-3 me-2 text-info"></i> &nbsp;
    <span class="brand-text fw-light"> Advocate Portal</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ route('profile.image','FrTbyI7NdoguZsq6SH3LikBTmGwP7agFrbYtg3p5.jpg') }}" class="img-circle elevation-2" style="height:30px" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('profile.edit') }}" class="d-block">Zohaib Khan</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer2"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Client Management -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>
              Client Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('client.active') }}" class="nav-link">
                <i class="nav-icon bi bi-person-check text-success"></i>
                <p>Active Clients</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('client.inactive') }}" class="nav-link">
                <i class="nav-icon bi bi-person-x text-danger"></i>
                <p>Inactive Clients</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Case Management menu-open-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-folder2-open"></i>
            <p>
              Case Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('caseRecord.active') }}" class="nav-link">
                <i class="nav-icon bi bi-folder-check text-success"></i>
                <p>Open Cases</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('caseRecord.closed') }}" class="nav-link">
                <i class="nav-icon bi bi-folder-x text-danger"></i>
                <p>Closed Cases</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Payment -->
        <li class="nav-item">
          <a href="{{ route('payment.cases') }}" class="nav-link">
            <i class="nav-icon bi bi-credit-card"></i>
            <p>Payments</p>
          </a>
        </li>


        <!-- Settings -->
        <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link">
            <i class="nav-icon bi bi-gear"></i>
            <p>Settings</p>
          </a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
          <a href="{{ route('logout') }}" 
            class="nav-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon bi bi-box-arrow-right"></i>
              <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>