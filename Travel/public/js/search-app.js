angular.module('searchApp', [])
  .controller('SearchController', function($scope) {
    $scope.searchQuery = '';
    
    $scope.search = function() {
      // Implement search functionality here
      console.log('Searching for:', $scope.searchQuery);
      // You can add your search logic here
    };
  }); 