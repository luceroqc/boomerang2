<?php
$errors;
require_once("functions.php");
global $errors;

  if ($_FILES["profile_pic"]["error"] == UPLOAD_ERR_OK){
    $nombreImagen = $_POST["usuario"];

    
    $nombre = $_FILES["profile_pic"]["name"];

    
    $archivo = $_FILES["profile_pic"]["tmp_name"];

    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = dirname(__FILE__) . "/images/" . $nombreImagen . "." . $ext;

    move_uploaded_file($archivo, $miArchivo);

    echo "<h2>Se subió tu archivo</h2>";
  } else {
    echo "<h1>No vino la imagen </h1>";
  }

   include_one("sesion-iniciada.php");

  if (!$auth->isLogged()) {
    header("Location:inicia-sesion.php");exit;
  }

  $user = $auth->getLoggedUser($db);
?>


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <!-- traigo el nombre del usuario que me guarde anteriormente para imrpimirlo -->
    <h1>Te damos la bienvenida <?=$userId["complete-name"]?></h1>
    
         <form class="" action="perfil.php" method="post" enctype="multipart/form-data">
          <div class=" hacer-after-before">
        <label for="">Sube tu imagen de perfil:</label>
        <input type="file" name="profile_pic" accept="image/*"  value="">
      </div>
      <div class="">
        <input type="submit" name="enviar" value="Enviar">
      </div>
    </form>

    <img width="50" src="<?=$file?>" alt="">



  <br><br>
  <a href="inicio.php">Ir al inicio</a>
  <br>
  <a href="deslogueo.php">Cerrar sesion ! </a>

  </body>
</html>

<?php

?>


































$errors;

$data_persistence= [
    "id" ,
    "email",
    "full-name",
    "user-name"
    ];


function Validación()



function savingdata($users){

  global $errors;

  $file = "data.json";

  $db = file_get_contents($file);
  $data = json_decode($db,true); 
  $id = count($data); 
  $id++; 

    if (array_key_exists($user['email'], $data))
    // set la variable global error
    $errors = 'Ya existe un usuario con este email. <br>
  olvidaste tu contraseña?';
    if ($errors != "") {
    setcookie('error', $errors, time() + 5);
    Redirect(registrate.php);
  }

  $users= [
    "id" => $id,
    "email" => $_POST["email"],
    "full-name" => $_POST["full-name"],
    "user-name" => $_POST["user-name"]
    ];
   

  array_push($data, $users);
  $data = json_encode($data);

  var_dump($data);

  file_put_contents($file, $data);

  setcookie('success', 'Usuario registrado con exíto!', time() + 5);

function Redirect($url = '../index.html', $permanent = false) {
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}

redirect();
