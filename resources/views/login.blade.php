@extends('layouts.navbar')

@section('content')


<div class="container w-25 mt-5 rounded shadow ">
    @if (session('status'))
        <div class="alert alert-danger mt-2" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="text-center mt-3">
            <h4> Inicio de Sesion</h4>
        </div>
        <form method="POST" action = "{{ route('login')}}">
            @csrf
            <div class="mb-2">
                <label for="email" class="form-label" > Correo Electronico</label>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" value = "{{ old('email') }}" required name="email" >
                </div>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label"> Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            {{-- <div class="mb-1">
                        <input type="checkbox" class="form-check-input" >
                        <label class="form-check-label">Mantenerme Conectado</label>
            </div> --}}
            <div class="d-grid">
                <button type= "submit" class="btn btn-primary">Iniciar Sesion </button>
            </div>
            <div class="row mt-2 my-2 justify-content-start ">
                        {{-- <div class="col-4"><a class= "" href=""> Registrarme </a> </div>
                <div class="col-8 text-end"> --}}
                    <a href="" style="font-size: small"> Olvidaste la Clave?. Recuperala </a>
                {{-- </div> --}}
            </div>
        </form>

            {{-- <div class="container w-100 my-2">
                <div class="row text-center">
                    <div class="col-12">
                        Iniciar sesión con:
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn-outline-primary w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2">

                                </div>
                                <div class="col-10 text-start">
                                    Facebook
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn-outline-danger w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2">
                                </div>
                                <div class="col-10 text-start">
                                    Google
                                </div>
                            </div>
                        </button>

                    </div>
                </div>
            </div> --}}
    </div>
</div>





{{-- <div class="body border shadow" style="width: 30rem">
    <h4 class="card-title mt-3 text-center">Login</h4>
    <form method="POST">
        @csrf
        <div class= "mx-auto" style = "width:40%">

            <div class="form-group mt-3">
                <span class="material-icons">email</span>
                 <input type="text"
                    class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Correo Electronico">
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label">Password</label>
                <input type="password"
                    class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mt-3">
                <input class = "btn-sm btn-primary"  type="submit" value="Enviar Datos"
                    class="form-control" aria-describedby="helpId" placeholder="">
            </div>
        </div>
    </form>

</div> --}}
@endsection
