<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Customer Details</h1>

        <div class="card mb-4">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $customer->name }}</p>
                <p><strong>Email:</strong> {{ $customer->email }}</p>
                <p><strong>Contact:</strong> {{ $customer->contact }}</p>
                <p><strong>Address:</strong> {{ $customer->address }}</p>
                <p><strong>Status:</strong> {{ $customer->status }}</p>
            </div>
        </div>

        <h2>Conversations</h2>
        @if($customer->conversations->isEmpty())
            <div class="alert alert-warning">No conversations found.</div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Time</th>
                        <th>Medium</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer->conversations as $index => $conversation)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $conversation->time }}</td>
                            <td>{{ $conversation->communication_medium }}</td>
                            <td>{{ $conversation->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('customers.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</body>
</html>
