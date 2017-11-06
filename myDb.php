<?php

require_once("db.php");

class myDB extends db {
  private $conn;

  public function __construct() {
    $dsn = "mysql:host=localhost;port=3306;dbname=boomerang";
    $user = "root";
    $pass = "root";

    $this->conn = new PDO($dsn, $user, $pass);
  }

  public function getByEmail($email) {
    $sql = "Select * from usuarios where email = :email";

    $query = $this->conn->prepare($sql);

    $query->bindValue(":email", $email);

    $query->execute();

    $array = $query->fetch(PDO::FETCH_ASSOC);

    if (!$array) {
      return NULL;
    }