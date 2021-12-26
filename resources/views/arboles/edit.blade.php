@extends('layouts.app')

@section('title','Login')

@section('content')

<h1 class="text-3xl text-center font-bold pt-20">Editar un arbol</h1>
@foreach ($arboles as $item)

<form action="{{ url('/arbol/'. $item->idarbol) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('arboles.form') 
</form>
@endforeach
@endsection