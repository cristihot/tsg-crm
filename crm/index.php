<?php

session_start();
// Change this to your connection info
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'crm';

$error = "";

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Eroare conectare MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password'])) {
	// Could not get the data that should have been sent.
  $error = "Please fill both the username and password field!";
  die();
// 	die ('Please fill both the username and password field!');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="./css/main_old.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="login">
		<h1>Users area</h1>
		<form action="index.php" method="post">
			<label for="username"><i class="fas fa-user"></i></label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			<label for="password"><i class="fas fa-lock"></i></label>
			<input type="password" name="password" placeholder="Password" id="password" required>
      <p>Error: <?php echo $error; ?></p>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>