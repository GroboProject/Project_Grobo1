<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #1A242F, #3A5068);
        }

        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #424649;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0c0d0d;
        }

        .btn-back {
            background-color: #ddd;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            margin-top: 20px;
            width: 100%;
        }

        .btn-back i {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="login-container ">
        <img src="{{ asset('assets/jpg/logo.png') }}" class="rounded-circle mx-auto d-block" alt="Logo">

        <form action="login_process.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label text-start">Name</label>
                <input ype="text" id="register" name="name" placeholder="Enter your Name" class="form-control ps-3" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-start">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>

        <div class="mt-3 text-center">
            <p>Sudah punya akun? <a href="/login">Masuk</a></p>
        </div>

        <!-- Back Button -->
        <a href="/" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
