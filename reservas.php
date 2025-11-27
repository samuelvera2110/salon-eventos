<?php 
require 'includes/header.php';
?>

<h1>Reservas de Salones</h1>

<section>
    <h2>Realizar Reserva</h2>

    <form id="formReserva">

        <label>Cliente:</label>
        <input type="text" name="cliente" placeholder="Nombre completo">

        <label>Fecha:</label>
        <input type="date" name="fecha" id="fecha">

        <label>Hora inicio:</label>
        <input type="time" name="hora_inicio">

        <label>Hora fin:</label>

        <label>Salón:</label>
        <select name="salon">
            <option value="">Seleccione un salón</option>
            <option value="Elegance">Salón Elegance</option>
            <option value="Fiesta">Salón Fiesta</option>
            <option value="Business">Salón Business</option>
            <option value="Terraza">Salón Terraza</option>
        </select>

        <label>Servicios adicionales:</label>
        <div>
            <input type="checkbox" name="servicios[]" value="Decoración"> Decoración<br>
            <input type="checkbox" name="servicios[]" value="Sonido"> Sonido<br>
            <input type="checkbox" name="servicios[]" value="Catering"> Catering<br>
            <input type="checkbox" name="servicios[]" value="Fotografía"> Fotografía<br>
        </div>

        <label>Precio total:</label>
        <input type="text" id="precioTotal" readonly value="$0">

        <br><br>
        <button type="submit">Reservar</button>
    </form>
</section>

<section>
    <h2>Consultar Disponibilidad</h2>

    <form id="formDisponibilidad">
        <label>Fecha:</label>
        <input type="date" name="fecha_disponibilidad">

        <label>Salón:</label>
        <select name="salon_disponibilidad">
            <option value="">Seleccione un salón</option>
            <option value="Elegance">Salón Elegance</option>
            <option value="Fiesta">Salón Fiesta</option>
            <option value="Business">Salón Business</option>
            <option value="Terraza">Salón Terraza</option>
        </select>

        <button type="submit">Consultar</button>
    </form>

    <div id="resultadoDisponibilidad">
    </div>
</section>

<section>
    <h2>Factura de Reserva</h2>

    <div id="factura">
        <p><strong>Cliente:</strong> [Nombre]</p>
        <p><strong>Fecha:</strong> [Fecha]</p>
        <p><strong>Horario:</strong> [Inicio - Fin]</p>
        <p><strong>Salón:</strong> [Salón elegido]</p>
        <p><strong>Servicios:</strong> [Lista]</p>
        <p><strong>Total:</strong> $0.00</p>
    </div>
</section>

<?php 
require 'includes/footer.php';
?>
