@extends('layouts.app')

@section('content')    
    <div class="container">
        <h2 class="mb-4">Crear Acta</h2>
        
        <form method="POST" action="{{ route('actas.store') }}" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
            </div>
        
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}" required>
            </div>
        
            <div class="form-group">
                <label for="horario_entrada">Horario de Entrada:</label>
                <input type="datetime-local" id="horario_entrada" name="horario_entrada" class="form-control" value="{{ old('horario_entrada') }}" required>
            </div>
        
            <div class="form-group">
                <label for="texto">Texto:</label>
                <textarea id="texto" name="texto" class="form-control" rows="5" required>{{ old('texto') }}</textarea>
            </div>

            <div class="form-group">
                <label for="creado_por">Firma:</label>
                <input type="text" id="creado_por" name="creado_por" class="form-control" value="{{ old('creado_por') }}" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection