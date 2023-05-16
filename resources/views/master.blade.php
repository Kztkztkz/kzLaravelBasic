<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand mx-5" href="{{route('home')}}">Laravel</a>
  <form class="form-inline">
  @if (auth()->guard('admin')->guest()) 
  <a class="navbar-brand" href="{{route('login')}}">Login</a> 
  <a class="navbar-brand me-5" href="{{route('adminregister')}}">Register</a> 
 @else
  <a class="navbar-brand me-5" href="{{url('logout')}}">Logout</a>
 @endguest
  </form>
</nav>
  @yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>