var app = angular.module('registerApp', []);

app.controller('RegisterController', function($scope, $http) {
    $scope.user = {};
    $scope.submitted = false;

    $scope.submitForm = function() {
        $scope.submitted = true;

        if ($scope.registerForm.$valid) {
            $http.post('/api/register', $scope.user)
                .then(function(response) {
                    alert('Registration successful!');
                    window.location.href = '/login';
                })
                .catch(function(error) {
                    alert('Registration failed: ' + error.data.message);
                });
        }
    };
});
