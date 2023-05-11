@extends('master')

@section('content')
<div class="container d-flex justify-content-center">
<div class="card mt-5" style="width: 70rem;">
  <div class="card-header">
    Register
  </div>
  <div class="card-body">
  <form action="register" method="POST">
    @csrf
  <div class="form-group row d-flex justify-content-center">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name" placeholder="Name" name="name">
      <span class="text-danger">@error('name'){{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="email" placeholder="Email" name="email">
      <span class="text-danger">@error('email'){{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <span class="text-danger">@error('password'){{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
      <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
    </div>
  </div>
  <div class="offset-4 mt-3">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
  </div>
</div>
</div>
@endsection