<!DOCTYPE html>
<html lang="en" ng-app="registerApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Travel Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <a href="/" class="back-to-home">
        <i class="fas fa-arrow-left"></i> Back to Home
    </a>

    <div class="hero-section">
        <div class="container">
            <div class="register-form" ng-controller="RegisterController">
                <h2 class="register-title">Create Account</h2>
                <form ng-submit="submitForm()" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" 
                               class="form-control" 
                               id="username" 
                               ng-model="user.username" 
                               required>
                        <div class="text-danger" ng-show="submitted && registerForm.username.$error.required">
                            Username is required
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" 
                               class="form-control" 
                               id="email" 
                               ng-model="user.email" 
                               required>
                        <div class="text-danger" ng-show="submitted && registerForm.email.$error.required">
                            Email is required
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" 
                               class="form-control" 
                               id="password" 
                               ng-model="user.password" 
                               required>
                        <div class="text-danger" ng-show="submitted && registerForm.password.$error.required">
                            Password is required
                        </div>
                    </div>

                    <button type="submit" class="btn btn-register">Register</button>

                    <div class="text-center mt-3">
                        Already have an account? <a href="/login" class="text-decoration-none">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/register.js"></script>
</body>
</html>
