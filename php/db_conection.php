<?php


$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "boomerag";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

try 
{
	$connection = new PDO("mysql:host=$host", $username, $password, );
	$sql = file_get_contents("data/boomerang-users.sql");
	$connection->exec($sql);
	
	echo "la base de datos de boomerang se ha cerado satisfactoriamete";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}