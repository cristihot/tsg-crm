<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection) {
      echo "We are connected!";
      $query = "SELECT * FROM users";
      $result = mysqli_query($connection, $query);
      if($result) {

      } else {
        echo "<br>Error: " . mysqli_error($connection);
      }
    } else {
      die("Database conn failed!");
    }

    echo "<br>Connection closed";
    mysqli_close($connection);



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
      <div class="col-sm-6">
        <?php
          while($row = mysqli_fetch_assoc($result)) {
        ?>
      <pre>
        <?php
          print_r($row);
        }
        ?>
      </pre>


      </div>

    </div>
  </body>
</html>
