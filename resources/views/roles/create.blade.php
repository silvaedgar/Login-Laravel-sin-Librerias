@extends('layouts.navbar')

@section('content')


<div class="container w-25 mt-5 rounded shadow ">
    <div class="row">
        <div class="text-center mt-3">
            <h4> Creación de Roles</h4>
        </div>
    </div>
    <form method="POST" action = "{{ route('roles.store')}}">
        @csrf
        @include('roles.form')
        <div class="d-grid mt-3">
            <button type= "submit" class="btn btn-primary">Grabar Rol </button>
        </div>
    </form>
    <div class="mt-3">
        <a  href = "{{ route ('roles.index')}}">Volver al Listado de Roles </a>
    </div>
</div>
@endsection
