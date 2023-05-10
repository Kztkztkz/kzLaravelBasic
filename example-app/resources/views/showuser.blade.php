@extends('master')

@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($registerusers as $user)
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>{{$user['password']}}</td>
      <td>{{$user['past']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection