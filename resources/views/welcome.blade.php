<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Input Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div>
                    <!-- Login and Logout Buttons -->
                    <a href="{{ route('logina') }}" class="btn btn-primary me-2">Login</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

<body>
    <div class="container mt-5">
        <h2>Input Data Form</h2>
        <form id="dataForm" action="{{ route('create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Merchant Name:</label>
                <input type="text" class="form-control" id="name" name="meter_name" required>
                @error('meter_name')
                    <p class="text-primary">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" required>
                @error('address')
                    <p class="text-primary">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Meter Token</label>
                <input type="number" class="form-control"  name="meter_token" required>
                @error('meter_token')
                    <p class="text-primary">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <p class="text-primary">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>


</body>
</html>
