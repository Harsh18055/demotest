<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Conversation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Conversation</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('conversations.store', $customer) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="datetime-local" name="time" id="time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="communication_medium" class="form-label">Communication Medium</label>
                <select name="communication_medium" id="communication_medium" class="form-select" required>
                    <option value="Call">Call</option>
                    <option value="Email">Email</option>
                    <option value="SMS">SMS</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Conversation</button>
            <a href="{{ route('customers.show', $customer) }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
