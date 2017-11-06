<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width-device-width initial-scale=1" >
   <link rel="stylesheet"  href="../css/styles.css">
   <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   <title>Boomerang</title>
</head>
<body>
  <header>
    <div class="top-header">
    <img src="../images/img.jpg" alt="logotipo" class="logo">
    <h4>La comunidad donde lo que ayudas, vuelve..</h4>
        <nav class="session_buttoms" width="30%" height="20%">
          <ul class="enter_buttoms">
          <li><a href="test.php" class="test">Registrate </a></li>
          <li><a href="login.php" class="login">Ingresar</a></li>
          </ul>
        </nav>
    </div>
       <nav class="main-nav">
       <ul>
       <li><a href="../html/ayuda.html">¿Como funciona?</a></li>
       <li><a href="php/contacto.php">Donar</a></li>
       <li><a href="php/contacto.php">Búsqueda por Categorias</a></li>
       <li><a href="php/contacto.php">Búsqueda por zona</a></li>
       <li><a href="php/contacto.php">Urgente</a></li>
       <li><a href="../html/terminos_y_condiciones.html">Terminos y condiciones</a></li>
       </ul>
       </nav>
      <a href="#" class="toggle-nav"><span class="ion-navicon-round"></span></a> 
    </header>
  <section class="center_container" width="100%" height="150px">
  <img src="../images/background_soltar.png"  class="banner">
<!--  <div class="search-products">
    <form class="buscador" action="registros.php" method="post">
      <input type="text" class="search1" placeholder="Busca lo que quieras en boomerang" width="60px" height="20px"></input>
      <button type="submit" name="search" class="search2"><img class="find" src="../images/find.png" width="20px" height="20px"></button>
    </form> centrar!!!-->

  </section>
  <footer class="main-footer">
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="php/contacto.php">Contacto</a></li>
    <li><a href="../html/ayuda.html">Ayuda</a></li>
    </ul>
  </footer>
</body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
    $('.toggle-nav').click(function (){
    $('.main-nav').slideToggle(350);
    });
  </script>
</html>
