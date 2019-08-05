<?php

$hostname = "localhost";
$database = "crm";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username, $password, $database);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Eroare conectare MySQL: ' . mysqli_connect_error());
} else {
	//echo "we are connected";
}

// try {
//   $conn = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password); 
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } 
// catch (PDOException $e) {
//   print "Error!: " . $e->getMessage() . "<br/>";
//   die();
// }

?>