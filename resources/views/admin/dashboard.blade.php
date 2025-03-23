@php
    use App\Models\User;
    use App\Models\Withdraw;
    use App\Models\PaymentMethod;
    
    $users = User::all();
    $withdraws = Withdraw::all();
    $methods = PaymentMethod::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS and Font Awesome from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .sidebar {
      background-color: #2d3436;
      color: #dfe6e9;
      padding-top: 20px;
    }
    .sidebar a {
      color: #dfe6e9;
      text-decoration: none;
    }
    .sidebar .nav-link:hover {
      background-color: #636e72;
    }
    .nav-item:hover {
      transition: transform 0.2s;
      transform: translateX(5px);
    }
    .card {
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .navbar {
      background-color: #1e272e;
      color: #dfe6e9;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    
    <!-- Offcanvas Sidebar -->
    @include('admin.sidebar')

    <!-- Main content -->
    <div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container-fluid">
          <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <i class="fas fa-bars"></i>
          </button>
          <span class="navbar-brand mb-0 h1">Welcome, Admin!</span>
        </div>
      </nav>

      <!-- Dashboard Content -->
      <div class="content">
        <div class="row">
          <!-- User Card -->
          <div class="col-md-4 mb-3">
              <a href="{{ route('admin.users') }}" class="text-decoration-none">
                <div class="card bg-primary text-white">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users"></i> Users</h5>
                    <p class="card-text">{{ $users->count() }}</p>
                  </div>
                </div>
              </a>
            </div>


          <!-- Withdrawals Card -->
          <div class="col-md-4 mb-3">
              <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
            <div class="card bg-success text-white">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-money-bill-wave"></i> Withdrawals</h5>
                <p class="card-text">{{ $withdraws->count() }}</p>
              </div>
            </div>
            </a>
          </div>

          <!-- Withdraw Methods Card -->
          <div class="col-md-4 mb-3">
              <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-credit-card"></i> Withdraw Methods</h5>
                <p class="card-text">{{ $methods->count() }}</p>
              </div>
            </div>
          </div>
          </a>
        </div>
        
        <!-- Settings and Footer -->
        <div class="row">
            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
          <div class="col-md-12">
            <div class="card mt-3">
              <div class="card-header">
                <h5><i class="fas fa-cogs"></i> Settings</h5>
              </div>
              <div class="card-body">
                <p>Manage your dashboard settings and preferences.</p>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>
      
     
    </div>
  </div>
</div>
<!-- Bootstrap JS, Font Awesome, and necessary scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
