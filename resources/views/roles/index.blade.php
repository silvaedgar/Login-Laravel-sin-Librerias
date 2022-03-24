@extends('layouts.navbar')

@section('content')


<div class="card shadow" style="width:45rem;">
  <div class="card-body bg-light">

    <div class="row">
        <div class="col-6">
            <span class="h5 card-title text-center">Lista Roles del Sistema</span>
        </div>
        <div class="col-6 justify-end ">
            @can('roles.create')
                <a href="{{ route('roles.create')}}"> <button type="button" class="btn btn-secondary justify-end " data-bs-toggle="tooltip"
                    data-bs-placement="top|end|bottom|start" title="Crear Rol">
                    <i class="fa fa-user-plus" aria-hidden="true">Agregar Rol</i>
                </button> </a>
            @endcan
        </div>

    </div>

    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-default">
            <tr>
                <th style = "width:3%">Item</th>
                <th style="width:12%">Nombre</th>
                <th style="width:7%">Guard</th>
                <th style = "width:50%"> Permisos  </th>
                <th colspan = "2" style = "width:30%; text-align:center">Acción </th>
            </tr>
        </thead>
            <tbody>
                @foreach ($roles as $rol)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>  {{ $rol->name }} </td>
                    <td> {{ $rol->guard_name}} </td>
                    <td >
                        @forelse ($rol->permissions as $permisos)
                           <span class="text-dark "> {{ $permisos->name }} </span>
                        @empty
                            <span class=" text-danger "> No tiene permisos asignados </span>

                        @endforelse
                    </td>
                    <td>
                        @can('roles.edit')
                            <a href="{{ route('roles.edit', $rol->id)}}" ><button type="button" class="btn-sm btn-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="top|end|bottom|start" title="Editar Rol">
                            <i class="fas fa-edit"></i>
                            </button></a>
                        @endcan
                    </td>
                    <td>
                        <form action="{{ route('roles.destroy',$rol->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href =""><button type="submit" class="btn-sm btn-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="top|end|bottom|start" title="Eliminar Rol">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            </button> </a>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
    </table>
      </div>
</div>



@endsection
