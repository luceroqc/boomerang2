

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Contacto</title>
</head>
<body>
  <header class="cabecera">
<div class="nombre_logo">
 <a href="../html/index.html">
   <img src="../images/logo.png" class="logo-index">
 </a>
 <a href="../html/index.html">
   <h3 class="marca"> Boomerang </h3>
 </a>
 </div>
 </header>
    <br>

    <div class="enter_buttoms">
          <a href="../php/inicia-sesion.php">
            Inicia Sesión
          </a>
          <a href="../php/registrate.php">
            Registrate
          </a>
        </div>
   </header><br><br><br>

<form action="save.php" method="post" class="mesages">
      <input
        type="text"
        class="name"
        placeholder="correo electronico"><br><br>
Escbrine tu mensaje acá:
<br>
<textarea type="submit" name="comentario" rows="7" cols="80">
</textarea>
<br><br>


       <button type="submit" class="btn btn-primary">
       Enviar
      </button>
    </form>
    <br><br><br>

        <footer>
      <div class="barra_info">

        </li>
          <a href="mailto:nuestro-nombre@mail.com">
            Contacto2
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
      </div>
    </footer>
  </body>
</html>
