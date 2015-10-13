var app = angular.module('codingshape', [], function($interpolateProvider) {
     $interpolateProvider.startSymbol('[[');
     $interpolateProvider.endSymbol(']]');
});
app.factory('cardService', function() {
    var cardService = {
        getCards:function() {

        },
    };
    return cardService;
})
app.controller('cardController', ['$scope', function($scope) {
    $scope.test = 'hello';
    /*

       //setup goes here. get cards from the service
       //vars
       // - current index in array of cards
       // - card state: front or back
       //
       // card json structure
       // { front:"front", back:"back"}


     */
    //next btn fn
    //prv btn fn
    //flip btn fn

}]);
