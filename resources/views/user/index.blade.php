@extends('layouts.volt')

@section('title', 'Usuarios')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Usuarios</h2>
        <p class="mb-0">Usuarios con acceso.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Crear usuario
        </a>
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

<!-- <div class="alert alert-danger" role="alert"></div> -->

<div class="card card-body shadow border-0 table-wrapper table-responsive">
    <table class="table user-table table-hover align-items-center">
        <thead>
            <tr>
                <th class="border-bottom">Nombre</th>
                <th class="border-bottom">Rol</th>
                <th class="border-bottom">Fecha de creación</th>
                <th class="border-bottom">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>                    
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="d-flex align-items-center">
                            <div class="d-block">
                                <span class="fw-bold">{{ $user->name }}</span>
                                <div class="small text-gray">{{ $user->email}}</div>
                            </div>
                        </a>
                    </td>
                    <td><span class="fw-normal">{{ $user->role}}</span></td>
                    <td><span class="fw-normal d-flex align-items-center">{{ $user->created_at}}</span></td>
                    <td><span class="fw-normal text-success">{{ $user->status }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection