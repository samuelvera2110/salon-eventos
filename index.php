<?php 
require 'includes/header.php';
?>

<style>
    #contenedorImagen {
        margin-top: 20px;
        height: 450px;
        padding: 20px;
        background: url(img/index/salon.jpg) center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #contenedorImagen h1 {
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

    .imagenDerecha {
        width: 300px;
        float: right;
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

    .items img {
        width: 60px;
    }

    .salones img {
        width: 250px;
    }
</style>

<div id="contenedorImagen">
    <h1><b>Tu evento</b></h1>
    <p><strong>Celebra momentos inolvidables en nuestros salones</strong></p>
    <button>Reserva ahora</button>
</div>

<div id="sobreNosotros">
    <h2>Sobre Nosotros</h2>
    <img src="img/index/salon-bodas.jpeg" class="imagenDerecha">

    <p>Lorem ipsum...</p>
    <p>Lorem ipsum...</p>
</div>

<div id="seccionBeneficios">
    <h2>¿Por qué elegirnos?</h2>

    <div class="items">
        <div>
            <img src="img/index/reserva.png">
            <h3>Reserva en tiempo real</h3>
            <p>Realiza tu reserva al instante</p>
        </div>

        <div>
            <img src="img/index/servicio.png">
            <h3>Servicios</h3>
            <p>Variedad de opciones</p>
        </div>

        <div>
            <img src="img/index/darse-la-mano.png">
            <h3>Asesorías</h3>
            <p>Te ayudamos en todo</p>
        </div>
    </div>
</div>

<div id="salonesContenedor">
    <h2>Nuestros salones destacados</h2>

    <div class="salones">
        <div>
            <img src="img/index/salon-bodas.jpeg">
            <h3>Salón Elegance</h3>
            <p>Ideal para bodas.</p>
            <a href="">Ver más</a>
        </div>

        <div>
            <img src="img/index/salon-fiesta-infantil.jpg">
            <h3>Salón Fiesta</h3>
            <p>Perfecto para eventos familiares.</p>
            <a href="">Ver más</a>
        </div>

        <div>
            <img src="img/index/salon-conferencias.jpg">
            <h3>Salón Business</h3>
            <p>Para reuniones de negocios.</p>
            <a href="">Ver más</a>
        </div>

        <div>
            <img src="img/index/salon-terraza.jpeg">
            <h3>Salón Terraza</h3>
            <p>Al aire libre.</p>
            <a href="">Ver más</a>
        </div>
    </div>
</div>

<?php 
require 'includes/footer.php';
?>
