@extends('master')

@section('content')
<div class="container d-flex justify-content-center">
<div class="card mt-5" style="width: 70rem;">
  <div class="card-header">
    Login
  </div>
  <div class="card-body">
  <form action="login" method="POST">
    @csrf
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="loginemail" class="col-sm-2 col-form-label">Email Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="loginemail" placeholder="Email" name="email">
      <span class="text-danger">@error('loginemail'){{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="loginpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="loginpassword" placeholder="Password" name="password">
      <span class="text-danger">@error('loginpassword'){{$message}} @enderror</span>
    </div>
  </div>
  
  <div class="offset-4 mt-3">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
  </div>
</div>
</div>

@endsection