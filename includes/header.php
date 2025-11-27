<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Vera">
    <title>Document</title>

    <style>
        .contenedorPrincipal {
            width: auto;
            padding: 10px;
            margin: auto;
        }

        #contenedorHeader {
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            align-items: center;
            border-bottom: 1px solid lightgray;
        }

        #logo {
            width: 100px;
        }

        #navegacion nav a {
            text-decoration: none;
            padding: 20px;
            font-size: 14px;
            display: inline-block;
        }

        #botones button {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="contenedorPrincipal">

        <div id="contenedorHeader">
            <img id="logo" src="" alt="Imagen del logo">

            <div id="navegacion">
                <nav>
                    <a href="index.php">Inicio</a>
                    <a href="#.html">Salones</a>
                    <a href="#.html">Servicios</a>
                    <a href="#.html">Sobre Nosotros</a>
                    <a href="#.html">Contáctenos</a>
                </nav>
            </div>

            <div id="botones">
                <button>Registrar</button>
                <button>Iniciar sesión</button>
            </div>
        </div>
