var app = angular.module('codingshape', [], function($interpolateProvider) {
     $interpolateProvider.startSymbol('[[');
     $interpolateProvider.endSymbol(']]');
});
app.controller('cardController', ['$scope', function($scope) {
    $scope.test = 'hello';
}]);
