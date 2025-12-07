<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Vera">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">

    <style>

        #contenedorPrincipal{
            margin: auto;
            display: flex;
            justify-content: center;
            background-color: #F2F0EB;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-left: 10px;
        }

        #contenedorFormulario {
            width: 350px;
            margin: 60px;
            padding: 25px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        form div {
            margin: 10px;
            padding: 5px;
        }

        #miFormulario div{
            display: flex;
            flex-direction: column; 
            justify-content: space-between; 
        }

        #miFormulario div:last-child {
            gap: 15px; 
            margin-top: 10px;
        }

   
    </style>


</head>
<body>

    <div id="contenedorPrincipal">
        
        <div id="contenedorFormulario">
            
            <form id="miFormulario" onsubmit="return validarTodoForm()">
                <h2>Reserva salones y obtén ventajas con Eventix</h2>

                <div>
                    <!--Nombre-->
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre">
                </div>

                <div>
                    <!--Correo-->
                    <label for="email">Correo: </label>
                    <input type="email" id="email" name="email">
                </div>

                <div>
                    <!--Contraseña-->
                    <label for="contrasenia">Contraseña: </label>
                    <input type="password" id="contrasenia" name="contrasenia">
                </div>

                <div>
                    <!--Contraseña-->
                    <label for="confirmarContrasenia">Confirmar contraseña: </label>
                    <input type="password" id="confirmarContrasenia" name="confirmarContrasenia">
                </div>

                <div>
                    <button type="submit">Registrarse</button>
                    <button type="button" onclick="limpiarTodosLosErrores()">Cancelar</button>
                </div>

            </form>

        </div>

    </div>
    
    <script>    
        
        //Validaciones
        let nombre = document.getElementById("nombre");
        let email = document.getElementById("email");
        let contrasenia = document.getElementById("contrasenia");
        let confirmarContrasenia = document.getElementById("confirmarContrasenia");
        let form = document.getElementById("miFormulario");

        nombre.addEventListener("keyup", validarNombre);
        email.addEventListener("keyup", validarCorreo);
        contrasenia.addEventListener("keyup", validarContrasenia);
        confirmarContrasenia.addEventListener("keyup", validarConfirmarContrasenia);

        function validarNombre(){
            limpiarError(nombre);

            const regex = /^[a-zA-Z ]+$/;

            if(nombre.value === ""){
                mostrarError(nombre, "El nombre es obligatorio");
                return false;
            }else if(nombre.value.length < 4){
                mostrarError(nombre, "El nombre es obligatorio");
                return false;
            }else if(!regex.test(nombre.value)){
                mostrarError(nombre, "Solo se permiten letras");
                return false;
            }

            return true;
        }
        
        function validarCorreo(){
            limpiarError(email);

            const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email.value === "") {
                mostrarError(email, "El correo es obligatorio");
                return false;
            }else if (!regexEmail.test(email.value)) {
                mostrarError(email, "Correo no válido");
                return false;
            }

            return true;
        }

        function validarContrasenia() {
            limpiarError(contrasenia);

            if (contrasenia.value === "") {
                mostrarError(contrasenia, "Debe ingresar una contraseña");
                return false;
            }else if (contrasenia.value.length < 6) {
                mostrarError(contrasenia, "Debe tener al menos 6 caracteres");
                return false;
            }

            return true;
        }

        function validarConfirmarContrasenia() {
            limpiarError(confirmarContrasenia);

            if (confirmarContrasenia.value === "") {
                mostrarError(confirmarContrasenia, "Debe confirmar la contraseña");
                return false;
            }else if (confirmarContrasenia.value !== contrasenia.value) {
                mostrarError(confirmarContrasenia, "Las contraseñas no coinciden");
                return false;
            }

            return true;
        }

        function validarTodoForm() {

            let valido = 
                validarNombre() &&
                validarCorreo() &&
                validarContrasenia() &&
                validarConfirmarContrasenia();

            if (!valido) {
                alert("Corrige los errores antes de enviar.");
                return false;
            }

            window.location.href = "index.php";

            alert("Registro enviado correctamente.");
            return true;
        }

        function mostrarError(elemento, mensaje) {
            let span = document.createElement("span");
            span.textContent = mensaje;
            span.classList.add("error");
            elemento.parentNode.appendChild(span);
        }

        function limpiarError(elemento) {
            let contenedor = elemento.parentNode;
            let error = contenedor.querySelector(".error");

            if (error) error.remove();
        }

        function limpiarTodosLosErrores() {
            document.querySelectorAll(".error").forEach(e => e.remove());
            form.reset();
        }

        

    </script>

</body>
</html>