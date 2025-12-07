<?php
    require 'includes/header.php'
?>

<style>

    #contenedorImagen{
        margin: auto;
        height: 450px;
        background: url(img/index/salon-bodas.jpeg) center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #contenedorImagen > div{
        background-color: rgba(255,255,255,0.8);
        padding: 50px 60px;
        border-radius: 20px;
        box-shadow: 0px 4px 10px black;
        text-align: center;
    }

    #contenedorSobreNosotros{
        display: flex;
        justify-content: space-between;
        padding: 60px 80px;
        align-items: center;
        gap: 40px;
        background-color: #F2F0EB;
    }

    #contenedorSobreNosotros div :last-child{
        margin: 0;
        padding: 0;
        flex: 1;
    }

    h2 ~ p{
        text-align: justify;
    } 

    #contenedorSobreNosotros img{
        width: 100%;
        height: auto;
        border-radius: 20px;
        object-fit: cover;
    }

    #contenedorNuestrosServicios{
        text-align: center;
        padding: 60px 40px;
        background-color: #F2F0EB;
    }

    #contenedorNuestrosServicios p {
        text-align: center;
        margin-bottom: 40px;
    }

    #contenedorSalones{
        padding: 20px;
    }

    .contenedorCards {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .galeria{
        width: 50%;
        display: grid;
        grid-template-columns:1fr 1fr;
        grid-template-rows: auto auto auto;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .elemento img{
        width: 90%;
        height: 90%;
        object-fit: cover;
        border-radius: 10px;
        display: block;
    }

    .galeria .elemento:first-child {
        grid-column: 1;
        grid-row: 1 / 3;
    }

    .galeria .elemento:nth-child(2) {
        grid-column: 2;
        grid-row: 1;
    }

    .galeria .elemento:nth-child(3) {
        grid-column: 2;
        grid-row: 2;
    }

    .galeria .elemento:nth-child(4) {
        grid-column: 1;
        grid-row: 3;
    }

    .galeria .elemento:nth-child(5) {
        grid-column: 2;
        grid-row: 3;
    }

    #contenedorSalones{
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .contenedorCardSalones{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin: auto;
    }

    .cardSalon{
        height: 300px;
        border-radius: 15px;
        background-repeat: no-repeat;
        position: relative;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        display: flex;
        align-items: flex-end;
    }

    .btn-reservar {
        
    }

    .cardSalon div{
        width: 100%;
        padding: 20px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 70%, rgba(0, 0, 0, 0) 100%);
    }

    .cardSalon h3{ margin: 0; font-size: 20px; text-align: left; font-weight:normal;; color: white;  text-shadow: 0px 2px 4px rgba(0,0,0,0.8);}
    
    .contenedorCards.hover-active .card {
        transform: scale(0.9);
        filter: brightness(0.8);
    }

    .contenedorCards .card.activa {
        transform: scale(1.05);
        filter: brightness(1);
    }

</style>


    <main>
        <div id = "contenedorImagen">
            <div>
                <h1>Tu evento empieza aquí</h1>
                <p>Encuentra el espacio ideal para tu evento</p>
                <button>Reserva ahora</button>
            </div>  
        </div>

        <div id="contenedorSobreNosotros">
            <div>
                <h2>Bienvenidos a Eventix</h2>
                <p>En Eventix creemos que cada evento merece un espacio a la altura de la ocasión. Nuestro
                    objetivo es ayudarte a encontrar el lugar ideal para tus eventos. Con Eventix planificar tu evento
                    es más fácil que nunca.
                </p>
                <a href="">Más información</a>
            </div>
            <div>
                <img src="https://weezevent.com/wp-content/uploads/2023/05/12154322/ideas-tema-fiesta.jpg" alt="Imagen">
            </div>
        </div>

        <div class="galeria">
            <div class="elemento">
                <img src="http://criteriabcn.com/wp-content/uploads/2015/06/dise%C3%B1o_espacio_banquetes_10.jpg">
            </div>
            <div class="elemento">
                <img src="https://www.expoplaza.ec/wp-content/uploads/2023/09/sala-convenciones.jpg">
            </div>
            <div class="elemento">
                <img src="https://www.expoplaza.ec/wp-content/uploads/2023/09/sala-reuniones.jpg">
            </div>
            <div class="elemento">
                <img src="https://cdn0.bodas.com.mx/article-vendor/6325/original/960/jpg/mojitos_5_116325-167500596166245.webp">
            </div>
            <div class="elemento">
                <img src="https://florigen.shop/wp-content/uploads/2025/04/B_S-475-683x1024.webp">
            </div>
        </div>

        <div id="contenedorNuestrosServicios">
            <h2>Nuestros servicios</h2>
            <p>Conoce todo lo que Eventix ofrece para que tu celebración sea perfecta, desde la elección del salón ideal hasta la gestión completa de tu reserva.
            </p>
            <div class="contenedorCards">
                <div class="card">
                    <img src="https://www.oroverdeguayaquil.com/wp-content/uploads/salon-oroverde.jpg" alt="Salones">
                    <h3>Salones</h3>
                    <p>Explora salones diseñados para bodas, cumpleaños, reuniones empresariales y eventos sociales. Ambientes elegantes, amplios y adaptados a cada estilo que imagines.</p>
                </div>
                <div class="card">
                    <img src="https://static.wixstatic.com/media/8042f2_fa1e0d8a01ce47019e8f363ca920317b~mv2.jpg/v1/fill/w_648,h_262,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/8042f2_fa1e0d8a01ce47019e8f363ca920317b~mv2.jpg" alt="Adicionales">
                    <h3>Adicionales</h3>
                    <p>Complementa tu evento con servicios adicionales como dj, maestro de ceremonia, bar, fotografía, sonido e iluminación profesional. Todo lo que necesitas en un solo lugar.</p>
                </div>
                <div class="card">
                    <img src="https://www.hotelpalaceguayaquil.com.ec/files-sbbasic/ba_palaceguayaquil_ec/pa2_9630.jpg?w=1500&h=675" alt="Reservas">
                    <h3>Reservas</h3>
                    <p>Consulta disponibilidad, agenda tu fecha y gestiona tus reservas fácilmente desde nuestra plataforma. Rápido, seguro y sin complicaciones</p>
                </div>
            </div>
        </div>

        <div id="contenedorSalones">
            <h2>Conoce nuestros salones destacados</h2>
            
            <div class="contenedorCardSalones">
                <div class ="cardSalon" style="background-image: url('https://www.uniparkhotel.com/wp-content/uploads/2022/06/unipark-salon-guayas.jpg');">
                    <div>
                        <h3>Salón Guayas</h3>
                    </div>
                </div>

                <div class ="cardSalon" style="background-image: url('https://www.uniparkhotel.com/wp-content/uploads/2022/06/unipark-salon-pichincha.jpg');">
                    <div>
                        <h3>Salón Pichincha</h3>
                    </div>
                </div>      
                
                <div class ="cardSalon" style="background-image: url('https://www.uniparkhotel.com/wp-content/uploads/2022/06/unipark-salon-manabi.jpg');">
                    <div>
                        <h3>Salón Manabi</h3>
                    </div>
                </div>    
                
                <div class ="cardSalon" style="background-image: url('https://www.uniparkhotel.com/wp-content/uploads/2022/06/unipark-salon-cotopaxi.jpg');">
                    <div>
                        <h3>Salón Cotopaxi</h3>
                        <button class="btn-reservar">Reservar</button>
                    </div>
                </div>     

            </div>    
            
        </div>

    </main>

    <script>
        //Selecciona todos los cards salones
        let cards = document.querySelectorAll(".cardSalon");

        cards.forEach(card => {

            let btn = card.querySelector(".btn-reservar");
            if (!btn) {
                btn = document.createElement("button");
                btn.classList.add("btn-reservar");
                btn.textContent = "Reservar";
                btn.style.display = "none";
                card.querySelector("div").appendChild(btn);
            }

            card.addEventListener("mouseenter", function(e) {
                btn.style.display = "block";
            });

            card.addEventListener("mouseleave", function(e) {
                btn.style.display = "none";
            });
        });

        //Elementos de la galeria
        let elementos = document.querySelectorAll(".galeria .elemento");

        elementos.forEach(el => {

            el.addEventListener("mouseenter", () => {
                el.style.transform = "scale(1.08)";
            });

            el.addEventListener("mouseleave", () => {
                el.style.transform = "scale(1)";
            });
        });

        let cardsServicios = document.querySelectorAll(".contenedorCards .card");
        let contenedor = document.querySelector(".contenedorCards");

        cardsServicios.forEach(card => {

            card.addEventListener("mouseenter", () => {
                contenedor.classList.add("hover-active");
                card.classList.add("activa");
            });

            card.addEventListener("mouseleave", () => {
                contenedor.classList.remove("hover-active");
                card.classList.remove("activa");
            });

        });

    </script>

</body>

<?php
    require 'includes/footer.php'
?>