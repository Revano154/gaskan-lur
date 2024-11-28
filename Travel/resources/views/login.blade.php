<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
        }

        .container {
            margin-top: 10%;
        }

        .modal-content {
            border-radius: 10px;
        }

        .btn-social {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50px;
            width: 100%;
            max-width: 150px;
            font-size: 14px;
            padding: 10px 20px;
            text-transform: capitalize;
        }

        .btn-facebook {
            background: #4267B2;
            color: #fff;
        }

        .btn-google {
            background: #DB4437;
            color: #fff;
        }

        .btn-apple {
            background: #333333;
            color: #fff;
        }

        .btn-social:hover {
            opacity: 0.9;
        }

        .response-message {
            margin-top: 10px;
            font-size: 16px;
            color: #28a745;
        }

        .btn-group-custom {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .btn-register {
            background-color: #ff5722;
            color: white;
            border: none;
        }

        .btn-register:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <!-- Button Trigger -->
    <div class="container">
        <h1>Welcome Back!</h1>
        <p>Please log in or register to continue</p>
        <div class="btn-group-custom">
            <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal">Login Now</button>
            <a href="/register" class="btn btn-register btn-lg">Register</a>
        </div>
    </div>

    <!-- Modal Pop-Up -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <hr>
                    <p class="text-center">Or log in with</p>
                    <div class="d-flex justify-content-evenly">
                        <button class="btn btn-social btn-facebook">Facebook</button>
                        <button class="btn btn-social btn-google">Google</button>
                        <button class="btn btn-social btn-apple">Apple</button>
                    </div>
                    <div class="response-message" id="responseMessage"></div>
                </div>
                <div class="modal-footer">
                    <small>
                        By logging in, you agree to our 
                        <a href="#">Terms of Service</a> and 
                        <a href="#">Privacy Policy</a>.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();
            
            // Example of a login process
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Simulate API call
            setTimeout(() => {
                if (email === "user@example.com" && password === "password123") {
                    document.getElementById('responseMessage').textContent = "Login successful! Redirecting...";
                    setTimeout(() => {
                        window.location.href = "/index"; // Redirect to index page
                    }, 1500);
                } else {
                    document.getElementById('responseMessage').textContent = "Invalid email or password. Please try again.";
                }
            }, 1000);
        });
    </script>
</body>
</html>
