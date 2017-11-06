<?php  

/**
* 
*/
class user 
{

	private $id;
	private $email;
	private $complete-name;
	private $user-name;
	private $pass




	"email" => "correo electronico",
    "complete-name-name" => "Nombre completo",
    "user-name" => "Nombre de usuario",
    "pass" => "Contraseña"
    "cpass" => " Repita la contraseña"
	];
	
	function __construct($email,$complete-name,$user-name,$pass)
	if ($id==null) {
		this->pass=password_hash($pass,PASSWORD_DEFFAULD)
		# code...
	}
	else {
		$this->pass=$pass;
	}

	this->id =$id
	this->email= $email;
	this->complete-name= $complete-name;
	this->user-name= $user-name;
	}


	public function getId(){
		return $this->Id;
	}	


	public function setId($id){

		$this->id =$id;
	}

	public function getEmail(){
		return $this->email;
	}	


	public function setEmail($email){

		$this->email =$email;
	}


	public funtion getName()

	{
		return $this->complete-name;
		# code...
	}


	public function setName($complete-name){

		$this->coplete-name =$complete-name;
	}


	public funtion getUser()

	{
		return $this->user-name;
		# code...
	}

	public futcion setUser($user-name){

		$this->user-name = $user-name;
	}

  	public function getPassword() {
    return $this->pass;
  	}

  	public function setPassword($pass) {
    $this->pass = $pass;
 	}

}





?>