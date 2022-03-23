@extends('layouts.navbar')

@section('content')


<div class="container w-25 mt-5 rounded shadow bg-light">

    @if (session('status'))
        <div class="alert alert-danger mt-2" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div>
            <div class="text-center mt-3">
                <h4> Registro de Usuario</h4>
            </div>
<!-- -----------------------------------------------------------
 FORMULARIO DE ENTRADA DE DATOS PARA INICIO DE SESION
---------------------------------------------------------- -->
    <form method="POST" action="{{ route('register')}}">
        @csrf
        <div class="mb-1">
            <label for="email" class="form-label"> Nombre Usuario</label>
            <input type="text" class="form-control" value = "{{ old('name')}}"  name="name"
                    placeholder = "Nombre de usuario" required>
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-1">
            <label for="email" class="form-label"> Correo Electronico</label>
            <input type="email" class="form-control" name="email" value = "{{ old('email')}}"
                placeholder = "Correo Electrónico" required>
            @error('email')
                <span class = "text-warning"> {{ $message }} </span>
            @enderror

        </div>
        <div class="mb-1">
            <label for="password" class="form-label"> Password</label>
            <input type="password" class="form-control" name="password" value = "{{ old('password') }}" required>
            @error('password')
                <span class = "text-danger text-sm"> {{ $message }} </span>
            @enderror

        </div>
        <div class="mb-1">
            <label for="password" class="form-label"> Confirma Password</label>
            <input type="password"  class="form-control" name="password1" required>
        </div>
        <div class="d-grid mt-3 mb-3">
             <button type= "submit" class="btn btn-primary">Registrarme </button>
        </div>
    </form>


@endsection
