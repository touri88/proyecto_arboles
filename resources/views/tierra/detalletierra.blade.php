@extends('layouts.app')

@section('title','Login')

@section('content')

<h1>{{$titulo}}</h1><br><br>
@foreach ($tierra as $item)
    
    <h2>Hay un {{$item->tipo_tierra}} 
        libre ubicado en la localidad {{$item->localidad_tierra}} 
        de la provincia de {{$item->provincia_tierra}}.
        </h2><br>

    <h2>Contacta a {{$item->name}} para plantar este arbol aqui</h2><br>

    <form action="mailto:{{$item->email}}" method="post" enctype="text/plain">
        @csrf
    
        Mensaje:<br>
        <input placeholder= "Estoy interesado en tu {{$item->tipo_tierra}}" type="text" name="comment" size="300"><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
        </form>


@endforeach


@endsection