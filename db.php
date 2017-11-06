<?php

require_once("user.php");

abstract class db {
  public abstract function getByEmail($email);
  public abstract function getAll();
  public abstract function saveUser(user $user);
}

?>