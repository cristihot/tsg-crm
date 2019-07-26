<?php
  include ("db.php");
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['pasword'];

    //$username = mysqli_real_escape_string($connection,$_POST['username']);
    //$password = mysqli_real_escape_string($connection,$_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      session_register("myusername");
      $_SESSION['login_user'] = $username;
      header("location: welcome.php");

    } else {
      $error = "Username/Password is incorrect";
    }


    // if($connection) {
    //   echo "Connection established...<br>";
    //   $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    //   $result = mysqli_query($connection, $query) or die("Could not connect database " . mysqli_error($con));
    //   if ($result) {
    //     echo "Welcome back user!";
    //   } else {
    //     echo "Username and/or password is incorrect!!";
    //   }
    // } else {
    //   die("Database conn failed!");
    // }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="col-sm-3">
        <form action="login.php" method="post">
          <div class="form-group">
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="pasword" class="form-control">
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="Login">
        </form>
      </div>

    </div>
  </body>
</html>
