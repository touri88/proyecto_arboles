<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Arbolink</title>
    
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <a href="http://localhost/arbolink/arbolink/public/" class="text-2xl font-bold">Arbolink</a>
      </div>

      <ul class="w-1/2 ox-16 ml-auto flex justify-end pt-1">
        
        @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">Sesion activa: <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-bold hover:bg-red-700 py-3 px-4 
          rounded-md">Cerrar sesión</a>
        </li>
        @else
          <li class="mx-6">
            <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 
            rounded-md">Iniciar sesión</a>
          </li>
          <li>
            <a href="{{ route('register.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 
            rounded-md">Registrate</a>
          </li>
        @endif
      </ul>
    </nav>

    @yield ('content')



  </body>
</html>