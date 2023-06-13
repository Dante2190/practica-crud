@extends('layouts.app')
<div class="container">
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a class="btn btn-primary" href="{{ url('proyecto/create') }}">Registrar Nuevo Proyecto</a>
    <a href="{{ route('generarTodo.pdf') }}" class="btn btn-info">Generar todos los reportes</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->FuenteFondos }}</td>
                    <td>{{ $proyecto->MontoPlanificado }}</td>
                    <td>{{ $proyecto->MontoPatrocinado }}</td>
                    <td>{{ $proyecto->MontoFondosPropios }}</td>
                    <td><a class="btn btn-warning" href="{{ url('/proyecto/' . $proyecto->id . '/edit') }}">
                            Editar
                        </a>
                        <form action="{{ url('/proyecto/' . $proyecto->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                        <a href="{{ route('generar.pdf', $proyecto->id) }}" class="btn btn-primary">Generar PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
