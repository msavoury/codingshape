//change angular interpolation symbols since blade uses {{}
var app = angular.module('codingshape', ['ngSanitize'], function($interpolateProvider) {
     $interpolateProvider.startSymbol('[[');
     $interpolateProvider.endSymbol(']]');
});

//Service that returns an array of cards
app.factory('cardService', function() {
    var cardService = {
        getCards:function() {
            var arr = [
                {
                    "front":"first-front",
                    "back":"first-back",
                }
            ];
            //cards is a global constant put on the page on the server side
            // but this allows for the cards to be returned from an ajax call
            // if we choose to change it later, w/o changing the client
            if (typeof cards != "undefined") return cards;
            return arr;
        },
    };
    return cardService;
})

app.controller('cardController', ['$scope', '$sce', 'cardService', function($scope, $sce, cardService) {
    $scope.cards = cardService.getCards();
    $scope.cardIndex = 0;
    $scope.currentCardPosition = "front";
    $scope.currentCard = function() {
        if ($scope.cards.length > 0) {
            return $sce.trustAsHtml($scope.cards[$scope.cardIndex][$scope.currentCardPosition]);
            // return ($scope.cards[$scope.cardIndex][$scope.currentCardPosition]);
        }
        else {
            return null;
        }
    }

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
