<?php
 requiere_one("sesion-iniciada.php");

  if (!$auth->isLogged()) {
    header("Location:inicia-sesion.php");exit;
  }

  $user = $auth->getLoggedUser($db);
?>








<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width-device-width">
   <link rel="stylesheet"  href="../css/styles.css">
   <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC|Indie+Flower|Italianno|Marcellus" rel="stylesheet">


 <title>Inicia-Sesión</title>
</head>
<body>
  <header class="cabecera">
    <ul class="enter_buttoms">
         <li>
            <a href="../php/registrate.php" class="registrate">
            Registrate
            </a>
        </li>
        </ul>
<div class="nombre_logo">
 <a href="../html/index.html">
   <img src="../images/logo.png" class="logo-index">
 </a>
 <a href="../html/index.html">
   <h3 class="marca"> Boomerang </h3>
 </a>
 </div><br><br>
 </header>

  <form action="save.php" method="post" class="formularios">
      <input
        type="text"
        class="name"
        placeholder="Ingresa tu correo o Nombre de usuario">
      <button type="submit" name="button" class="enviar">
        Recuperar Contraseña
      </button>

      <span>
        <br><br> ó <br><br>
      </span>
      <button type="submit" name="facebook" class=" i-facebook">
      <img src="../images/facebook.svg" height="35" >
        Iniciar Sesión con Facebook
      </button>
            <button type="submit" name="google" class="i-google">
      <img src="../images/google.png" height="30">
      Iniciar Sesión con Google
      </button>
    </form>



 <footer>

      <ul class="barra_info">
    <!--    <li>
          <a href="tel:1132908706">
            Llámanos
          </a> -->
        </li>
         <li>
        <a href="php/contacto.php">
            Contactanos
          </a>
        </li>
        <li>
          <a href="../html/ayuda.html">
            Ayuda
          </a>
        </li>
        <li>
          <a href="../html/terminos_y_condiciones.html">
            Terminos y Condiciones
          </a>
        </li>
      </ul> 
      
    </footer>

  </body>
</html>