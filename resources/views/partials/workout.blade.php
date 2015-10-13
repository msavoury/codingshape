@extends('app')

@section('content')
<div class="row">
  <div class="col-lg-6 col-lg-offset-3 text-center" style="min-height:200px">
    <div class="flash-content">
	Content of the question goes here
    [[test]]
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 text-center">
        <button class="btn btn-primary btn-lg">Previous</button>
        <button class="btn btn-primary btn-lg">Flip</button>
        <button class="btn btn-primary btn-lg">Next</button>
  </div>
</div>
@stop
