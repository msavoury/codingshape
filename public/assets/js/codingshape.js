var app = angular.module('codingshape', [], function($interpolateProvider) {
     $interpolateProvider.startSymbol('[[');
     $interpolateProvider.endSymbol(']]');
});
app.factory('cardService', function() {
    var cardService = {
        getCards:function() {
            var arr = [
                {
                    "front":"first-front",
                    "back":"first-back",
                },
                {
                    "front":"second-front",
                    "back":"second-back",
                },
                {
                    "front":"third-front",
                    "back":"third-back",
                },
                {
                    "front":"fourth-front",
                    "back":"fourth-back",
                },

            ];
            if (typeof cards != "undefined") return cards;
            return arr;
        },
    };
    return cardService;
})
app.controller('cardController', ['$scope', 'cardService', function($scope, cardService) {
    $scope.test = 'hello';
    $scope.cards = cardService.getCards();
    $scope.cardIndex = 0;
    $scope.currentCardPosition = "front";
    $scope.currentCard = function() { return $scope.cards[$scope.cardIndex][$scope.currentCardPosition] ;}

    $scope.nextCard = function() {
        $scope.cardIndex = ($scope.cardIndex + 1) % $scope.cards.length;
        $scope.currentCardPosition = "front";
    };

    $scope.previousCard = function() {
        $scope.cardIndex = $scope.cardIndex - 1;
        if ($scope.cardIndex < 0) $scope.cardIndex = $scope.cards.length - 1;
        $scope.currentCardPosition = "front";
    };

    $scope.flipCard = function() {
        $scope.currentCardPosition = $scope.currentCardPosition == "front" ? "back" : "front";
    }

}]);
