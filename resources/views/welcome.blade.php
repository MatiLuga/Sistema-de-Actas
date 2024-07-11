<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Actas</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
            }

            .button {
                display: inline-block;
                padding: 10px 20px;
                margin: 10px;
                font-size: 24px;    
                text-align: center;
                text-decoration: none;
                border: 2px solid #0a0a0a;
                color: #0a0a0a;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }
            .button:hover {
                background-color: #007bff;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Bienvenido al Sistema de Actas</div>

                <a href="{{ route('login') }}" class="btn btn-primary button">Iniciar Sesión</a>
                <a href="{{ route('crearActa') }}" class="btn btn-primary button">Crear Acta</a>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
