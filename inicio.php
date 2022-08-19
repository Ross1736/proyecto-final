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
  <title>CineMundo</title>

  <link rel="stylesheet" href="./css/estilos.css" />
  <!-- Carousel -->
  <link rel="stylesheet" href="./lib/carousel/owl.carousel.min.css" />
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
        <a href="./contacto.php"><i class="fa-solid fa-envelope"></i> Contacto</a>
      </li>
      <li>
        <a href="php/salir.php"><i class="fa-solid fa-person-running"></i> Salir</a>
      </li>
    </ul>
  </header>

  <!-- -------------------------
    -                            -
    -    NAVEGACION CAROUSEL     -
    -                            -
    -------------------------- -->

  <nav>
    <!-- Carousel -->
    <div class="carousel owl-carousel">
      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/pinky blinders.jpg" alt="" />
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/the witcher.jpg" alt="" />
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/house of the dragon.jpg" alt="" />
        </a>
      </div>
    </div>
  </nav>

  <!-- -----------------
    -                    -
    -    INFORMACION     -
    -                    -
    ------------------ -->

  <aside>
    <h2>CineMundo - Estrenos 2022</h2>
    <p>
      Ofrecemos las mejores películas, series y animes del momento, con
      actualizaciones constantes para que puedas disfrutar contenido las 24
      horas.
    </p>
  </aside>

  <!-- ----------------------
    -                         -
    -    CUERPO PRINCIPAL     -
    -                         -
    ----------------------- -->

  <main>
    <h3>Estrenos</h3>

    <div class="contenedor-cuerpo">
      <a href="#">
        <img src="./img/portadas/thor.jpg" alt="" />
        <h4>Thor</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/minions el origen de gru.jpg" alt="" />
        <h4>Minions: El origen de Gru</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/maleficio.jpg" alt="" />
        <h4>Maleficio</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/cruella.jpg" alt="" />
        <h4>Cruella</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/Shang Chi y la leyenda de los diez anillos.jpg" alt="" />
        <h4>Shang Chi y la leyenda de los diez anillos</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/lightyear.jpg" alt="" />
        <h4>Lightyear</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/harry-potter.jpg" alt="" />
        <h4>Harry Potter y la piedra filosofal</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/erase-una-vez.jpg" alt="" />
        <h4>Erase una vez</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/dos padres por desigual.jpg" alt="" />
        <h4>Dos padres por desigual</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/blade.jpg" alt="" />
        <h4>Blade</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/batman.jpg" alt="" />
        <h4>Batman</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/avatar.jpg" alt="" />
        <h4>Avatar</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/aquaman.jpg" alt="" />
        <h4>Aquaman</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/aladin.jpg" alt="" />
        <h4>Aladin</h4>
      </a>
    </div>

    <h3>Películas Destacadas</h3>
    <!-- Carousel -->
    <div class="carousel owl-carousel">
      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/morbius-portada.jpg" alt="" />
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/norte-portada.jpg" alt="" />
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/sonic-portada.jpg" alt="" />
        </a>
      </div>
    </div>

    <h3>Películas</h3>

    <div class="contenedor-cuerpo">
      <a href="#">
        <img src="./img/portadas/thor.jpg" alt="" />
        <h4>Thor</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/minions el origen de gru.jpg" alt="" />
        <h4>Minions: El origen de Gru</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/maleficio.jpg" alt="" />
        <h4>Maleficio</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/cruella.jpg" alt="" />
        <h4>Cruella</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/Shang Chi y la leyenda de los diez anillos.jpg" alt="" />
        <h4>Shang Chi y la leyenda de los diez anillos</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/lightyear.jpg" alt="" />
        <h4>Lightyear</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/harry-potter.jpg" alt="" />
        <h4>Harry Potter y la piedra filosofal</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/erase-una-vez.jpg" alt="" />
        <h4>Erase una vez</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/dos padres por desigual.jpg" alt="" />
        <h4>Dos padres por desigual</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/blade.jpg" alt="" />
        <h4>Blade</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/batman.jpg" alt="" />
        <h4>Batman</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/avatar.jpg" alt="" />
        <h4>Avatar</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/aquaman.jpg" alt="" />
        <h4>Aquaman</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/aladin.jpg" alt="" />
        <h4>Aladin</h4>
      </a>
    </div>

    <h3>Series Destacadas</h3>
    <!-- Carousel -->
    <div class="carousel owl-carousel">
      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/stranger-things.jpg" alt="" />
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/house of the dragon.jpg" alt="" />
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img src="./img/carousel-inicio/black sails.jpg" alt="" />
        </a>
      </div>
    </div>

    <h3>Series</h3>

    <div class="contenedor-cuerpo">
      <a href="#">
        <img src="./img/portadas/thor.jpg" alt="" />
        <h4>Thor</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/minions el origen de gru.jpg" alt="" />
        <h4>Minions: El origen de Gru</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/maleficio.jpg" alt="" />
        <h4>Maleficio</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/cruella.jpg" alt="" />
        <h4>Cruella</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/Shang Chi y la leyenda de los diez anillos.jpg" alt="" />
        <h4>Shang Chi y la leyenda de los diez anillos</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/lightyear.jpg" alt="" />
        <h4>Lightyear</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/harry-potter.jpg" alt="" />
        <h4>Harry Potter y la piedra filosofal</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/erase-una-vez.jpg" alt="" />
        <h4>Erase una vez</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/dos padres por desigual.jpg" alt="" />
        <h4>Dos padres por desigual</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/blade.jpg" alt="" />
        <h4>Blade</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/batman.jpg" alt="" />
        <h4>Batman</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/avatar.jpg" alt="" />
        <h4>Avatar</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/aquaman.jpg" alt="" />
        <h4>Aquaman</h4>
      </a>
      <a href="#">
        <img src="./img/portadas/aladin.jpg" alt="" />
        <h4>Aladin</h4>
      </a>
    </div>
  </main>

  <!-- -------------------
    -                      -
    -    PIE DE PAGINA     -
    -                      -
    -------------------- -->

  <footer>
    <p>Todos los derechos reservados a <b>CineMundo</b></p>
  </footer>

  <script src="./lib/jquery-3.6.0.min.js"></script>
  <script src="./lib/carousel/owl.carousel.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>