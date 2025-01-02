<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Dashboard Header -->
        <h1 class="text-center mb-4">Welcome to the Dashboard</h1>

        <!-- Navigation Links -->
        <div class="text-center mb-4">
            <a href="{{ route('customers.index') }}" class="btn btn-primary">Manage Customers</a>
            <a href="{{ route('customers.create') }}" class="btn btn-success">Add New Customer</a>
        </div>

        <!-- Logout Button -->
        <div class="text-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

        
    </div>
</body>
</html>
