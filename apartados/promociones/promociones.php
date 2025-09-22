<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Digital</title>
    <link rel="stylesheet" href="../../config/styles.css?v=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="/paginaweb/img/logo/carrito.png">
</head>
<body>
    <?php include __DIR__ . '/../../header.php'; ?>
    <div class="promotions-page">
    <section class="oferta-flash">
  <h2>⚡ Ofertas Flash</h2>
  <p>Finaliza en: <span id="countdown"></span></p>
  
  <div class="promo-container">
    <div class="promo-card">
      <img src="/paginaweb/img/promociones/snack.webp" alt="Snacks">
      <p>30% en Snacks</p>
    </div>
    <div class="promo-card">
      <img src="/paginaweb/img/promociones/bebida.png" alt="Bebidas">
      <p>15% en Bebidas</p>
    </div>
  </div>
</section>
<section class="promos-destacadas">
  <h2>🌟 Promociones destacadas</h2>
  <div class="promos-destacadas-grid">
    <div class="promo-card">
      <img src="/paginaweb/img/promociones/arroz.png" alt="Arroz">
      <p>Arroz Premium 5kg</p>
      <span class="discount">-25%</span>
    </div>
    <div class="promo-card">
      <img src="/paginaweb/img/promociones/huevos.png" alt="Huevos">
      <p>Docena de huevos AA</p>
      <span class="discount">-15%</span>
    </div>
    <div class="promo-card">
      <img src="/paginaweb/img/promociones/frijol.png" alt="Frijol">
      <p>Frijol</p>
      <span class="discount">-30%</span>
    </div>
    <div class="promo-card">
      <img src="/paginaweb/img/promociones/jugo.png" alt="Jugo">
      <p>Jugo Natural 1L</p>
      <span class="discount">-10%</span>
    </div>
  </div>
</section>
  <section class="cta">
  <h2>¡Compra ahora y recibe en minutos! 🚚</h2>
  <p>Tu mercado directo a la puerta de tu casa.</p>
  <a href="apartados/categorias/categorias.php" class="btn">Explorar categorías</a>
</section>
</div>
<script>
  // Cuenta regresiva: 1 hora (3600 segundos)
  const countdown = document.getElementById("countdown");
  let time = 3600; // en segundos

  function updateCountdown() {
    let h = Math.floor(time / 3600);
    let m = Math.floor((time % 3600) / 60);
    let s = time % 60;

    // Mostrar con dos dígitos (ej: 09:05:07)
    countdown.innerText = `${h}h ${m.toString().padStart(2, "0")}m ${s.toString().padStart(2, "0")}s`;

    if (time > 0) {
      time--;
    } else {
      countdown.innerText = "¡Oferta finalizada!";
    }
  }

  // Llamar inmediatamente y después cada segundo
  updateCountdown();
  setInterval(updateCountdown, 1000);
</script>

<?php include __DIR__ . '/../../footer.php'; ?>
</body>
</html>