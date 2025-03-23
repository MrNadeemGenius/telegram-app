@php
use App\Models\User;

$users = User::all();
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
                <h5 class="mb-0">Users List</h5>
              </div>

              <table id="usersTable" class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Balance</th>
                        <th>Language Code</th>
                        <th>Premium</th>
                        <th>Telegram ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr id="userRow{{ $user->id }}">
    <form id="editUserForm{{ $user->id }}" method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <td>
            <span class="user-info" id="first_name{{ $user->id }}">{{ $user->first_name }}</span>
            <input type="text" class="form-control d-none" id="edit_first_name{{ $user->id }}" name="first_name" value="{{ $user->first_name }}" />
        </td>
        <td>
            <span class="user-info" id="last_name{{ $user->id }}">{{ $user->last_name }}</span>
            <input type="text" class="form-control d-none" id="edit_last_name{{ $user->id }}" name="last_name" value="{{ $user->last_name }}" />
        </td>
        <td>
            <span class="user-info" id="username{{ $user->id }}">{{ $user->username }}</span>
            <input type="text" class="form-control d-none" id="edit_username{{ $user->id }}" name="username" value="{{ $user->username }}" />
        </td>
        <td>
            <span class="user-info" id="balance{{ $user->id }}">{{ $user->balance }}</span>
            <input type="number" class="form-control d-none" id="edit_balance{{ $user->id }}" name="balance" value="{{ $user->balance }}" />
        </td>
        <td>
            <span class="user-info" id="language_code{{ $user->id }}">{{ $user->language_code }}</span>
            <input type="text" class="form-control d-none" id="edit_language_code{{ $user->id }}" name="language_code" value="{{ $user->language_code }}" />
        </td>
        <td>
            <span class="user-info" id="is_premium{{ $user->id }}">{{ $user->is_premium ? 'Yes' : 'No' }}</span>
            <select class="form-select d-none" id="edit_is_premium{{ $user->id }}" name="is_premium">
                <option value="0" {{ !$user->is_premium ? 'selected' : '' }}>No</option>
                <option value="1" {{ $user->is_premium ? 'selected' : '' }}>Yes</option>
            </select>
        </td>
        <td>
            <span class="user-info" id="telegram_id{{ $user->id }}">{{ $user->telegram_id }}</span>
            <input type="text" class="form-control d-none" id="edit_telegram_id{{ $user->id }}" name="telegram_id" value="{{ $user->telegram_id }}" />
        </td>
        <td>
            <button type="button" class="btn btn-warning btn-sm" onclick="editUser({{ $user->id }})" id="editBtn{{ $user->id }}">
                Edit
            </button>
            <button type="submit" class="btn btn-primary btn-sm d-none" id="saveBtn{{ $user->id }}">Save</button>
            <button type="button" class="btn btn-secondary btn-sm d-none" id="cancelBtn{{ $user->id }}" onclick="cancelEdit({{ $user->id }})">Cancel</button>
        </td>
    </form>
</tr>

                    @endforeach
                </tbody>
              </table>

              <script>
               function editUser(userId) {
                    // Hide the displayed span elements
                    document.getElementById('first_name' + userId).classList.add('d-none');
                    document.getElementById('last_name' + userId).classList.add('d-none');
                    document.getElementById('username' + userId).classList.add('d-none');
                    document.getElementById('balance' + userId).classList.add('d-none');
                    document.getElementById('language_code' + userId).classList.add('d-none');
                    document.getElementById('is_premium' + userId).classList.add('d-none');
                    document.getElementById('telegram_id' + userId).classList.add('d-none');
                
                    // Show the edit form fields
                    document.getElementById('edit_first_name' + userId).classList.remove('d-none');
                    document.getElementById('edit_last_name' + userId).classList.remove('d-none');
                    document.getElementById('edit_username' + userId).classList.remove('d-none');
                    document.getElementById('edit_balance' + userId).classList.remove('d-none');
                    document.getElementById('edit_language_code' + userId).classList.remove('d-none');
                    document.getElementById('edit_is_premium' + userId).classList.remove('d-none');
                    document.getElementById('edit_telegram_id' + userId).classList.remove('d-none');
                
                    // Toggle buttons
                    document.getElementById('editBtn' + userId).classList.add('d-none');
                    document.getElementById('saveBtn' + userId).classList.remove('d-none');
                    document.getElementById('cancelBtn' + userId).classList.remove('d-none');
                }
                
                function cancelEdit(userId) {
                    // Show the displayed span elements again
                    document.getElementById('first_name' + userId).classList.remove('d-none');
                    document.getElementById('last_name' + userId).classList.remove('d-none');
                    document.getElementById('username' + userId).classList.remove('d-none');
                    document.getElementById('balance' + userId).classList.remove('d-none');
                    document.getElementById('language_code' + userId).classList.remove('d-none');
                    document.getElementById('is_premium' + userId).classList.remove('d-none');
                    document.getElementById('telegram_id' + userId).classList.remove('d-none');
                
                    // Hide the edit form fields
                    document.getElementById('edit_first_name' + userId).classList.add('d-none');
                    document.getElementById('edit_last_name' + userId).classList.add('d-none');
                    document.getElementById('edit_username' + userId).classList.add('d-none');
                    document.getElementById('edit_balance' + userId).classList.add('d-none');
                    document.getElementById('edit_language_code' + userId).classList.add('d-none');
                    document.getElementById('edit_is_premium' + userId).classList.add('d-none');
                    document.getElementById('edit_telegram_id' + userId).classList.add('d-none');
                
                    // Toggle buttons
                    document.getElementById('editBtn' + userId).classList.remove('d-none');
                    document.getElementById('saveBtn' + userId).classList.add('d-none');
                    document.getElementById('cancelBtn' + userId).classList.add('d-none');
                }


                function deleteUser(userId) {
                    if (confirm("Are you sure you want to delete this user?")) {
                        // Implement the deletion logic here
                        // For example, using AJAX to call the delete route
                        alert('User ' + userId + ' deleted.'); // Replace with actual delete logic
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
    $('#usersTable').DataTable();
  });
</script>
</body>
</html>
