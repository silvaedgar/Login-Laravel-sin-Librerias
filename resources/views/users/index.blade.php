@extends('layouts.navbar')

@section('content')


<div class="card shadow" style="width:45rem;">
  <div class="card-body bg-light">

    <div class="row">
        <div class="col-6">
            <span class="h5 card-title text-center">Lista de Usuarios del Sistema</span>
        </div>
        <div class="col-6 justify-end ">
            @can('users.create')
                <a href="{{ route('users.create')}}"> <button type="button" class="btn btn-secondary justify-end " data-bs-toggle="tooltip"
                    data-bs-placement="top|end|bottom|start" title="Crear Usuario">
                    <i class="fa fa-user-plus" aria-hidden="true">Agregar usuario</i>
                </button> </a>
            @endcan
        </div>

    </div>

    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-default">
            <tr>
                <th>Item</th>
                <th>Nombre Usuario</th>
                <th>e-mail</th>
                <th> Roles </th>
                <th> Acción </th>
            </tr>
        </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>  {{ $user->name }} </td>
                    <td> {{ $user->email}} </td>
                    <td >
                        @forelse ($user->roles as $rol)
                           <span class="text-dark "> {{ $rol->name }} </span>
                        @empty
                            <span class=" text-danger "> No tiene rol asignado </span>
                        @endforelse
                    </td>
                    <td>
                        @can('users.edit')
                            <a href="{{ route('users.edit',$user->id)}}"><button type="button" class="btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top|end|bottom|start" title="Editar Usuario">
                                <i class="fas fa-edit"></i>
                            </button>
                        @endcan
                        <button type="button" class="btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top|end|bottom|start" title="Eliminar Usuario">
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
