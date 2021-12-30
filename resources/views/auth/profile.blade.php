@extends('layouts.app')

@section('title','Login')

@section('content')

<h1 class="text-success text-center">Perfil de usuario de {{ auth()->user()->name }}</h1>


<h2 class="text-success">{{ $titulo }}</h2>
<table class="table table-success table-striped table-hover">
    <thead class= "bg-success">
        <tr>
            <th class="text-center">Tipo de arbol</th>
            <th class="text-center">Provincia</th>
            <th class="text-center">Localidad</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arboles as $item)
            <tr class="element">
                <td class="text-center"><a class="nav-link text-success" href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->tipo_arbol }} </td>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->provincia_arbol }} </td>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->localidad_arbol }} </td>
                <td class="d-flex">
                   
                        <a class="btn btn-outline-secondary m-auto" href="{{ url('/arbol/'. $item->idarbol. '/edit') }}">Editar</a>

                        <form action="{{ url('/arbol/'. $item->idarbol) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-outline-danger m-auto" type="submit" onclick="return confirm('Desea borrar?')" value="Borrar">

                        </form>
                    
                </td>
            </tr>
            
        @endforeach
    </tbody>
    
</table>

<h2 class="text-success">{{ $titulo2 }}</h2>
<table class="table table-success table-striped table-hover">
    <thead class= "bg-success">
        <tr>
            <th class="text-center">Tipo de espacio</th>
            <th class="text-center">Provincia</th>
            <th class="text-center">Localidad</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tierra as $item)
            <tr class="element">
                <td class="text-center"><a class="nav-link text-success" href="{{ route('tierra.index'); }}/{{ $item->idtierra }}"> {{ $item->tipo_tierra }} </a></td>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('tierra.index'); }}/{{ $item->idtierra }}"> {{ $item->provincia_tierra }} </a></td>
                <td class="text-center"><a class="nav-link text-success" href="{{ route('tierra.index'); }}/{{ $item->idtierra }}"> {{ $item->localidad_tierra }} </a></td>
                <td class="d-flex">
                    
                    <a class="btn btn-outline-secondary m-auto" href="{{ url('/tierra/'. $item->idtierra. '/edit') }}">Editar</a> 

                    <form action="{{ url('/tierra/'. $item->idtierra) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-outline-danger m-auto" type="submit" onclick="return confirm('Desea borrar?')" value="Borrar">

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection