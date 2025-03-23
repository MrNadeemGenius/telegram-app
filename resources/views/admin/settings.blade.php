@php
use App\Models\Settings;

$settings = Settings::first(); // Retrieve the current settings
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Settings</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
      
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
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
       @include('admin.sidebar')

    <div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container-fluid">
          <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <i class="fas fa-bars"></i>
          </button>
          <span class="navbar-brand mb-0 h1">Welcome, Admin!</span>
        </div>
      </nav>
        <div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
            <nav class="navbar navbar-expand-lg navbar-dark mb-4">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Settings</span>
                </div>
            </nav>

            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Manage Settings</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('settings.update') }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Use PUT method for updates -->
                                    <div class="mb-3">
                                        <label for="ads_reward" class="form-label">Ads Reward</label>
                                        <input type="number" class="form-control" step="0.01" name="ads_reward" id="ads_reward" value="{{ $settings->ads_reward }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ads_limit" class="form-label">Ads Limit</label>
                                        <input type="number" class="form-control" name="ads_limit" id="ads_limit" value="{{ $settings->ads_limit }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="reffer_bonus" class="form-label">Reffer Bonus in %</label>
                                        <input type="number" class="form-control" name="reffer_bonus" id="reffer_bonus" value="{{ $settings->reffer_bonus }}" max="100" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="monetag_id" class="form-label">Monetag ID</label>
                                        <input type="text" class="form-control" name="monetag_id" id="monetag_id" value="{{ $settings->monetag_id }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currency" class="form-label">Currency</label>
                                        <input type="text" class="form-control" name="currency" id="monetag_id" value="{{ $settings->currency }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Settings</button>
                                </form>

                                @if(session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
