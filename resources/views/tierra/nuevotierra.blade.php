@extends('layouts.app')

@section('title','Login')

@section('content')



<h1>{{ $titulo }}</h1>
<form action="{{ route('tierra.store'); }}" method="post">
    @csrf
    @include('tierra.form')

</form>


@endsection