<?php
  if($_POST) {
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];

    $sql = "INSERT INTO users(`username`, `name`, `lastname`) VALUES ('$username','$name', '$lastname')";
    $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');
    mysqli_query($connection, $sql);
    header('Location: /index.php?status=success&message=User was created');
  } else {
    header('Location: /index.php?status=error&message=There was an error');
  }