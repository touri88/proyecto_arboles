@extends('layouts.app')

@section('title','Login')

@section('content')



<h1 class="text-3xl text-center font-bold pt-20">{{$titulo}}</h1><br><br>
@foreach ($arboles as $item)
    
    <h2>El árbol {{$item->tipo_arbol}} 
        esta ubicado en la localidad {{$item->localidad_arbol}} 
        de la provincia de {{$item->provincia_arbol}}.
        </h2><br>

    <h2>Contacta a {{$item->name}} para plantar este arbol</h2><br>

    <form action="mailto:{{$item->email}}" method="post" enctype="text/plain">
        @csrf
        
        Mensaje:<br>
        <input placeholder= "Estoy interesado en tu {{$item->tipo_arbol}}" type="text" name="comment" size="300"><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
        </form>


@endforeach
@endsection