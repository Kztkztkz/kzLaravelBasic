@extends('master')

@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Upload files</th>
    </tr>
  </thead>
  <tbody>
    @foreach($registerusers as $user)
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>{{$user['password']}}</td>
      <td><img src="{{Storage::url($user['file_upload'])}}" alt="" style="height:20px"></td>
      <td><a href={{"delete/" . $user['id']}} class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection