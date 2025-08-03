<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Edit Employee</h2>

        <form action="{{ route('employees.update', $employee) }}" method="POST" class="bg-white p-4 rounded shadow-sm">
            @csrf
            @method('PUT')

            @include('employees._form')

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">Back</a>
            </div>
        </form>
    </div>
</body>
</html>