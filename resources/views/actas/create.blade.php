<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas - Formulario</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        textarea.form-control {
            resize: vertical; /* Permite redimensionar verticalmente */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Crear Acta</h2>
        
        <form method="POST" action="{{ route('actas.create') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h3>Entra al edificio</h3>

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
    
    <!-- Bootstrap JS y dependencias opcionales -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
