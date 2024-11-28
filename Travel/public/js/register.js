var app = angular.module('registerApp', []);

app.controller('RegisterController', ['$scope', '$http', function($scope, $http) {
    $scope.user = {};
    $scope.responseMessage = '';

    $scope.submitForm = function() {
        $http.post('/api/register', $scope.user)
            .then(function(response) {
                $scope.responseMessage = 'Registration successful! Welcome, ' + $scope.user.username + '!';
                $scope.user = {}; // Reset form
            })
            .catch(function(error) {
                $scope.responseMessage = 'Registration failed. Please try again.';
            });
    };
}]);
