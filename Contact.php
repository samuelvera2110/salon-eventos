<?php 
    $autor = "Bryan Lopez"; 
    require 'includes/header.php'; 
?>

<style>
    .seccion-contacto {
        background-color: #F2F0EB;
        display: flex;
        justify-content: center;
        padding: 50px 20px;
    }

    .contenedor-form-contacto {
        background: white;
        width: 100%;
        max-width: 500px;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .grupo-input {
        margin-bottom: 20px;
    }

    .grupo-input label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #591C16;
    }

    .grupo-input input, 
    .grupo-input select, 
    .grupo-input textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box; 
    }

    .error-msg {
        color: red;
        font-size: 0.85em;
        margin-top: 5px;
        display: none; 
    }
    
    .btn-enviar {
        width: 100%;
        margin-top: 10px;
        background-color: #F27830;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 15px;
        font-weight: bold;
        cursor: pointer;
    }
    .btn-enviar:hover { opacity: 0.9; }
</style>

<main class="seccion-contacto">
    <div class="contenedor-form-contacto">
        <h2 style="text-align: center; margin-bottom: 20px;">Contáctanos</h2>
        <p style="text-align: center; margin-bottom: 30px;">¿Tienes dudas? Escríbenos directamente.</p>

        <form id="formContacto">
            
            <div class="grupo-input">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" placeholder="Tu nombre y apellido">
                <span id="errNombre" class="error-msg">Ingresa un nombre válido (mínimo 6 caracteres).</span>
            </div>

            <div class="grupo-input">
                <label for="email">Correo Electrónico:</label>
                <input type="text" id="email" placeholder="ejemplo@correo.com">
                <span id="errEmail" class="error-msg">Ingresa un correo válido.</span>
            </div>

            <div class="grupo-input">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" placeholder="0991234567">
                <span id="errTelefono" class="error-msg">Ingresa solo números (mínimo 7 dígitos).</span>
            </div>

            <div class="grupo-input">
                <label for="motivo">Motivo de consulta:</label>
                <select id="motivo">
                    <option value="">-- Selecciona --</option>
                    <option value="cotizacion">Cotización de Evento</option>
                    <option value="visita">Agendar Visita</option>
                    <option value="reclamo">Reclamo / Sugerencia</option>
                </select>
                <span id="errMotivo" class="error-msg">Debes seleccionar un motivo.</span>
            </div>

            <div class="grupo-input">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" rows="4" placeholder="Detalla tu consulta..."></textarea>
                <span id="errMensaje" class="error-msg">El mensaje no puede estar vacío.</span>
            </div>

            <div class="grupo-input" style="display: flex; align-items: center; gap: 10px;">
                <input type="checkbox" id="terminos" style="width: auto;">
                <label for="terminos" style="margin: 0; font-weight: normal;">Acepto ser contactado por Eventix.</label>
            </div>
            <span id="errTerminos" class="error-msg">Debes aceptar los términos.</span>

            <button type="button" class="btn-enviar" onclick="validarContacto()">Enviar Mensaje</button>
            <p id="mensajeExito" style="color: green; text-align: center; margin-top: 15px; font-weight: bold;"></p>
        </form>
    </div>
</main>

<script>
    function validarContacto() {
        let esValido = true;
        
        // Obtenemos elementos
        const nombre = document.getElementById('nombre');
        const email = document.getElementById('email');
        const telefono = document.getElementById('telefono');
        const motivo = document.getElementById('motivo');
        const mensaje = document.getElementById('mensaje');
        const terminos = document.getElementById('terminos');

        // Reseteamos errores visuales
        document.querySelectorAll('.error-msg').forEach(e => e.style.display = 'none');

        // 1. Validar Nombre (Mínimo 6 caracteres)
        if (nombre.value.trim().length < 6) {
            document.getElementById('errNombre').style.display = 'block';
            esValido = false;
        }

        // 2. Validar Email
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexEmail.test(email.value)) {
            document.getElementById('errEmail').style.display = 'block';
            esValido = false;
        }

        // 3. Validar Teléfono (NUEVA LÓGICA)
        const valorTelefono = telefono.value.trim();
        // Esta expresión regular /^[0-9]+$/ verifica que SOLO haya números del 0 al 9
        const soloNumeros = /^[0-9]+$/;

        if (!soloNumeros.test(valorTelefono) || valorTelefono.length == 10) {
            document.getElementById('errTelefono').textContent = "Debes ingresar solo números y 10 dígitos.";
            document.getElementById('errTelefono').style.display = 'block';
            esValido = false;
        }

        // 4. Validar Motivo
        if (motivo.value === "") {
            document.getElementById('errMotivo').style.display = 'block';
            esValido = false;
        }

        // 5. Validar Mensaje
        if (mensaje.value.trim() === "") {
            document.getElementById('errMensaje').style.display = 'block';
            esValido = false;
        }

        // 6. Validar Checkbox
        if (!terminos.checked) {
            document.getElementById('errTerminos').style.display = 'block';
            esValido = false;
        }

        if (esValido) {
            document.getElementById('mensajeExito').textContent = "¡Gracias! Tu mensaje ha sido enviado correctamente.";
            document.getElementById('formContacto').reset();
        }
    }
</script>

<?php require 'includes/footer.php'; ?>