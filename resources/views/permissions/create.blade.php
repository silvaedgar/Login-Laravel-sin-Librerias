@extends('layouts.navbar')

@section('content')


<div class="container w-25 mt-5 rounded shadow ">
    <div class="row">
        <div class="text-center mt-3">
            <h4> Creación de Permisos</h4>
        </div>
    </div>
    <form method="POST" action = "{{ route('permissions.store')}}">
        @csrf
        <div class="mb-2">
            <label for="email" class="form-label" > Nombre </label>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" required name="name" value = "{{ old('name') }}">
            </div>
            @error('name')
                <span style="font-size: small; text-color: red "> {{ $message }} </span>
            @enderror
        </div>

        <div class="d-grid mt-3">
            <button type= "submit" class="btn btn-primary">Grabar Permiso </button>
        </div>
    </form>
    <div class="mt-3">
        <a  href = "{{ route ('permissions.index')}}">Regresar al Listado </a>
    </div>
</div>
@endsection
