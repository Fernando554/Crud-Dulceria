{{-- Mostrar la lista de dulces --}}
@extends('layouts.app')

@section('content')
<div class="container">

@if (Session::has('mensaje'))
    {{ Session::get('mensaje')}}
@endif

<a href="{{ url('dulce/create') }}" class="btn btn-success">Registrar nuevo dulce</a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre Del dulce</th>
            <th>Marca del dulce</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dulces as $dulce)
        <tr>
            <td>{{$dulce->id}}</td>
            <td>{{$dulce->NombreDelDulce}}</td>
            <td>{{$dulce->marca}}</td>
            <td>{{$dulce->precio}}</td>
            <td>{{$dulce->cantidad}}</td>
            <td><a href="{{ url('/dulce/'.$dulce->id.'/edit')}}" class="btn btn-warning">
            Editar
            </a> |

                <form action="{{url('/dulce/'.$dulce->id)}}" class="d-inline" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')"
                value="Borrar">
            </form>

            </td>
        </tr>
@endforeach

    </tbody>
</table>
</div>
@endsection
