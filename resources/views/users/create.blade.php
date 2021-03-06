@extends('layouts.navbar')

@section('content')


<div class="container w-50 mt-5 rounded shadow ">
    <div class="row">
        <div class="text-center mt-3">
            <h4> Creación de Usuario</h4>
        </div>
    </div>
    <form method="POST" action = "{{ route('users.store')}}">
        @csrf
        @include('users.form')
        <div class="d-grid mt-3">
            <button type= "submit" class="btn btn-primary">Grabar Usuario </button>
        </div>
    </form>
    <div class="mt-3">
        <a  href = "{{ route ('users.index')}}">Regresar al Listado </a>
    </div>
</div>
@endsection
