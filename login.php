<?php
require('./database.php');

if (isset($_POST['students'])) 
    $Username = trim($_POST['Username']);
    $Password = trim($_POST['Password']);

if (empty($Username) || empty($Password)) {
        echo "<script>alert('Please fill up all fields')</script>";
    } else {
        $queryValidate = "SELECT * FROM students WHERE Username = '$Username' AND Password = md5('$Password')";
        $sqlValidate = mysqli_query($connection,$queryValidate);

      if (mysqli_num_rows($sqlValidate) > 0) {
          echo 'Valid Credential';
      } else {
          echo 'Invalid Credential';
      }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
</head>
<body>
    <h3> STUDENT LOG IN <h3>
  <form action="/cts_qr/php-crud/login.php" method="post">
    <input type="text" name="Username" placeholder="Enter your Username"/>
    <input type="Password" name="Password" placeholder="Enter your Password"/>
    <input type="submit" name="login" value="LOGIN"/>
  </form>
</body>
</html>
