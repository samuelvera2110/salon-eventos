<?php 
require 'includes/header.php';
?>

<div class="container">

    <header class="page-header">
        <h1>Reservas de Salones</h1>
        <p>Complete el formulario para realizar una reserva</p>
    </header>

    <section class="modulo">
        <h2>Realizar Reserva</h2>

        <div class="card">
            <form id="formReserva" class="form">

                <div class="form-group">
                    <label>Cliente:</label>
                    <input type="text" name="cliente" placeholder="Nombre completo">
                </div>

                <div class="form-group">
                    <label>Fecha:</label>
                    <input type="date" name="fecha" id="fecha">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Hora inicio:</label>
                        <input type="time" name="hora_inicio">
                    </div>

                    <div class="form-group">
                        <label>Hora fin:</label>
                        <input type="time" name="hora_fin">
                    </div>
                </div>

                <div class="form-group">
                    <label>Salón:</label>
                    <select name="salon">
                        <option value="">Seleccione un salón</option>
                        <option value="Elegance">Salón Elegance</option>
                        <option value="Fiesta">Salón Fiesta</option>
                        <option value="Business">Salón Business</option>
                        <option value="Terraza">Salón Terraza</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Servicios adicionales:</label>
                    <div class="check-container">
                        <label><input type="checkbox" name="servicios[]" value="Decoración"> Decoración</label>
                        <label><input type="checkbox" name="servicios[]" value="Sonido"> Sonido</label>
                        <label><input type="checkbox" name="servicios[]" value="Catering"> Catering</label>
                        <label><input type="checkbox" name="servicios[]" value="Fotografía"> Fotografía</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Precio total:</label>
                    <input type="text" id="precioTotal" readonly value="$0">
                </div>

                <button type="submit" class="btn">Reservar</button>
            </form>
        </div>
    </section>

    <section class="modulo">
        <h2>Consultar Disponibilidad</h2>

        <div class="card">
            <form id="formDisponibilidad" class="form">

                <div class="form-row">
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input type="date" name="fecha_disponibilidad">
                    </div>

                    <div class="form-group">
                        <label>Salón:</label>
                        <select name="salon_disponibilidad">
                            <option value="">Seleccione un salón</option>
                            <option value="Elegance">Salón Elegance</option>
                            <option value="Fiesta">Salón Fiesta</option>
                            <option value="Business">Salón Business</option>
                            <option value="Terraza">Salón Terraza</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn">Consultar</button>
            </form>

            <div id="resultadoDisponibilidad" class="info-box">
                <p>Aquí se mostrará la disponibilidad.</p>
            </div>
        </div>
    </section>

    <section class="modulo">
        <h2>Factura de Reserva</h2>

        <div class="card factura">
            <p><strong>Cliente:</strong> [Nombre]</p>
            <p><strong>Fecha:</strong> [Fecha]</p>
            <p><strong>Horario:</strong> [Inicio - Fin]</p>
            <p><strong>Salón:</strong> [Salón elegido]</p>
            <p><strong>Servicios:</strong> [Lista]</p>
            <p><strong>Total:</strong> $0.00</p>
        </div>
    </section>

</div>

<?php 
require 'includes/footer.php';
?>
