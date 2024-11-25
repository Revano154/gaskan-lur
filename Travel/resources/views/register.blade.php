<!-- register.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div id="app">
        <h1>Register</h1>
        <form ng-submit="submitForm()" novalidate>
            <label for="username">Username</label>
            <input type="text" id="username" ng-model="user.username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" ng-model="user.email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" ng-model="user.password" required>
            
            <button type="submit">Register</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="js/register.js"></script>
</body>
</html>
