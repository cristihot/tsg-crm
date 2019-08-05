<?php
session_start();

require("includes/functions.php");
require("includes/db.php");

$alertMessage = "";

if (empty($_POST['email']) || empty($_POST['password'])) {
  $alertMessage = "Va rugam sa completati ambele campuri";
} else {
  $emailSent = test_input($_POST['email']);
  $passwordSent = test_input($_POST['password']);

  if($stmt = $conn->prepare('SELECT id, password FROM users WHERE email = ?')) {
    $stmt->bind_param('s', $emailSent);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
      $stmt->bind_result($id, $password);
      $stmt->fetch();
      if (password_verify($passwordSent, $password)) {
        session_regenerate_id();
			  $_SESSION['loggedin'] = TRUE;
			  $_SESSION['name'] = $emailSent;
        $_SESSION['id'] = $id;
        header('Location: pages/home.php');
      } else {
        $alertMessage = "Parola este incorecta!";
      }
    } else {
      $alertMessage = "Adresa de email incorecta";
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