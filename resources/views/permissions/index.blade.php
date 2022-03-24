@extends('layouts.navbar')

@section('content')


<div class="card shadow" style="width:45rem;">
  <div class="card-body bg-light">

    <div class="row">
        <div class="col-6">
            <span class="h5 card-title text-center">Lista de Permisos</span>
        </div>
        <div class="col-6 justify-end ">
            <a href="{{ route('permissions.create')}}"> <button type="button" class="btn btn-secondary justify-end " data-bs-toggle="tooltip"
                data-bs-placement="top|end|bottom|start" title="Crear Usuario">
                <i class="fa fa-user-plus" aria-hidden="true">Agregar Permiso</i>
            </button> </a>
        </div>

    </div>

    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-default">
            <tr>
                <th>Item</th>
                <th>Nombre del Permiso</th>
                <th>Guard</th>
                <th>Acción</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>  {{ $permission->name }} </td>
                    <td> {{ $permission->guard_name}} </td>
                    <td>
                        <button type="button" class="btn-sm btn-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="top|end|bottom|start" title="Editar Permiso">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn-sm btn-secondary" data-bs-toggle="tooltip"
                            data-bs-placement="top|end|bottom|start" title="Eliminar Permiso">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>

                @endforeach
            </tbody>
    </table>
      </div>
</div>



@endsection
