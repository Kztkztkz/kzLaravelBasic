@extends('master')

@section('content')
<div class="container d-flex justify-content-center">
<div class="card mt-5" style="width: 70rem;">
  <div class="card-header">
    Admin Registration
  </div>
  <div class="card-body">
  <form action="adminregister" method="POST">
    @csrf
  <div class="form-group row d-flex justify-content-center">
    <label for="adminname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="adminname" placeholder="Name" name="adminname">
      <span class="text-danger">@error('adminname'){{$message}}@enderror</span>
    </div>
  </div>
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="adminemail" class="col-sm-2 col-form-label">Email Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="adminemail" placeholder="Email" name="adminemail">
      <span class="text-danger">@error('adminemail'){{$message}}@enderror</span>
    </div>
  </div>
  <div class="form-group row d-flex justify-content-center mt-3">
    <label for="adminpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="adminpassword" placeholder="Password" name="adminpassword">
      <span class="text-danger">@error('adminpassword'){{$message}}@enderror</span>
    </div>
  </div>
 
  <div class="offset-4 mt-3">
    <button type="submit" class="btn btn-primary">Become Admin</button>
  </div>
</form>
  </div>
</div>
</div>
@endsection