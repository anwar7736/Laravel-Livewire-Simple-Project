<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel-Livewire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <livewire:styles/>
  <livewire:scripts/>
  <script src="{{asset('js/app.js')}}"></script>
</head>
<body class="bg-success">
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
  <ul class="navbar-nav">
    @guest
    <li class="nav-item">
      <a class="nav-link text-light" href="{{route('login')}}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="{{route('register')}}">Register</a>
    </li>
    @endguest
    @auth
    <li class="nav-item">
      <a class="nav-link text-light" href="{{route('home')}}">Home</a>
    </li>
    
    <li class="nav-item dropdown text-white" style="margin-left:1050px">
      <a class="nav-link  text-dark" href="" id="navbardrop" data-toggle="dropdown">
       <img src="{{asset('anwar.jpg')}}" style="border-radius: 100%; border: 1px solid red" height='50' width='50'/>
      </a>
      
      <div class="dropdown-menu" ><p  style="margin-left:10px">{{Auth::user()->name}}</p><p style="margin-left:10px">{{Auth::user()->email}}</p><hr>
        <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
        <a class="dropdown-item" href="{{route('change.password')}}">Change Password</a>
        <span style="margin-left:50px"><livewire:logout/></span>
      </div>
    </li>
    @endauth
  </ul>

</nav>
{{ $slot }}

@livewireScripts
</body>
</html>
