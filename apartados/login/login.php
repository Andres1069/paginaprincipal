<?php
// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Aquí podrías hacer la validación con tu base de datos
    // Ejemplo básico:
    if ($email === "mercadodigital@digital.com" && $password === "123456") {
        $mensaje = "<p class='success'>✅ Bienvenido, $email</p>";
    } else {
        $mensaje = "<p class='error'>❌ Usuario o contraseña incorrectos</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mercado Digital</title>
    <link rel="stylesheet" href="config/login.css"> <!-- CSS exclusivo -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="/paginaweb/img/logo/carrito.png">
</head>
<body>

<div class="login-container">

  <!-- Boton de volver al inicio -->
  <button class="btn-back" type="button" onclick="window.location.href='/paginaweb/index.php'">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"/>
    </svg>
    Volver a Inicio
  </button>

  <!-- Logo Mercado Digital -->
  <div class="logo">
    <img src="/paginaweb/img/logo/logo-removebg-preview.png" alt="Mercado Digital">
  </div>

  <!-- Mensaje PHP -->
  <?php if (!empty($mensaje)) echo $mensaje; ?>

  <!-- Formulario de Login -->
  <form method="POST" action="">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" required>

    <div class="form-options">
      <label><input type="checkbox" name="remember"> Recordar datos</label>
      <a href="#">Olvidé mi contraseña</a>
    </div>

    <button type="submit">Entrar</button>
  </form>

  <div class="register">
    ¿No tienes cuenta? <a href="registro.php">Regístrate</a>
  </div>

  <div class="social-buttons">
    <button class="btn-social btn-google" type="button">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1024px-Google_%22G%22_logo.svg.png" alt="Google">
      Registrarse con Google
    </button>

    <button class="btn-social btn-facebook" type="button">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook">
      Registrarse con Facebook
    </button>
  </div>

</div>

</body>
</html>
