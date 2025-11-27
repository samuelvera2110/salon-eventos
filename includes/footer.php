<style>
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

<footer>
    <div id="contenedorFooter">

        <div class="informacionContacto">
            <h3>Contáctanos</h3>
            <div class="contacto-linea">
                <img src="img/footer/phone.png" width="20">
                <p>+593 999 999 999</p>
            </div>

            <div class="contacto-linea">
                <img src="img/footer/email.png" width="20">
                <p>info@salones.com</p>
            </div>

            <div class="contacto-linea">
                <img src="img/footer/location.png" width="20">
                <p>Quito, Ecuador</p>
            </div>
        </div>

        <div class="acercaDe">
            <h3>Acerca de</h3>
            <ul>
                <li><a href="">Quiénes somos</a></li>
                <li><a href="">Términos y condiciones</a></li>
                <li><a href="">Políticas de privacidad</a></li>
            </ul>
        </div>

        <div class="formularioFooter">
            <h3>Suscríbete</h3>
            <div class="campo">
                <input type="email" placeholder="Correo electrónico">
                <button>Enviar</button>
            </div>
        </div>
    </div>

    <div class="redes">
        <a href="#"><img src="img/footer/facebook.png" width="25"></a>
        <a href="#"><img src="img/footer/instagram.png" width="25"></a>
        <a href="#"><img src="img/footer/twitter.png" width="25"></a>
    </div>
</footer>

</body>
</html>
