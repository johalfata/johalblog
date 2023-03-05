@extends('layouts.main')

@section('container')
<div class="row  justify-content-center align-items-center ">
    <div class="col-5">
      <h1> hai </h1>
      <h3> fullstack developer</h3>
      <h6> yakali kan </h6>
    </div>
    <div class="col-5 justify-content-center">
      <img class="w-50" src="/img/me.png" alt="{{ $name }}">
    </div>
  </div>
@endsection
