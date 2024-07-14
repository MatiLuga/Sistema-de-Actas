@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Actas</h1>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="{{ route('actas.create') }}" class="btn btn-primary">Crear Acta</a>
        <a href="{{ route('actas.export') }}" class="btn btn-success mb-3">Exportar a Excel</a>
    </div>
    <!-- Mensajes de éxito o error -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><a href="{{ route('actas.index', ['sort' => 'nombre', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">Nombre</a></th>
                    <th><a href="{{ route('actas.index', ['sort' => 'horario_entrada', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">Horario de Entrada</a></th>
                    <th>Acciones</th> <!-- Agrega esta columna para las acciones -->
                    <th>Firma</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actas as $acta)
                    <tr>
                        <td>{{ $acta->nombre }} {{ $acta->apellido }}</td>
                        <td>{{ $acta->horario_entrada }}</td>
                        <td>
                            <!-- Formulario para eliminar el acta -->
                            <form action="{{ route('actas.destroy', $acta->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </for>
                        </td>
                        <td>{{ $acta->creado_por }}</td>
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
