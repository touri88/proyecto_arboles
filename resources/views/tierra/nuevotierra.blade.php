@extends('layouts.app')

@section('title','Login')

@section('content')



<h1>{{ $titulo }}</h1>
    <form action="{{ route('tierra.store'); }}" method="post">
    @csrf
    <label>Tipo de espacio: </label><input type="text" name="tipo_tierra"><br>
    <label>Provincia: </label><input type="text" name="provincia_tierra"><br>
    <label>Localidad: </label><input type="text" name="localidad_tierra"><br>
    <input type="hidden" name="user_tierra" value="{{ auth()->user()->id }}">
    <button type="submit">Enviar</button>

</form>


@endsection