@extends('app')

@section('content')
<div class="row">
  <div class="col-lg-6 col-lg-offset-3 text-center" style="min-height:200px">
    <div class="flash-content">
        [[currentCard()]]
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 text-center">
        <button class="btn btn-primary btn-lg" ng-click="previousCard()">Previous</button>
        <button class="btn btn-primary btn-lg" ng-click="flipCard()">Flip</button>
        <button class="btn btn-primary btn-lg" ng-click="nextCard()">Next</button>
  </div>
</div>
@stop
