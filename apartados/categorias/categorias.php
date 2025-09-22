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
<section class="categorias">
  <h2>Categorías 🛒</h2>
  <div class="categorias-grid">
    <div class="categoria-card">
      <img src="/paginaweb/img/categorias/frutas-verduras.png" alt="Frutas y Verduras">
      <h3>Frutas y Verduras</h3>
    </div>
    <div class="categoria-card">
      <img src="/paginaweb/img/categorias/lacteos.webp" alt="Lácteos">
      <h3>Lácteos</h3>
    </div>
    <div class="categoria-card">
      <img src="/paginaweb/img/categorias/aseo.png" alt="Aseo">
      <h3>Aseo y Hogar</h3>
    </div>
    <div class="categoria-card">
      <img src="/paginaweb/img/categorias/snack.png" alt="Snacks">
      <h3>Snacks</h3>
    </div>
    <div class="categoria-card">
      <img src="/paginaweb/img/categorias/bebidas.png" alt="Bebidas">
      <h3>Bebidas</h3>
    </div>
  </div>
</section>

<!-- Subcategorías -->
<section class="subcategorias">
  <h2>Frutas y Verduras 🍎</h2>
  <div class="sub-grid">
    <div class="sub-card">
      <img src="/paginaweb/img/categorias/manzana.png" alt="Manzanas">
      <p>Manzanas</p>
    </div>
    <div class="sub-card">
      <img src="/paginaweb/img/categorias/banano.png" alt="Bananos">
      <p>Bananos</p>
    </div>
    <div class="sub-card">
      <img src="/paginaweb/img/categorias/papa.png" alt="Papa">
      <p>Papa</p>
    </div>
  </div>
</section>
<!-- CTA -->
<section class="cta">
  <h2>¡Haz tu mercado más fácil y rápido! 🛍️</h2>
  <a href="#" class="btn">Explora todos nuestros productos</a>
</section>
<?php include __DIR__ . '/../../footer.php'; ?>
</body>
</html>