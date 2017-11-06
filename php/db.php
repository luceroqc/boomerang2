<?php

 $conn;

  function doConnect() {
    global $conn;

    
    $parameters = getContentFile("parameters.json");

    $db = $parameters->db;

    $dsn = sprintf(
      "%s:host=%s;dbname=%s;charset=%s;port:%d",
      $db->driver, $db->host, $db->dbname, $db->charset, $db->port
    );

    try 
    {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $user = (


    "email" =>  $_POST[ "correo electronico"],
    "full-name" =>  $_POST["Nombre completo"],
    "user-name" =>  $_POST["Nombre de usuario"],
    "pass" =>  $_POST["Contraseña"]
    ];
    


        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "users",
                implode(", ", array_keys($user)),
                ":" . implode(", :", array_keys($user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }

    catch(PDOException $error) 
    {
        echo $sql . "<br>" . $error->getMessage();
    }
    
}