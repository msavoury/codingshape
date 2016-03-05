@extends('app')

@section('content')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 text-center" style="border-radius:10px;min-height:200px;margin-top: 10px; margin-bottom:10px;background-color:#f8f5f0">
    <div class="flash-content">
        <div ng-bind-html="currentCard()" ng-if="currentCard() != null">
        [[currentCard()]]
        </div>
        <div ng-if="currentCard() == null">No cards match the given criteria</div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 text-center" ng-if="currentCard() != null">
        <button class="btn btn-primary btn-lg" ng-click="previousCard()">Previous</button>
        <button class="btn btn-primary btn-lg" ng-click="flipCard()">Flip</button>
        <button class="btn btn-primary btn-lg" ng-click="nextCard()">Next</button>
  </div>
  <div class="col-lg-12 text-center" ng-if="currentCard() == null">
        <a href="/" class="btn btn-primary btn-lg">Back Home</a>
  </div>
</div>
<script>
 var cards = <?php echo $cards ?>;
</script>
@stop
