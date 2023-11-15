@extends('layouts.volt')

@section('title', 'Crear usuario')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Crear usuario</h2>
        <p class="mb-0">Crear un nuevo usuario con acceso a la plataforma.</p>
    </div>
</div>

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}    
</div>
@endif

@if (Session::has('exception'))
<div class="alert alert-danger" role="alert">
    {{ Session::get('exception') }}    
</div>
@endif


<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card card-body shadow-sm mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name">Nombre</label>
                            <input class="form-control " id="name" name="name" type="text" placeholder="Nombre del empleado" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input class="form-control " id="email" name="email" type="email" autocomplete="off" requiredplaceholder="ejemplo@mileniumcombustibles.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <select class="form-select mb-0 " id="status" name="status" aria-label="status select example">
                            <option selected value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                                                </div>
                    <div class="col-md-6 mb-3">
                        <label for="role">Rol</label>
                        <select class="form-select mb-0 " id="role" name="role" aria-label="role select example">
                            <option value="Administrador">Administrador</option>
                            <option value="Empleado" selected>Empleado</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mb-4">
                        <label for="password">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                            <input type="password" class="form-control" placeholder="Mínimo 8 caracteres" id="password" name="password">
                        </div>
                    </div>
                    <div class="col-md-6 form-group mb-4">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Crear usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection