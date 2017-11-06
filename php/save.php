	<?php 

require_once("functions.php");
guardarUsuario($_POST);

echo "Te has registrado con éxito.";

function Redirect($url = '../index.html', $permanent = false) {
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}

setcookie('success', 'Usuario registrado con exíto!', time() + 5);
  // regreso al form
  Redirect("perfil.php");

?>