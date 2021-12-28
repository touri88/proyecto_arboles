@extends('layouts.app')

@section('title','Login')

@section('content')



<h1 class="text-3xl text-center font-bold pt-20" > {{ $titulo }} </h1>
<div class="form-floating mb-3">
<form class="mb-3" action="arbol" method="get">
    <label class="form-control" >Provincia: </label><input class="form-control" type="text" name="provincia_arbol"><br>
    <label class="form-control">Localidad: </label><input class="form-control" type="text" name="localidad_arbol"><br>
    <label class="form-control">Tipo: </label><input class="form-control" type="text" name="tipo_arbol"><br>
    <button class="btn btn-success" type="submit">Buscar</button>
</form>
</div>
<div class="Tab">
<table class="table table-success table-striped table-hover">
    <thead class= "bg-success">
        <tr>
            <th class="text-center">Tipo de arbol</th>
            <th class="text-center">Provincia</th>
            <th class="text-center">Localidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arboles as $item)
            <tr>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->tipo_arbol }} </a></td>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->provincia_arbol }} </a></td>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->localidad_arbol }} </a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection