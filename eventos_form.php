<?php
// formulario de eventos
$headerPath = __DIR__ . '/includes/header.php';
if (file_exists($headerPath)) include $headerPath;
else {
  echo '<!doctype html><html><head><meta charset="utf-8"><title>Formulario Evento</title><link rel="stylesheet" href="/salon_eventos/css/estilos.css"></head><body>';
}
?>

<style>
  .page-overlay { background: rgba(255,255,255,0.98); min-height:100vh; padding:24px 0 60px 0; }

  .form-wrap { max-width:920px; margin:24px auto; }
  .field { margin-bottom:12px; }
  label { display:block; font-weight:600; margin-bottom:6px; }
  input[type="text"], textarea, select, input[type="number"], input[type="date"], input[type="time"] {
    width:100%; padding:10px; border-radius:6px; border:1px solid #ddd; background:#fff;
  }
  .error { color:red; font-size:0.9rem; margin-top:6px; display:block; min-height:18px; }
  .notice-ok { background:#e9f7ef; padding:10px; border-radius:8px; color:#1b7a3a; margin-bottom:12px; }
  .inline-note { font-size:0.9rem; color:#666; }
  .actions-row { display:flex; gap:12px; align-items:center; }
</style>

<script>
  (function(){
    const meta = document.createElement('meta');
    meta.name = 'author';
    meta.content = 'Joel Gortaire';
    document.head.appendChild(meta);
  })();
</script>

<div class="page-overlay">
<main class="contenedor form-wrap">
  <h1 style="text-align:center; margin-bottom:8px;">Registro de Evento (Administración)</h1>
  <p class="inline-note" style="text-align:center;">Completa el siguiente formulario de acuerdo a tus preferencias y disponiblidad.</p>

  <div id="messages"></div>

  <form id="registroForm" onsubmit="return false;">
    <input type="hidden" id="tipoOculto" name="tipoOculto" value="<?= htmlspecialchars($_GET['tipo'] ?? '') ?>">

    <div class="field">
      <label for="nombre">Nombre del evento</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ej. Mis quinceaños">
      <span class="error" id="err-nombre"></span>
    </div>

    <div class="field">
      <label for="cliente">Cliente (organizador)</label>
      <input type="text" id="cliente" name="cliente" placeholder="Nombre completo">
      <span class="error" id="err-cliente"></span>
    </div>

    <div class="field">
      <label for="email">Correo electrónico</label>
      <input type="text" id="email" name="email" placeholder="correo@ejemplo.com">
      <span class="error" id="err-email"></span>
    </div>

    <div class="field">
      <label for="fecha">Fecha del evento</label>
      <input type="date" id="fecha" name="fecha">
      <span class="error" id="err-fecha"></span>
    </div>

    <div class="field">
      <label for="hora">Horario</label>
      <input type="time" id="hora" name="hora">
      <span class="error" id="err-hora"></span>
    </div>

    <div class="field">
      <label for="salon">Salón</label>
      <select id="salon" name="salon">
        <option value="">--Selecciona salón--</option>
        <option value="Sala A">Sala A (100 personas)</option>
        <option value="Sala B">Sala B (30 personas)</option>
        <option value="Salón Principal">Salón Principal (300 personas)</option>
      </select>
      <span class="error" id="err-salon"></span>
    </div>

    <div class="field">
      <label for="asistentes">Cantidad de asistentes</label>
      <input type="number" id="asistentes" name="asistentes" placeholder="Ej. 50">
      <span class="error" id="err-asistentes"></span>
    </div>

    <div class="field">
      <label>Tipo de evento</label>
      <label><input type="radio" name="tipo" value="fiestas_ejecutivas"> Fiestas Ejecutivas</label>
      <label><input type="radio" name="tipo" value="matrimonios"> Matrimonios</label>
      <label><input type="radio" name="tipo" value="despedida_soltero"> Despedida de Soltero</label>
      <label><input type="radio" name="tipo" value="quinceaneras"> Quinceañeras</label>
      <label><input type="radio" name="tipo" value="bautizos"> Bautizos</label>
      <label><input type="radio" name="tipo" value="cumpleanos"> Fiesta de Cumpleaños</label>
      <span class="error" id="err-tipo"></span>
    </div>

    <div class="field">
      <label>Servicios adicionales</label>
      <label><input type="checkbox" name="serv" value="sonido"> Sonido</label>
      <label><input type="checkbox" name="serv" value="iluminacion"> Iluminación</label>
      <label><input type="checkbox" name="serv" value="catering"> Catering</label>
      <span class="error" id="err-serv"></span>
    </div>

    <div class="field">
      <label for="obs">Observaciones</label>
      <textarea id="obs" name="obs" rows="4" placeholder="Notas adicionales..."></textarea>
      <span class="error" id="err-obs"></span>
    </div>

    <div class="actions-row" style="margin-top:10px;">
      <button id="submitBtn" style="background:#c28d2c; color:#fff; padding:10px 14px; border-radius:8px; border:none;">Registrar</button>
      <button type="button" id="resetBtn">Limpiar</button>
      <div style="margin-left:auto;">
        <a href="eventos.php" class="btn-inline" style="padding:8px 12px; background:#2b7a78; color:#fff; border-radius:6px; text-decoration:none;">Volver</a>
      </div>
    </div>
  </form>
</main>
</div>

<script>
(function(){
  const $ = s => document.querySelector(s);
  const $$ = s => Array.from(document.querySelectorAll(s));
  const msgs = $('#messages');

  // preselect radio
  const params = new URLSearchParams(window.location.search);
  const preTipo = params.get('tipo');
  if (preTipo) {
    const r = document.querySelector("input[name='tipo'][value='" + preTipo + "']");
    if (r) r.checked = true;
  }

  function setErr(id,msg){ const el=document.getElementById('err-'+id); if(el) el.textContent=msg; }
  function clearErr(id){ const el=document.getElementById('err-'+id); if(el) el.textContent=''; }
  function clearAll(){ $$('.error').forEach(e=>e.textContent=''); msgs.innerHTML=''; }

  function validaText(id,min,max){
    const v = ($('#'+id).value||'').trim(); clearErr(id);
    if (v===''){ setErr(id,'Campo obligatorio.'); return false; }
    if (v.length < min){ setErr(id,'Mínimo '+min+' caracteres.'); return false; }
    if (v.length > max){ setErr(id,'Máximo '+max+' caracteres.'); return false; }
    if (id === 'cliente') {
      if (!/^[a-zA-ZÁÉÍÓÚáéíóúñÑ ]+$/.test(v)){ setErr(id,'Solo letras y espacios.'); return false; }
    }
    return true;
  }

  function validaEmail(){
    const id='email'; const v=($('#'+id).value||'').trim(); clearErr(id);
    if (v===''){ setErr(id,'Email obligatorio.'); return false; }
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!re.test(v)){ setErr(id,'Email no válido.'); return false; }
    return true;
  }

  function validaFecha(){
    const id='fecha'; const v=$('#'+id).value; clearErr(id);
    if (!v){ setErr(id,'Seleccione fecha.'); return false; }
    const s=new Date(v); const hoy=new Date(); hoy.setHours(0,0,0,0);
    if (s < hoy){ setErr(id,'La fecha debe ser hoy o futura.'); return false; }
    return true;
  }

  function validaHora(){ const id='hora'; const v=$('#'+id).value; clearErr(id); if(!v){ setErr(id,'Ingrese hora.'); return false; } return true; }
  function validaSalon(){ const id='salon'; const v=$('#'+id).value; clearErr(id); if(!v){ setErr(id,'Seleccione salón.'); return false; } return true; }
  function validaAsistentes(){
    const id='asistentes'; const v=($('#'+id).value||'').trim(); clearErr(id);
    if (v===''){ setErr(id,'Indique cantidad.'); return false; }
    const n = Number(v); if (isNaN(n)|| n<1){ setErr(id,'Cantidad no válida.'); return false; }
    const salon = $('#salon').value;
    if (salon === 'Sala A' && n > 100){ setErr(id,'Sala A hasta 100.'); return false; }
    if (salon === 'Sala B' && n > 30){ setErr(id,'Sala B hasta 30.'); return false; }
    if (salon === 'Salón Principal' && n > 300){ setErr(id,'Principal hasta 300.'); return false; }
    return true;
  }
  function validaTipo(){ clearErr('tipo'); const sel = $$("input[name='tipo']:checked"); if (sel.length===0){ setErr('tipo','Seleccione tipo.'); return false; } return true; }
  function validaServ(){ clearErr('serv'); const sel = $$("input[name='serv']:checked"); if (sel.length===0){ setErr('serv','Seleccione al menos un servicio.'); return false; } return true; }
  function validaObs(){ const id='obs'; const v=($('#'+id).value||'').trim(); clearErr(id); if(v.length>400){ setErr(id,'Máx 400 caracteres.'); return false; } return true; }

  $('#submitBtn').addEventListener('click', function(e){
    e.preventDefault();
    clearAll();
    let ok = true;
    ok = validaText('nombre',5,120) && ok;
    ok = validaText('cliente',3,80) && ok;
    ok = validaEmail() && ok;
    ok = validaFecha() && ok;
    ok = validaHora() && ok;
    ok = validaSalon() && ok;
    ok = validaAsistentes() && ok;
    ok = validaTipo() && ok;
    ok = validaServ() && ok;
    ok = validaObs() && ok;

    if (ok) {
      const n = document.createElement('div');
      n.className = 'notice-ok';
      n.textContent = 'Formulario válido — evento registrado (simulado).';
      msgs.appendChild(n);
      return false;
    } else {
      const first = document.querySelector('.error:not(:empty)');
      if (first) first.scrollIntoView({behavior:'smooth', block:'center'});
      return false;
    }
  });

  $('#resetBtn').addEventListener('click', function(){ clearAll(); $('#registroForm').reset(); });

  $$('#registroForm input, #registroForm textarea, #registroForm select').forEach(el=>{
    el.addEventListener('input', function(){
      const id = this.id || this.name;
      if (id) {
        const errEl = document.querySelector('#err-' + id);
        if (errEl) errEl.textContent = '';
      }
    });
  });

})();
</script>

<?php
$footerPath = __DIR__ . '/includes/footer.php';
if (file_exists($footerPath)) include $footerPath;
else echo '</body></html>';
?>

