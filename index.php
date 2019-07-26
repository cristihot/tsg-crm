<?php
session_start();

require("includes/functions.php");
require("includes/db.php");

if (!isset($_POST['username'], $_POST['password'])) {
	$alertMessage = "Completati ambele campuri...";
	//die();
} else {
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
}
	
$alertMessage = "CUCULEANU";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <div class="wrapper fadeIn">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://tsg-euroshell.ro/wp-content/themes/tsg-euroshell/images/Transport-Service-Group-euroShell-Card-Agent.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="index.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Adresa email">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Parola">
      <input type="submit" id="submit" class="fadeIn fourth" value="Acces">
      <p>CUCU
        <?php $alertMessage; ?>
      </p>
    </form>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  </div>
</div>
</body>
</html>