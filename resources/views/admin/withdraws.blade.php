@php
use App\Models\Withdraw;

$withdrawals = Withdraw::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Withdrawals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
          <span class="navbar-brand mb-0 h1">Withdrawals Management</span>
        </div>
      </nav>

      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">Withdrawal Requests</h5>
              </div>

              <div class="container">

                <table id="withdrawTable" class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Users Current Balance</th>
                            <th>Method</th>
                            <th>Amount</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($withdrawals as $withdrawal)
                        <tr id="withdrawalRow{{ $withdrawal->id }}">
                            <td>{{ $withdrawal->id }}</td>
                            <td>{{ $withdrawal->user->first_name }} {{ $withdrawal->user->last_name }} ( {{ $withdrawal->user->username }} )</td>
                            <td>{{ $withdrawal->user->balance }}</td>
                            <td>{{ $withdrawal->method->name }}</td>
                            <td>{{ $withdrawal->amount }}</td>
                            <td>{{ $withdrawal->address }}</td>
                            <td>{{ $withdrawal->status }}</td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $withdrawal->id }})">Delete</button>
                                @if($withdrawal->status == 'Pending')
                                    <button class="btn btn-success btn-sm" onclick="markAsCompleted({{ $withdrawal->id }})">Mark as Completed</button>
                                    <button class="btn btn-warning btn-sm" onclick="markAsFailed({{ $withdrawal->id }})">Mark as Failed</button>
                                @elseif($withdrawal->status == 'Completed')
                                    <button class="btn btn-warning btn-sm" onclick="markAsFailed({{ $withdrawal->id }})">Mark as Failed</button>
                                @elseif($withdrawal->status == 'Rejected')
                                    <button class="btn btn-success btn-sm" onclick="markAsCompleted({{ $withdrawal->id }})">Mark as Completed</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#withdrawTable').DataTable();
    });

    function confirmDelete(withdrawalId) {
        if (confirm('Are you sure you want to delete this withdrawal?')) {
            window.location.href = "{{ route('withdraws.destroy', '') }}/" + withdrawalId;
        }
    }

    function markAsCompleted(withdrawalId) {
        if (confirm('Are you sure you want to mark this withdrawal as completed?')) {
            window.location.href = "{{ route('withdraws.complete', '') }}/" + withdrawalId;
        }
    }

    function markAsFailed(withdrawalId) {
        if (confirm('Are you sure you want to mark this withdrawal as failed?')) {
            window.location.href = "{{ route('withdraws.fail', '') }}/" + withdrawalId;
        }
    }
</script>
</body>
</html>
