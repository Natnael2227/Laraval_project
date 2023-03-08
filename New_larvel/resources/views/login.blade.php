@extends('layout')
@section('title','login')
@section('content')
<div class='container'>
<form action="{{route('login.post')}}" method="POST" class='ms-auto me-auto mt-3' style='width:500px;'>
@csrf
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name='email'>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name='password' >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection