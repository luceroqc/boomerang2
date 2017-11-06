<?php

<?php

 include_one("sesion-iniciada.php");

    if ($auth->isLogged()) {
    header("Location:perfil.php");exit;
  }


  if ($_POST){
    $errors= $validator->loginValidator($db);

  if (empty(count($errors))){
    
      $user = new user($_POST[complete-name],$_POST[email],$_POST[user-name],$_POST[pass]);
      $user = $db->createUser($user);

    ]);
  }  

   redirect(index.php);exit;

  }
  /*include_one("funciones.php");

    $errors=[];

  if (Logueado()) {
    header("Location:bienvenido.php");exit;
  }

  if ($_POST) {
    $errors = validarData($_POST);


    if (count($errors) >0) {
      foreach($errors as $error)
    }

    else (count($errors) == 0) {
      loguear($_POST["email"]);

      if (isset($_POST["recordame"])) {
        setcookie("usuarioLogueado", $_POST["email"], time());
      }

      header("Location:perfil.php?email=" . $_POST["email"]);


    if(!estaLogueado()) {
    header("location:registrate.php");exit;
  };
*/
 ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width-device-width">
   <link rel="stylesheet"  href="../css/styles.css">
   <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC|Indie+Flower|Italianno|Marcellus" rel="stylesheet">


 <title>Registrate</title>
</head>
<body>
  <header class="cabecera">
  <ul class="enter_buttoms">
         <li>
            <a href="../php/inicia-sesion.php" class="Registrate">
        Inicia Sesión
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
        type="email"
        class="email"
        name="email"
        id="email"
        value="<?php echo (isset($_COOKIE['email']) && !empty($_COOKIE['email'])) ? $_COOKIE['email'] : ""; ?>"
        placeholder="correo electronico">

      <input
        type="text"
        class="complete-name"
        name="complete-name"
        id="complete-name"
        value="<?php echo (isset($_COOKIE['complete-name']) && !empty($_COOKIE['complete-name'])) ? $_COOKIE['complete-name'] : ""; ?>"
        placeholder="Nombre completo">

      <input
        type="text"
        class="user-name"
        name="user-name"
        id="user-name"
        value="<?php echo (isset($_COOKIE['user-name']) && !empty($_COOKIE['user-name'])) ? $_COOKIE['user-name'] : ""; ?>"
        placeholder="Nombre de usuario">

      <input
        type="password"
        class="pass"
        name="pass"
        id="pass"
        placeholder="Contraseña">

        <input
        type="password"
        class="cpass"
        name="cpass"
        id="cpass"
        placeholder="Repite tu Contraseña">

      <button type="submit" name="button" class="enviar">
        Registate
      </button>
      <span>
        <br><br> ó <br><br>
      </span>
      <button type="submit" name="facebook" class=" i-facebook">
      <img src="../images/facebook.svg" height="35" >
         Registrate con Facebook
      </button>
      <button type="submit" name="google" class="i-google">
      <img src="../images/google.png" height="30">
      Registrate con Google
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
