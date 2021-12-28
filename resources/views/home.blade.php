@extends('layouts.app')

@section('title','Home')

@section('content')

      
        <h1 class="text-success text-center bg-muted" >Bienvenido a Arbolink</h1>


<div class="container">
    <div class="row align-items-center">
      <div class="col">
        <a class="btn btn-success" href="{{ route('arbol.create') }}" >Agregar un arbol </a>
      </div>
      <div class="col">
        <a class="btn btn-success" href="{{ route('arbol.index') }}" >Buscar un arbol </a>
      </div>
      <div class="col">
        <a class="btn btn-success" href="{{ route('tierra.create') }}" >Ofrecer espacio para plantar </a>
      </div>
      <div class="col">
        <a class="btn btn-success" href="{{ route('tierra.index') }}" >Buscar espacio para plantar </a>
      </div>
    </div>
</div>

@endsection