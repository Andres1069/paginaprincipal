<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Digital</title>
    <link rel="stylesheet" href="config/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/carrito.png">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="hero">
        <h2>Pensado para ti y tu familia 💚</h2>
        <p>Tu supermercado, más cerca que nunca.</p>
        <a href="#" class="btn">Sobre nosotros</a>
        <a href="#" class="btn-outline">Contáctanos</a>
    </section>

    <section class="info">
        <div class="info-card">
            <h3>¿Por qué elegir Mercado Digital?</h3>
            <ul>
                <li>Compras rápidas</li>
                <li>Entregas a domicilio</li>
                <li>Pagos seguros</li>
                <li>Ahorro de tiempo</li>
            </ul>
            <a href="#" class="btn1">Haz tu pedido ahora</a>
        </div>
        <div class="info-img">
            <img src="img/secciones/card/digital.png" alt="Cliente feliz">
        </div>
    </section>

    <section class="promos">
        <h3>Promociones 🌟</h3>
        <div class="promo-cards">
            <div class="promo-card">
                <img src="img/promociones/aseo.png" alt="Productos de aseo">
                <p>35% de descuento en productos de aseo</p>
            </div>
            <div class="promo-card">
                <img src="img/promociones/bebidas.webp" alt="Bebidas">
                <p>6 pack de bebidas a precio especial</p>
            </div>
            <div class="promo-card">
                <img src="img/promociones/snack.webp" alt="Snacks">
                <p>2x1 en tus snacks favoritos</p>
            </div>
            <div class="promo-card">
                <img src="img/promociones/frutas.png" alt="Frutas">
                <p>Frutas frescas con 20% de descuento</p>
            </div>
        </div>
    </section>

    <section class="pagos">
        <h3>Métodos de pago</h3>
        <div class="pagos-logos">
            <img src="img/m_pago/visa.webp" alt="Visa">
            <img src="img/m_pago/master.svg" alt="MasterCard">
            <img src="img/m_pago/pse.png" alt="PSE">
            <img src="img/m_pago/nequi.webp" alt="Nequi">
            <img src="img/m_pago/daviplata.png" alt="Daviplata">
        </div>
        <p>Recibimos tu tarjeta débito o crédito, billeteras digitales y pagos en línea.
            <strong>Sin recargos</strong>.
        </p>
    </section>

    <section class="ubicacion">
        <h3>Ubicación 📍</h3>
        <div class="ubicacion-content">
            <div class="ubicacion-texto">
                <p>
                    Nos encontramos en el barrio Ciudad, Bogotá.<br>
                    Una gran opción para estar cerca de ti y tu familia.<br>
                    <strong>¡Tu mercado de barrio ahora también en digital!</strong>
                </p>
                <p class="domicilios"><strong>¡Pregunta por nuestros domicilios!</strong></p>
            </div>
            <div class="ubicacion-mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.657681275791!2d-74.18658550877954!3d4.624607131400449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e79f39e77af%3A0x5d7cca58b7688058!2sChicala%2C%20Bosa%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1757892823995!5m2!1ses-419!2sco"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>

</body>

</html>