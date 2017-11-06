<?php

  session_start();



  function 
  function 

  function 


   function 

   function getUser() {
    if (isLogged()) {
      $email = $_SESSION["user_logged"];
      return getUser($email);
    } 

    else {
      return null;
    };

/*function getAllUsers() {
    $archivo = fopen("usuarios.json", "r");

    $linea = fgets($archivo);

    $usuarios = [];

    while($linea != false) {

      $array = json_decode($linea, true);
      $usuarios[] = $array;

      $linea = fgets($archivo);
    }

    return $usuarios;
  }*/


$errors;




$data_persist=[

  "email",
 "full-name",
 "user-name" 
];

function saving ($values) {
validData ($values);
savingData($values);
}

function dataValidation($values){
	global $errors;

	$data_translate=[
	"email" => "correo electronico",
    "complete-name" => "Nombre completo",
    "user-name" => "Nombre de usuario",
    "pass" => "Contraseña"
    "cpass" => " Repita la contraseña"
	];

	  foreach ($values as $key => $value) {
    if (empty($values[$key]))
    $errors = "El campo $data_translate[$key] obligatorio";  

      if (strlen($key["pass"]) < 3) {
      $errors["pass"] = "tu contraseña debe  tener al menos 3 caracterees"; 
    } 
    else if ($key["pass"] != $key["cpass"]) {
      $errors["password"] = "Las contraseñas NOOOOO coinciden";

    else 
    setcookie($key, $values[$key]);
  
   if ($errors != "") {
    setcookie("error", $errors, time() +9)
    Redirect();
    };

    function createUser(){

    $user= [
    "id" => $id,
    "email" => $_POST["email"],
    "full-name" => $_POST["full-name"],
    "user-name" => $_POST["user-name"],
    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)  ];

  array_push($data, $users);
  $data = json_encode($data);

  var_dump($data);

  file_put_contents($data);

}


  
function saveUser($users;){

  $file = "data.json";

  $db = file_get_contents($file);
  $data = json_decode($db,true); 
  $id = count($data); 
  $id++; 

    if (array_key_exists($user["email"], $data)){
      

    $errors = "Ya existe un usuario con este email." 
    header("Location:recover.php");exit;
    if ($errors != "") {
    setcookie("error", $errors, time() + 5);
    eader("Location:complete.php");exit;
  }



function getContentFile($name_file, $in_array = false) {
  $content_string_file = file_get_contents($name_file, true);
  $content_file = json_decode($content_string_file, $in_array);
  return $content_file;
}

  header("location:index.php");exit;
  echo("hola mundo");?>




 

