@extends('layouts.navbar')

@section('content')


<div class="card shadow" style="width:45rem;">
  <div class="card-body bg-light">

    <div class="row">
        <div class="col-6">
            <span class="h5 card-title text-center">Lista de Usuarios del Sistema</span>
        </div>
        <div class="col-6 justify-end ">
            <a href="{{ route('users.create')}}"> <button type="button" class="btn btn-secondary justify-end " data-bs-toggle="tooltip"
                data-bs-placement="top|end|bottom|start" title="Crear Usuario">
                <i class="fa fa-user-plus" aria-hidden="true">Agregar usuario</i>
            </button> </a>
        </div>

    </div>

    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-default">
            <tr>
                <th>Item</th>
                <th>Nombre Usuario</th>
                <th>e-mail</th>
                <th> Acción </th>
            </tr>
        </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>  {{ $user->name }} </td>
                    <td> {{ $user->email}} </td>
                    <td>
                        <button type="button" class="btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top|end|bottom|start" title="Editar Usuario">
                            <i class="fas fa-edit"></i>
                        </button>
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
