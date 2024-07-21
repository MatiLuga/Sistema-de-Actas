@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card shadow-sm" style="width: 100%;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Detalle del Acta</h2>
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $acta->nombre }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $acta->apellido }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto:</label>
                        <textarea id="texto" name="texto" class="form-control" rows="5" readonly>{{ $acta->texto }}</textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
