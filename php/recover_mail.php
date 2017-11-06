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
  <title>Recover-mail</title>
</head>
<body>
  <header class="cabecera">
<div class="nombre_logo">
 <a href="../html/index.html">
   <img src="../images/logo.png" width=14% class="logo-index">
 </a>
 <a href="../html/index.html">
   <h3 class="marca"> Boomerang </h3>
 </a>
 </div>
 </header>

<br>
<body>
 <article class="successful">
<h2> ¡Te hemos enviado un correo! Para recuperar tu cuenta</h2>
</article>
</body>
</html>
