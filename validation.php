<?php 

	require_one("db.php");
	require_one("usuario.php");

	/**
	* 
	*/
	class Validator
	{
		
		public function dataValidator($values,$db){
	 $errors=[];


	$data_translate=[
	"email" => "correo electronico",
    "complete-name" => "Nombre completo",
    "user-name" => "Nombre de usuario",
    "pass" => "Contraseña"
    "cpass" => " Repita la contraseña"
	];

	  foreach ($values as $key => $value) {
    if (empty($values($_POST[$key]))
    $errors = "El campo $data_translate[$key] obligatorio";  

    else if ($db->getByEmail($_POST["email"]) != null) {
			$errors["email"] = "Este mail ya esta registrado";  header("location:inicia-sesion.php");exit;

		}

      if (strlen(($_POST["pass"]) < 3) {
      $errors["pass"]= "tu contraseña debe  tener al menos 3 caracterees"; 
    } 
    else if ($_POST["pass"]) != ($_POST["cpass"]) {
      $errors["pass"] = "Las contraseñas NO coinciden";


       if ($errors != "") {
    setcookie("error", $errors, time() +9)
    Redirect();
    };
 
       else 
    		setcookie($key, $values[$key]);

   return $errors;

   public function loginValidator(){
   	$errors=[];


   		if ()

	 if ($db->getByEmail($_POST["email"]) == null) {
			$errors["email"] = "Aún no eres usuario. Registrate"; redirect(registrate.php);exit;
		}
		else {
			$user = $db->getByEmail($_POST["email"]);
      var_dump(password_verify($_POST["pass"], $user->getPassword()), $user->getPassword());

			if (password_verify($_POST["pass"], $user->getPassword()) == false) {
				$errors["pass"] = "La contraseña que ingresaste no es valida";
			}
			   return $errors;

		}











   }




}


?>