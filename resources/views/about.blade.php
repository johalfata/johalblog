<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')


@section('container')
<div class="info">
  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/me.png" width="200" class="rounded-circle">
</div>
@endsection