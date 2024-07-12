@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Actas</h1>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="{{ route('actas.create') }}" class="btn btn-primary">Crear Acta</a>
        <a href="{{ route('actas.export') }}" class="btn btn-success mb-3">Exportar a Excel</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><a href="{{ route('actas.index', ['sort' => 'nombre']) }}">Nombre</a></th>
                    <th><a href="{{ route('actas.index', ['sort' => 'horario_entrada']) }}">Horario de Entrada</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($actas as $acta)
                    <tr>
                        <td>{{ $acta->nombre }} {{ $acta->apellido }}</td>
                        <td>{{ $acta->horario_entrada }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $actas->appends(request()->query())->links() }}
    </div>
</div>
@endsection
