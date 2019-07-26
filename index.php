<?php
session_start();

require("includes/functions.php");
require("includes/db.php");

$alertMessage = "";

if (empty($_POST['email']) || empty($_POST['password'])) {
  $alertMessage = "Va rugam sa completati ambele campuri";
} else {
  $usernameSent = test_input($_POST['email']);
  $passwordSent = test_input($_POST['password']);

  // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
  if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $usernameSent);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if (password_verify($passwordSent, $password)) {
			// Verification success! User has loggedin!
			// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $usernameSent;
			$_SESSION['id'] = $id;
			//echo 'Welcome ' . $_SESSION['name'] . '!';
			header('Location: home.php');
		} else {
			echo 'Incorrect password!';
		}
	} else {
		echo 'Incorrect username!';
	}
	$stmt->close();
}
  
  
  //$alertMessage = "COOL";

}
	

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
      <input type="text" class="fadeIn second" name="email" placeholder="Adresa email">
      <input type="password" class="fadeIn third" name="password" placeholder="Parola">
      <input type="submit" id="submit" class="fadeIn fourth" value="Acces">
      <p>
        <?php echo $alertMessage; $alertMessage = "";?>
      </p>
    </form>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Parola uitata?</a>
    </div>
  </div>
</div>
</body>
</html>