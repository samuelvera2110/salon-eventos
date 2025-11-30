<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jeremy Guncay">
    <title>Salón de Eventos</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .contenedorPrincipal {
            width: 100%;
        }

        
        #contenedorHeader {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: white;
            border-bottom: 2px solid #f0f0f0;
        }

        #logo {
            width: 80px;
        }

        #navegacion nav {
            display: flex;
            gap: 30px;
        }

        #navegacion a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        #navegacion a:hover {
            color: #5e72e4;
        }

        #botones button {
            padding: 10px 25px;
            margin-left: 10px;
            border: 2px solid #5e72e4;
            background: white;
            color: #5e72e4;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        #botones button:first-child {
            background: #5e72e4;
            color: white;
        }

        #botones button:hover {
            transform: translateY(-2px);
        }

        
        #contenedorImagen {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('img/index/salon.jpg') center/cover;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        #contenedorImagen h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        #contenedorImagen p {
            font-size: 1.3rem;
        }

       
        .introduccionServicios {
            padding: 60px 20px;
            text-align: center;
            background: #f9f9f9;
        }

        .introduccionServicios h2 {
            font-size: 2.2rem;
            color: #5e72e4;
            margin-bottom: 20px;
        }

        .introduccionServicios p {
            max-width: 800px;
            margin: 0 auto;
            color: #666;
            line-height: 1.8;
        }

       
        .contenedorServicios {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contenedorServicios h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 40px;
            color: #333;
        }

        .gridServicios {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .servicioCard {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s;
        }

        .servicioCard:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }

        .servicioCard img {
            width: 60px;
            margin-bottom: 15px;
        }

        .servicioCard h3 {
            font-size: 1.3rem;
            color: #5e72e4;
            margin-bottom: 10px;
        }

        .servicioCard p {
            color: #666;
            margin-bottom: 15px;
        }

        .servicioCard ul {
            list-style: none;
            text-align: left;
        }

        .servicioCard li {
            padding: 5px 0;
            color: #555;
        }

        .servicioCard li::before {
            content: '✓ ';
            color: #28a745;
            margin-right: 5px;
        }

        /* PAQUETES */
        .seccionPaquetes {
            background: #5e72e4;
            padding: 60px 20px;
            color: white;
        }

        .seccionPaquetes h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 40px;
        }

        .paquetes {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .paquete {
            background: white;
            color: #333;
            border-radius: 10px;
            padding: 30px;
            width: 300px;
            text-align: center;
        }

        .paquete h3 {
            color: #5e72e4;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .precio {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin: 20px 0;
        }

        .paquete ul {
            list-style: none;
            margin: 20px 0;
            text-align: left;
        }

        .paquete li {
            padding: 8px 0;
            color: #555;
        }

        .paquete button {
            background: #5e72e4;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
        }

        .paquete button:hover {
            background: #4c63d2;
        }

        /* CTA */
        .ctaServicios {
            padding: 60px 20px;
            text-align: center;
        }

        .ctaServicios h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
        }

        .ctaServicios p {
            color: #666;
            margin-bottom: 25px;
        }

        .ctaServicios button {
            background: #5e72e4;
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .ctaServicios button:hover {
            background: #4c63d2;
        }

        /* ===== ESTILOS DEL FOOTER ===== */
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

        /* Responsive */
        @media (max-width: 768px) {
            #contenedorHeader {
                flex-direction: column;
                padding: 15px;
                gap: 15px;
            }

            #navegacion nav {
                flex-direction: column;
                gap: 10px;
            }

            #contenedorFooter {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="contenedorPrincipal">

        <div id="contenedorHeader">
            <img id="logo" src="img/logo.png" alt="Logo">
            
            <div id="navegacion">
                <nav>
                    <a href="index.php">Inicio</a>
                    <a href="salones.php">Salones</a>
                    <a href="servicios.php">Servicios</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
            
            <div id="botones">
                <button>Registrarse</button>
                <button>Iniciar Sesión</button>
            </div>
        </div>