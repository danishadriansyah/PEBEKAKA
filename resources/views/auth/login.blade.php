<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 100%;
            max-width: 420px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .text-primary {
            color: #ff5722 !important;
        }
        .btn-primary {
            background-color: #ff5722;
            border-color: #ff5722;
        }
        .btn-primary:hover {
            background-color: #e64a19;
            border-color: #e64a19;
        }
    </style>
</head>
<body>

    <div class="card shadow-sm p-4">
        <!-- Form Heading -->
        <h2 class="text-center mb-4 fw-bold text-primary">Shopii Admin</h2>
        <p class="text-center text-muted mb-4">Log in to continue</p>

        <!-- Session Status -->
        <div class="mb-4">
            <!-- Placeholder for session status message, if needed -->
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus autocomplete="username" placeholder="Enter your email" value="{{ old('email') }}">
                <!-- Placeholder for email error message -->
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                <!-- Placeholder for password error message -->
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">
                    Remember me
                </label>
            </div>

            <!-- Forgot Password & Submit Button -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('password.request') }}" class="text-decoration-none text-primary small">Forgot password?</a>
                <button type="submit" class="btn btn-primary px-4">Log in</button>
            </div>
        </form>

        <!-- Divider -->
        <hr class="my-4">

        <!-- Alternative Login Option -->
        <div class="text-center">
            <p class="text-muted mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-primary text-decoration-none">Sign up</a></p>
        </div>
    </div>

    <!-- Bootstrap JS (optional for responsive utilities) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
