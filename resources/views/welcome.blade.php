<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Input Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Data Form</h2>
        <form id="dataForm" action="{{ route('create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Merchant Name:</label>
                <input type="text" class="form-control" id="name" name="meter_name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Meter Token</label>
                <input type="number" class="form-control"  name="meter_token" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>


</body>
</html>
