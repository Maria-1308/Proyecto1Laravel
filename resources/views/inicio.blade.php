<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Juzgados</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff;
        }

        .header {
            background-color: #8B2635;
            color: white;
            text-align: center;
            padding: 20px 10px;
            font-weight: bold;
            font-size: 20px;
        }

        .nav {
            background-color: #D9C29D;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 15px;
            gap: 10px;
        }

        .nav a {
            background-color: #2F5D4E;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 15px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .nav a:hover {
            background-color: #3d7f68;
        }

        .main-content {
            text-align: center;
            padding: 60px 20px;
        }

        .main-content img {
            width: 140px;
            margin: 20px 0;
        }

        .main-content h1 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .main-content p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    

    <div class="header">
        SISTEMA DE JUZGADOS CIVILES Y FAMILIARES
    </div>

    <div class="nav">
        <a href="#">INFORMES</a>
        <a href="#">ESTADISTICA</a>
        <a href="#">TRABAJO PENDIENTE</a>
        <a href="#">LIBRO DE GOBIERNO</a>
        <a href="#">FONDO AUXILIAR</a>
        <a href="#">VISTADURIAS</a>
    </div>

    <div class="main-content">
        <h1>REPORTE ESTATAL ESTADISTICO</h1>
        <img src="{{ asset('imagnes/logo_pjetam.png') }}" alt="logo del poder judicial">
        <p><strong>PODER JUDICIAL</strong><br>— TAMAULIPAS —</p>
    </div>

</body>
</html>
