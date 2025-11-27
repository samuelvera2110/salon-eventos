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

            <h3>Información de Contacto</h3>

            <div class="contacto-linea">
                <img src="https://img.icons8.com/?size=100&id=3723&format=png&color=000000" width="20px"
                    height="20px" alt="Icono de ubicación">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                
            </div>
            
            <div class="contacto-linea">
                <img src="https://img.icons8.com/?size=100&id=9659&format=png&color=000000" width="20px"
                    height="20px" alt="Icono de teléfono">
                <p>+(593) 99 999 9999</p>
            </div>

            <div class="contacto-linea">
                <img src="https://img.icons8.com/?size=100&id=12580&format=png&color=000000" width="20px"
                    height="20px" alt="Icono de email">
                <p>salon.eventos@gmail.com</p>
            </div>
            </div>

                <div class="acercaDe">
                    <h3>Acerca de Nosotros</h3>
                    <ul>
                        <li>Nuestra infraestructura</li>
                        <li>Equipo</li>
                        <li>Trabaja con nosotros</li>
                        <li>Políticas de privacidad</li>
                        <li>Términos y condiciones</li>
                    </ul>

                </div>

                <div class="formularioFooter">

                    <h3>Suscribete para más novedades</h3>

                    <form class="form">

                        <div class="campo">
                            <input type="email" placeholder="Ingresa tu correo electrónico">
                            <button type="submit">Suscribirse</button>
                        </div>

                        <div class="campo">
                            <input type="checkbox" id="terminos" name="terminos">
                            <label for="terminos">Acepto los términos y condiciones</label>
                        </div>

                        <div class="campo">
                            <input type="checkbox" id="privacidad" name="privacidad">
                            <label for="privacidad">He leído la política de privacidad</label>
                        </div>

                    </form>

                </div>

            </div>

    <div class="redes">
        <p>Siguenos en nuestras redes: </p>

        <a href="https://www.facebook.com">
            <img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000"
                alt="Icono de Facebook" width="45px" height="45px">
        </a>
        <a href="https://www.instagram.com">
            <img src="https://img.icons8.com/?size=100&id=ZRiAFreol5mE&format=png&color=000000"
                alt="Icono de Instagram" width="45px" height="45px">
            </a>
        <a href="https://www.x.com">
            <img src="https://img.icons8.com/?size=100&id=phOKFKYpe00C&format=png&color=000000" 
                alt="Icono de X" width="45px" height="45px">
        </a>
    </div>
</footer>

</body>
</html>
