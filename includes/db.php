<?php

$hostname = "localhost";
$database = "crm";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password); 
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}

?>