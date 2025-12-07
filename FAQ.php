<?php 
    $autor = "Bryan Lopez"; 
    require 'includes/header.php'; 
?>

<style>
    /* Estilos Generales */
    .seccion-faq {
        background-color: #F2F0EB;
        padding: 60px 20px;
        min-height: 60vh;
        font-family: 'Playfair Display', serif;
    }

    .contenedor-faq {
        max-width: 800px;
        margin: auto;
    }

    .titulo-faq {
        text-align: center;
        margin-bottom: 20px;
        color: #591C16;
        font-size: 35px;
    }

    /* Estilos de los Botones de Control*/
    .controles-dom {
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-control {
        background-color: white;
        border: 2px solid #591C16;
        color: #591C16;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        margin: 0 5px;
        transition: all 0.3s;
    }

    .btn-control:hover {
        background-color: #591C16;
        color: white;
    }

    /* Estilos de las Preguntas */
    .faq-item {
        margin-bottom: 15px;
    }

    .pregunta {
        background-color: white;
        color: #591C16;
        padding: 18px 25px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        border-radius: 12px;
        border-left: 6px solid #F27830;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: transform 0.2s;
    }

    .pregunta:hover {
        background-color: #FFFDF6;
        transform: translateX(5px);
    }

    .respuesta {
        display: none;
        background-color: #fff;
        padding: 25px;
        margin-top: 5px;
        border-radius: 0 0 12px 12px;
        border: 1px solid #ddd;
        border-top: none;
        line-height: 1.6;
        color: #333;
    }

    .simbolo {
        font-size: 24px;
        color: #F27830;
        font-weight: bold;
    }
</style>

<main class="seccion-faq">
    <div class="contenedor-faq">
        <h1 class="titulo-faq">Preguntas Frecuentes</h1>
        
        <div class="controles-dom">
            <button class="btn-control" onclick="controlarTodas('abrir')">Ver todas las respuestas</button>
            <button class="btn-control" onclick="controlarTodas('cerrar')">Ocultar todas</button>
        </div>
        
        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>1. ¿Qué salones tienen disponibles?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Contamos con 3 ambientes exclusivos:
                <ul>
                    <li><strong>Salón Principal:</strong> Para 300 personas.</li>
                    <li><strong>Sala A:</strong> Para 100 personas.</li>
                    <li><strong>Sala B:</strong> Para 30 personas.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>2. ¿Se requiere un depósito?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Sí. Para asegurar la fecha solicitamos un abono inicial del <strong>25% del valor total</strong>.
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>3. ¿Qué servicios incluyen?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Ofrecemos paquetes con: <strong>DJ, sonido e iluminación, fotografía, bar abierto y maestro de ceremonias</strong>.
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>4. ¿Necesito una cuenta?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Crea tu cuenta haciendo clic en <a href="registro.php" style="color:#F27830;">"Regístrate"</a> en el menú.
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>5. ¿Cuál es la política de cancelación?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Debes avisar con 15 días de anticipación. El depósito no se devuelve pero queda como saldo a favor.
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>6. ¿Hasta qué hora puede durar el evento?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Por regulaciones municipales, los eventos nocturnos pueden durar máximo hasta las <strong>02:00 AM</strong>.
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>7. ¿Puedo llevar decoración externa?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Sí, puedes traer tu propio decorador. Solo pedimos que coordinen con nuestra administración para los horarios de montaje.
            </div>
        </div>

        <div class="faq-item">
            <div class="pregunta" onclick="abrirCerrar(this)">
                <span>8. ¿Cuentan con parqueo seguro?</span>
                <span class="simbolo">+</span>
            </div>
            <div class="respuesta">
                Sí, disponemos de vigilancia privada en nuestro estacionamiento durante todo el evento para la seguridad de tus invitados.
            </div>
        </div>

    </div>
</main>

<script>
    // FUNCIÓN 1: Interactividad Individual
    function abrirCerrar(elemento) {
        var respuesta = elemento.nextElementSibling;
        var icono = elemento.querySelector('.simbolo');

        if (respuesta.style.display === "block") {
            respuesta.style.display = "none";
            icono.textContent = "+";
            icono.style.color = "#F27830";
        } else {
            respuesta.style.display = "block";
            icono.textContent = "-";
            icono.style.color = "#591C16";
        }
    }

    // FUNCIÓN 2: Manipulación del DOM Masiva
    function controlarTodas(accion) {
        // Obtenemos todas las respuestas y todos los simbolos
        var todasLasRespuestas = document.querySelectorAll('.respuesta');
        var todosLosIconos = document.querySelectorAll('.simbolo');

        // Recorremos todos los elementos
        for (var i = 0; i < todasLasRespuestas.length; i++) {
            if (accion === 'abrir') {
                todasLasRespuestas[i].style.display = 'block';
                todosLosIconos[i].textContent = '-';
            } else {
                todasLasRespuestas[i].style.display = 'none';
                todosLosIconos[i].textContent = '+';
            }
        }
    }
</script>

<?php require 'includes/footer.php'; ?>