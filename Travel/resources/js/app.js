// Buat modul AngularJS
var app = angular.module('loginApp', []);

// Buat controller untuk login
app.controller('LoginController', function ($scope) {
  // Data login user
  $scope.loginData = {
    username: '',
    password: ''
  };

  // Status popup
  $scope.isPopupOpen = false;

  // Buka popup
  $scope.openPopup = function () {
    $scope.isPopupOpen = true;
  };

  // Tutup popup
  $scope.closePopup = function () {
    $scope.isPopupOpen = false;
  };

  // Submit login
  $scope.submitLogin = function () {
    alert('Login submitted:\nUsername: ' + $scope.loginData.username + '\nPassword: ' + $scope.loginData.password);
    $scope.closePopup();
  };
});
