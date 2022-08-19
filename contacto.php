<?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    echo '
      <script>
        alert("sesion cerrada");
        window.location = "index.php";
      </script>
    ';
    session_destroy();
    die();
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto</title>

  <link rel="stylesheet" href="./css/estilos.css" />
  <!-- <link rel="stylesheet" href="./lib/carousel/owl.theme.default.min.css"> -->
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
        <a href="./index.php"><i class="fa-solid fa-house"></i> Inicio</a>
      </li>
      <li>
        <a href="php/salir.php"><i class="fa-solid fa-person-running"></i> Salir</a>
      </li>
    </ul>
  </header>

  <div class="form-contacto">

    <form name="formEmail" action="./php/correo.php" method="post" enctype="multipart/form-data">

      <div class="contacto-info">
        <span>Nombre:</span>
        <input type="text" name="nombrecompleto" required>
      </div>

      <div class="contacto-info">
        <span>Correo:</span>
        <input type="text" name="emailCliente" required>
      </div>

      <div class="contacto-info">
        <span>archivos:</span>
        <input type="file" id="archivo[]" name="archivo[]" class="custom-file-input" multiple="true">
        <label for="inputGroupFile01"></label>
      </div>

      <div class="contacto-info">
        <span>Mensaje:</span>
        <textarea placeholder="Mensaje..." name="mensaje" rows="10" required></textarea>
      </div>

      <button type="submit" name="submit">ENVIAR</button>

    </form>
  </div>


  <!-- -------------------
    -                      -
    -    PIE DE PAGINA     -
    -                      -
    -------------------- -->

  <footer>
    <p>Todos los derechos reservados a <b>CineMundo</b></p>
  </footer>

  <script src="./lib/jquery-3.6.0.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>