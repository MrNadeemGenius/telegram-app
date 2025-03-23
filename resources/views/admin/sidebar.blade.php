<div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
  <div class="offcanvas-header">
    <h4 class="offcanvas-title" id="offcanvasSidebarLabel">Admin Dashboard</h4>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-home"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('admin.users') }}">
          <i class="fas fa-users"></i> Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('withdraws.index') }}">
          <i class="fas fa-money-bill-wave"></i> Withdraws
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.methods') }}">
          <i class="fas fa-credit-card"></i> Withdraw Methods
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.settings') }}">
          <i class="fas fa-cogs"></i> Settings
        </a>
      </li>
    </ul>
  </div>
</div>