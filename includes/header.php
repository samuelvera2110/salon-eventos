<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Vera">
    <title>Document</title>

    <style>
        /* MANTENEMOS TODO EL CSS EN EL HEADER.PHP PORQUE ESTABA EN LÍNEA */
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

        #contenedorImagen {
            margin-top: 20px;
            height: 450px;
            padding: 20px;
            /* Asegúrate de que esta ruta sea correcta para tu imagen */
            background: url(img/index/salon.jpg) center/cover no-repeat; 

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #contenedorImagen>h1 {
            color: white;
            font-size: 48px;
            margin-top: 100px;
            text-align: center;
        }

        #contenedorImagen p {
            color: white;
            font-size: 24px;
            text-align: center;
        }

        #sobreNosotros {
            margin: auto;
            width: 50%;
        }

        #sobreNosotros h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #sobreNosotros p {
            line-height: 1.30;
        }


        .imagenDerecha {
            width: 300px;
            float: right;
            margin: 0;
        }

        #end {
            clear: both;
            margin: 0;
        }

        #seccionBeneficios,
        #salonesContenedor {
            text-align: center;
            margin: 40px auto;
            width: 80%;
        }

        .items,
        .salones {
            display: flex;
            justify-content: center;
            gap: 5%;
        }

        .items div,
        .salones div {
            flex: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: space-between;
        }

        .items img {
            width: 60px;
            margin-bottom: 5px;
        }

        .salones img {
            width: 250px;
            margin-bottom: 5px;
        }

        .salones a {
            text-decoration: none;
            color: blue;
        }

        .salones a:hover {
            text-decoration: underline;
        }

        .salones h3,
        p,
        a {
            margin: 5px;
            padding: 3px;
        }

        footer {
            background-color: #f2f2f2;
            padding: 20px 0;
            margin-top: 40px;
        }

        #contenedorFooter {
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 30px;
            align-items: start;
            align-self: self-start;
        }

        .redes {
            text-align: center;
            margin-top: 20px;
        }

        .redes a {
            margin: 0 10px;
            display: inline-block;
        }

        .informacionContacto {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .informacionContacto .contacto-linea {
            display: flex;
            align-items: center;
        }

        .informacionContacto img {
            margin-right: 10px;
            flex-shrink: 0;
        }

        .informacionContacto p {
            margin: 0;
            padding: 0;
        }

        .acercaDe ul {
            list-style-type: none;
            padding: 0;
        }

        .acercaDe li {
            margin: 5px 0;
        }

        .formularioFooter {
            text-align: left;
            margin-top: 0;
        }

        .formularioFooter .campo {
            margin: 10px 0;
        }

        .formularioFooter input[type="email"] {
            padding: 8px;
            width: 180px;
            margin-right: 10px;
        }

        .formularioFooter button {
            padding: 8px 16px;
        }
    </style>
</head>

<body>

    <div class="contenedorPrincipal">

        <div id="contenedorHeader">

            <img id="logo" src="" alt="Imagen del logo">

            <div id="navegacion">
                <nav>
                    <a href="#.html">Inicio</a>
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