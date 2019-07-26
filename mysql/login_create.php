<?php

  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pasword'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection) {
      echo "We are connected!";
      $query = "INSERT INTO users (username,password) VALUES ('$username', '$password')";
      $result = mysqli_query($connection, $query);
      if($result) {
          echo "<br>Data inserted";
      } else {
        echo "<br>Error: " . mysqli_error($connection);
      }
    } else {
      die("Database conn failed!");
    }

    echo "<br>Connection closed";
    mysqli_close($connection);

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
        <form action="login_create.php" method="post">
          <div class="form-group">
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
