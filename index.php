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
        overflow: auto;
    }

    #sobreNosotros > p{
        line-height: 1.5;
    }

    .imagenSobreNosotros {
        width: 300px;
        float: left;
        padding-right: 10px;
    }

    #seccionBeneficios,
    #salonesContenedor,
    #seccionOpiniones {
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

    .items > div, .salones > div{
        background-color: #f4f4f4;
    }

    .items img {
        width: 60px;
    }

    .salones img {
        width: 250px;
    }
    
    .opiniones{
        width: 60%;
        margin: 20px auto;
        display: flex;
        padding: 10px;
        border-radius: 5px;
        gap: 20px;
        align-items: center;
        background-color: #f4f4f4;
    }

    .opiniones img{
        width: 90px;
        height: 90px;
        border-radius: 50%;
    }

    .contenido{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

</style>

<div id="contenedorImagen">
    <h1><b>Tu evento</b></h1>
    <p><strong>Celebra momentos inolvidables en nuestros salones</strong></p>
    <button>Reserva ahora</button>
</div>

<div id="sobreNosotros">
    <h2>Sobre Nosotros</h2>
    <img src="img/index/salon-bodas.jpeg" class="imagenSobreNosotros">

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, dolorem iste nam accusamus enim consectetur a doloribus est minima dignissimos ipsa laborum quae iusto optio asperiores tempora, dolores reiciendis amet?</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi cumque libero doloribus vero, qui accusantium dolorum sit dolorem illum maiores et? Repellat ipsam exercitationem veritatis ullam tenetur amet ducimus dolorem.</p>
</div>

<div id="seccionBeneficios">
    <h2>¿Por qué elegirnos?</h2>

    <div class="items">
        <div>
            <img src="img/index/reserva.png">
            <h3>Reserva en tiempo real</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda molestiae corporis omnis, rerum voluptas vero. At accusantium quisquam laudantium minus architecto nihil et, porro minima non consequuntur omnis praesentium perspiciatis?</p>
        </div>

        <div>
            <img src="img/index/servicio.png">
            <h3>Servicios</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi hic asperiores, quaerat qui, voluptates rem facilis dolorum enim pariatur similique deserunt obcaecati ut optio. Ducimus cumque beatae hic unde nihil.</p>
        </div>

        <div>
            <img src="img/index/darse-la-mano.png">
            <h3>Asesorías</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, autem labore consequuntur neque adipisci ipsum ipsam quos? Excepturi dicta modi nihil assumenda, voluptatem molestias quas dolor corrupti, possimus tenetur suscipit.</p>
        </div>
    </div>
</div>

<div id="salonesContenedor">
    <h2>Nuestros salones destacados</h2>

    <div class="salones">
        <div>
            <img src="img/index/salon-bodas.jpeg">
            <h3>Salón Elegance</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quae fuga eveniet in facilis nisi minima blanditiis itaque mollitia? Architecto eum saepe distinctio nobis at laboriosam voluptate sint nostrum odio?</p>
            <a href="">Ver más</a>
        </div>

        <div>
            <img src="img/index/salon-fiesta-infantil.jpg">
            <h3>Salón Fiesta</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In provident eveniet voluptatibus ducimus aut, quae iure nulla modi quo adipisci repudiandae obcaecati rem dolore animi aliquid debitis officia saepe ad?</p>
            <a href="">Ver más</a>
        </div>

        <div>
            <img src="img/index/salon-conferencias.jpg">
            <h3>Salón Business</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quod incidunt quis laboriosam? Neque, sunt veniam. Quas cum incidunt illum dignissimos? Omnis iste dolore quaerat debitis, ab quos quisquam. Quaerat!</p>
            <a href="">Ver más</a>
        </div>

        <div>
            <img src="img/index/salon-terraza.jpeg">
            <h3>Salón Terraza</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eius, dolore saepe quia unde dolorum voluptatum veritatis necessitatibus impedit molestias fuga modi enim cupiditate, pariatur ipsa, harum earum. Facilis, est.</p>
            <a href="">Ver más</a>
        </div>
    </div>
</div>

<div id="seccionOpiniones">

    <h2>Opiniones de nuestros clientes</h2>

    <div class="opiniones">
        <img src="https://img.icons8.com/?size=100&id=ZmPzEQFqF5mx&format=png&color=000000" alt="Imagen cliente">
        <div class="contenido">
            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, fuga suscipit? Consequatur, sapiente dicta, sed maiores dolore iste aut mollitia voluptatem tenetur possimus labore ducimus cum itaque et amet eveniet!"</p>
            <div class="nombreAutor">
                <strong>Juan Caicedo</strong>
            </div>
        </div>
    </div>

    <div class="opiniones">
        <img src="https://img.icons8.com/?size=100&id=U4ygcxOqmMse&format=png&color=000000" alt="Imagen cliente">
        <div class="contenido">
            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, fuga suscipit? Consequatur, sapiente dicta, sed maiores dolore iste aut mollitia voluptatem tenetur possimus labore ducimus cum itaque et amet eveniet!"</p>
            <div class="nombreAutor">
                <strong>Victoria Valdiviezo</strong>
            </div>
        </div>
    </div>

    <div class="opiniones">
        <img src="https://img.icons8.com/?size=100&id=nxiqdMfruEdM&format=png&color=000000" alt="Imagen cliente">
        <div class="contenido">
            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, fuga suscipit? Consequatur, sapiente dicta, sed maiores dolore iste aut mollitia voluptatem tenetur possimus labore ducimus cum itaque et amet eveniet!"</p>
            <div class="nombreAutor">
                <strong>Ramón Acosta</strong>
            </div>
        </div>
    </div>

</div>


<?php 
require 'includes/footer.php';
?>
