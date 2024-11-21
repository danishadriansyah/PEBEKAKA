<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <!-- Form Header -->
        <h3 class="text-center mb-3 fw-bold text-primary">Sign Up</h3>
        <p class="text-center text-muted mb-4">Create an account to get started</p>

        <!-- Form Start -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus placeholder="Your full name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <div class="text-danger mt-1 small">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="text-danger mt-1 small">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
                @if ($errors->has('password'))
                    <div class="text-danger mt-1 small">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm password">
                @if ($errors->has('password_confirmation'))
                    <div class="text-danger mt-1 small">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('login') }}" class="text-decoration-none small text-primary">Already registered?</a>
                <button type="submit" class="btn btn-primary px-4">Register</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
