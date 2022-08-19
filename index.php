<?php
  session_start();

  if (isset($_SESSION['usuario'])) {
    header("location: inicio.php");
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingresar</title>

  <link rel="stylesheet" href="./css/estilos.css" />
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/470483f701.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- ------------------------
    -                           -
    -    MENU DE NAVEGACION     -
    -                           -
    ------------------------- -->

  <header>
    <h1>CineMundo</h1>

    <button id="btn-menu" class="btn-menu">
      <div class="bar"></div>
      <div class="bar"></div>
    </button>

    <ul>
      <li>
        <a href="./index.php"><i class="fa-solid fa-user"></i> Login</a>
      </li>
    </ul>
  </header>

  <section class="container forms">
    <div class="form login">
      <div class="form-content">
        <div class="titles">Ingresar</div>
        <form action="php/login.php" method="POST">
          <div class="field input-field">
            <input type="email" placeholder="Correo" name="email" class="input" />
          </div>

          <div class="field input-field">
            <input type="password" placeholder="Contraseña" name="password" class="password" />
            <i class="bx bx-hide eye-icon"></i>
          </div>

          <div class="form-link">
            <a href="#" class="forgot-pass">¿Olvidaste tu contraseña?</a>
          </div>

          <div class="field button-field">
            <button>Ingresar</button>
          </div>
        </form>

        <div class="form-link">
          <span>¿No tienes cuenta?
            <a href="#" class="link signup-link">Registrate</a></span>
        </div>
      </div>
    </div>

    <!-- Signup Form -->

    <div class="form signup">
      <div class="form-content">
        <div class="titles">Crear Cuenta</div>
        <form action="php/register.php" method="POST">
          <div class="field input-field">
            <input type="email" placeholder="Correo" name="email" class="input" />
          </div>

          <div class="field input-field">
            <input type="password" placeholder="Contraseña" name="password" class="password" />
          </div>

          <div class="field button-field">
            <button>Crear</button>
          </div>
        </form>

        <div class="form-link">
          <span>¿Ya tienes una cuenta?
            <a href="#" class="link login-link">Ingresar</a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- -------------------
    -                      -
    -    PIE DE PAGINA     -
    -                      -
    -------------------- -->

  <footer>
    <p>Todos los derechos reservados a <b>CineMundo</b></p>
  </footer>

  <!-- JavaScript -->
  <script src="./js/main.js"></script>
</body>

</html>