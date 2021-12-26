@extends('layouts.app')

@section('title','Login')

@section('content')

<h1 class="text-3xl text-center font-bold pt-20">Editar un arbol</h1>
@foreach ($tierra as $item)

<form action="{{ url('/tierra/'. $item->idtierra) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('tierra.form') 
</form>
@endforeach
@endsection