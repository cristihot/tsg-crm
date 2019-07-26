<?php
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  if(!$connection) {
    die("<br>Connection error: " . mysqli_error($connection));
  }
?>
