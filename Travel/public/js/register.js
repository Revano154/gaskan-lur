// app.js
const app = angular.module('RegisterApp', []);

app.controller('RegisterController', ['$scope', '$http', function($scope, $http) {
    $scope.user = {};

    $scope.submitForm = function() {
        $http.post('/api/register', $scope.user).then(function(response) {
            alert('Registration Successful');
        }).catch(function(error) {
            alert('Error: ' + error.data.message);
        });
    };
}]);
