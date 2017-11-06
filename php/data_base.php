<?php 

require_one('functions.php');

  function Connect() {
    global $conn;



    $dsn = sprintf(
      "%s:host=%s;dbname=%s;charset=%s;port:%d",
      $db->driver,
      $db->host, 
      $db->dbname, 
      $db->charset, 
      $db->port
    )


    try{
      $conn = new PDO($dsn, $db->user, $db->pass, $options);
    }catch (PDOException $e){
      die($e->getMessage());
    }
  }

    ;
 ?>