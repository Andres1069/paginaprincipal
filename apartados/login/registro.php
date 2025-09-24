<?php
// Procesar registro
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';

    // Validaciones básicas
    if (empty($nombre) || empty($email) || empty($password) || empty($confirmar)) {
        $mensaje = "❌ Todos los campos son obligatorios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "❌ El correo no es válido.";
    } elseif ($password !== $confirmar) {
        $mensaje = "❌ Las contraseñas no coinciden.";
    } else {
        // Aquí conectarías con la BD y guardarías los datos
        // Ejemplo simple de éxito
        $mensaje = "✅ Registro exitoso. Bienvenido, $nombre!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Mercado Digital</title>
    <link rel="stylesheet" href="config/login.css"> <!-- CSS exclusivo -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/paginaweb/img/logo/carrito.png">
</head>
<body>

<body class="register-page">
  <div class="container">
  <!-- Botón volver al inicio -->
  <button class="btn-back" type="button" onclick="window.location.href='/paginaweb/index.php'">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"/>
    </svg>
    Volver a Inicio
  </button>

  <!-- Logo -->
  <div class="logo" id="logopagina">
    <img src="/paginaweb/img/logo/logo-removebg-preview.png" alt="Mercado Digital">
  </div>

  <!-- Formulario Registro -->
  <form method="POST" action="">
    <label for="nombre">Nombre completo</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="email">Correo electrónico</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" required>

    <label for="confirmar">Confirmar contraseña</label>
    <input type="password" name="confirmar" id="confirmar" required>

    <button type="submit">Registrarse</button>
  </form>

  <?php if (!empty($mensaje)) : ?>
    <p class="mensaje"><?= $mensaje ?></p>
  <?php endif; ?>

  <div class="login">
    ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
  </div>

</div>

</body>
</html>
