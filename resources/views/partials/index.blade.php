@extends('app')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="bs-component">
      <form action="/workout" method="get">
          <div class="jumbotron">
            <h1 class="text-center" style="font-weight:600">Pump Code.</h1>
            <p class="text-center">
                <img height="130" src="/assets/img/dumbbell-512.png">
            </p>
            <p class="text-center">Keep your coding skills in shape.</p>
            <p class="text-center">
                <input type="submit" value="Start Workout" class="btn btn-primary btn-lg"></input>
            </p>
          </div>
          <div class="text-center">
            @foreach($tags as $tag => $value)
                <label class="btn btn-default" >
                    <input type="checkbox" name="tag[]" value="{{$value}}" /> {{$tag}}
                </label>
            @endforeach
          </div>
      </form>
    </div>
  </div>
</div>
@stop
