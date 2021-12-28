<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Arbolink</title>
    
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #EAE2B6">

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand text-white text-uppercase btn btn-success" href="{{ route('public'); }}">Arbolink</a>
      </div>

      <ul class="navbar-nav justify-content-end">
        
        @if(auth()->check())
     
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase btn btn-success" href="{{ route('profile.index'); }}">Sesion activa: {{ auth()->user()->name }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase btn btn-success" href="{{ route('login.destroy') }}">Cerrar sesión</a>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase btn btn-success" href="{{ route('login.index') }}">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase btn btn-success" href="{{ route('register.index') }}">Registrate</a>
          </li>
        @endif
      </ul>
    </nav>

    @yield ('content')



  </body>
</html>