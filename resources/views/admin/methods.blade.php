@php
use App\Models\PaymentMethod;

$paymentMethods = PaymentMethod::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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

      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">Withdrawal Methods</h5>
              </div>
              
              
              

             <div class="container">
            <h5>Add New Payment Method</h5>
            <form id="addPaymentMethodForm" action="{{ route("methods.store") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="minimum" class="form-label">Minimum Amount</label>
                    <input type="number" class="form-control" name="minimum" id="minimum" required>
                </div>
                <div class="mb-3">
                    <label for="maximum" class="form-label">Maximum Amount</label>
                    <input type="number" class="form-control" name="maximum" id="maximum" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Payment Method</button>
            </form>

    <table id="withdrawTable" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Minimum Amount</th>
                <th>Maximum Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paymentMethods as $method)
            <tr id="methodRow{{ $method->id }}">
                <td>{{ $method->id }}</td>
                <td>
                    <span class="method-name" id="methodName{{ $method->id }}">{{ $method->name }}</span>
                    <input type="text" class="form-control d-none" id="editMethodName{{ $method->id }}" value="{{ $method->name }}" />
                </td>
                <td>
                    <span class="method-minimum" id="methodMinimum{{ $method->id }}">{{ $method->minimum }}</span>
                    <input type="number" class="form-control d-none" id="editMethodMinimum{{ $method->id }}" value="{{ $method->minimum }}" />
                </td>
                <td>
                    <span class="method-maximum" id="methodMaximum{{ $method->id }}">{{ $method->maximum }}</span>
                    <input type="number" class="form-control d-none" id="editMethodMaximum{{ $method->id }}" value="{{ $method->maximum }}" />
                </td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $method->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
            <script>
                function confirmDelete(methodId) {
                    if (confirm('Are you sure you want to delete this payment method?')) {
                        window.location.href = "{{ route('methods.destroy', '') }}/" + methodId;
                    }
                }
            </script>



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
</script>
</body>
</html>
