<?php 
// eventos.php 
$headerPath = __DIR__ . '/includes/header.php';
if (file_exists($headerPath)) include $headerPath;
else {
  echo '<!doctype html><html><head><meta charset="utf-8"><title>Eventos - Galería</title><link rel="stylesheet" href="/salon_eventos/css/estilos.css"></head><body>';
}
?>

<!-- ====== HOJA DE ESTILO INTERNA ====== -->
<style>
  /* base */
  body, html { height: 100%; margin:0; font-family: "Segoe UI", Roboto, Arial, sans-serif; color:#222; }

  /* class */
  .page-overlay {
    background: rgba(255,255,255,0.98);
    padding: 20px 0 40px 0;
    min-height: 100vh;
  }

  /* id */
  #gallery { outline: none; }

  /* descendant & child */
  .gallery-container .gallery-grid { display: grid; gap: 18px; }
  .gallery-grid > .card-img { transition: transform .18s ease; }

  /* attribute */
  img[alt] { display:block; }

  /* grouped */
  .gallery-header, .subtitle, .actions p { text-rendering: optimizeLegibility; }

  /* pseudo-class */
  .card-img:hover { transform: translateY(-4px); }

  /* pseudo-element */
  .card-img .caption::after { content: ""; display:block; height:2px; width:40px; background:rgba(255,255,255,0.3); margin-top:6px; border-radius:2px; }

  /* universal */
  * { box-sizing: border-box; }

  /* adjacent sibling (demostración) */
  .card-img + .card-img { margin-top: 0; }

  /* nth-child (ligera variación) */
  .gallery-grid .card-img:nth-child(odd) { /* no-op visual sutil posible */ }

  /* gallery layout */
  .gallery-container {
    max-width: 1400px;
    margin: 28px auto;
    padding: 12px;
  }

  .gallery-grid {
    display: grid;
    gap: 18px;
    grid-template-columns: repeat(1, 1fr); 
    align-items: stretch;
  }

  .card-img {
    position:relative;
    overflow:hidden;
    border-radius:12px;
    cursor:pointer;
    border:3px solid transparent;
    background:#fff;
    height: 420px; 
    display:flex;
    align-items:center;
    justify-content:center;
  }

  .card-img img {
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    transition: transform .45s cubic-bezier(.2,.9,.3,1), box-shadow .2s;
  }

  .card-img:hover img { transform: scale(1.06); }

  .card-img .caption {
    position:absolute;
    left:0;
    bottom:0;
    width:100%;
    padding:12px 14px;
    background: linear-gradient(0deg, rgba(0,0,0,0.6), transparent);
    color:#fff;
    font-weight:700;
    font-size:1.05rem;
  }

  .selected { border-color:#c28d2c; box-shadow:0 12px 30px rgba(0,0,0,0.12); transform:translateY(-6px); }

  .actions { text-align:center; margin-top:16px; }
  .btn-inline { display:inline-block; padding:10px 14px; border-radius:8px; background:#2b7a78; color:#fff; text-decoration:none; }

  /* TITULO: estilos base (la personalización principal la aplicamos inline) */
  .gallery-header { text-align:center; margin-bottom:12px; color:#123; font-size:2rem; }
  .subtitle { color:#444; margin-bottom:18px; font-size:1rem; }

  /* Responsive breakpoints */
  @media (min-width:1100px) {
    .gallery-grid { grid-template-columns: repeat(3, 1fr); }
    .card-img { height: 420px; }
  }
  @media (min-width:700px) and (max-width:1099px) {
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .card-img { height: 360px; }
  }
  @media (max-width:699px) {
    .gallery-grid { grid-template-columns: 1fr; }
    .card-img { height: 240px; }
  }

  /* focus improvement */
  .card-img:focus { outline: 3px solid rgba(194,141,44,0.22); outline-offset: 4px; }

  /* TITULO - clase adicional para hover */
  .titulo-eventos {
    letter-spacing: 1px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 18px;
  }

  .titulo-eventos:hover {
    background: #8133c9;              
    transform: translateY(-2px);      
    box-shadow: 0 8px 18px rgba(0,0,0,0.35);
    cursor: default;
  }

  .titulo-eventos::after {
    content: "";
    display: block;
    height: 3px;
    width: 60%;
    margin: 6px auto 0 auto;
    background: rgba(255,255,255,0.55);
    border-radius: 6px;
    transition: width .3s ease;
  }

  .titulo-eventos:hover::after { width: 88%; }

  /* tiny utility */
  .sr-only { position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden; }
</style>

<!-- inject author meta si no existe -->
<script>
  (function(){
    if (!document.querySelector('meta[name="author"]')) {
      const meta = document.createElement('meta');
      meta.name = 'author';
      meta.content = 'Joel Gortaire';
      document.head.appendChild(meta);
    }
  })();
</script>

<div class="page-overlay">
<main class="contenedor gallery-container">
  <!-- H1 con estilos INLINE + clase para hover -->
  <h1 class="gallery-header titulo-eventos"
      style="color:white; background:#6a0dad; padding:14px 28px; display:inline-block; border-radius:14px; font-size:28px; box-shadow:0 4px 10px rgba(0,0,0,0.25); transition: all .35s ease;">
    Eventos
  </h1>

  <!-- subtítulo con inline style -->
  <p class="subtitle" style="text-align:center; font-style:italic; color:#333;">
    En este maravilloso lugar encontrarás el tipo de evento que se adapte a tus necesidades y gustos.
  </p>

  <div class="gallery-grid" id="gallery" role="list">
    <div class="card-img" data-type="fiestas_ejecutivas" tabindex="0" aria-label="Fiestas Ejecutivas" style="border-radius:14px;">
      <img src="https://fincasolimpar.com/wp-content/uploads/2023/07/eventos-de-empresa-solimpar.jpg" alt="Fiestas ejecutivas">
      <div class="caption" style="font-size:1.08rem;">Fiestas Ejecutivas</div>
    </div>

    <div class="card-img" data-type="matrimonios" tabindex="0" aria-label="Matrimonios">
      <img src="https://winkeventos.com/wp-content/uploads/2022/03/significado-del-matrimonio.jpg" alt="Matrimonios">
      <div class="caption">Matrimonios</div>
    </div>

    <div class="card-img" data-type="despedida_soltero" tabindex="0" aria-label="Despedida de Soltero">
      <img src="https://cdn0.matrimonio.com.co/article-gallery-o/00000/3_2/960/jpg/articulos-a-fotos/amigos-familia-damas-gente/amigos-celebrando.jpeg" alt="Despedida de soltero">
      <div class="caption">Despedida de Soltero</div>
    </div>

    <div class="card-img" data-type="quinceaneras" tabindex="0" aria-label="Quinceañeras">
      <img src="https://vestidos15.com/wp-content/uploads/2023/11/catalogodeprecios-07-scaled.jpg" alt="Quinceañeras">
      <div class="caption">Quinceañeras</div>
    </div>

    <div class="card-img" data-type="bautizos" tabindex="0" aria-label="Bautizos">
      <img src="https://images.squarespace-cdn.com/content/v1/5f5a7119d559965217d72c39/1692721052201-54ZTHL2K10E1RLBUDNMO/0085_Bautizo_Ricardo_%26_Valentina.jpg" alt="Bautizos">
      <div class="caption">Bautizos</div>
    </div>

    <div class="card-img" data-type="cumpleanos" tabindex="0" aria-label="Cumpleaños">
      <img src="https://mejorconsalud.as.com/wp-content/uploads/2023/09/feliz-cumpleanos.jpg" alt="Cumpleaños">
      <div class="caption">Fiesta de Cumpleaños</div>
    </div>
  </div>

  <div class="actions">
    <p style="color:#555; font-weight:500;">Eventos disponibles para todo tipo de personas y organizaciones que les guste el buen estilo.</p>
  </div>
</main>
</div>

<!-- JS: selección y navegación -->
<script>
  (function(){
    const cards = document.querySelectorAll('.card-img');
    let selected = null;

    function selectCard(el){
      if (selected) selected.classList.remove('selected');
      el.classList.add('selected');
      selected = el;
    }

    const mapping = {
      'fiestas_ejecutivas':'Fiestas Ejecutivas',
      'matrimonios':'Matrimonios',
      'despedida_soltero':'Despedida de Soltero',
      'quinceaneras':'Quinceañeras',
      'bautizos':'Bautizos',
      'cumpleanos':'Cumpleaños'
    };

    cards.forEach(card => {
      card.addEventListener('click', function(){
        selectCard(card);
        const tipo = card.dataset.type;
        const label = mapping[tipo] || tipo;
        const url = 'eventos_form.php?tipo=' + encodeURIComponent(tipo) + '&label=' + encodeURIComponent(label);
        setTimeout(()=> window.location.href = url, 160);
      });

      card.addEventListener('keydown', function(e){
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          card.click();
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
