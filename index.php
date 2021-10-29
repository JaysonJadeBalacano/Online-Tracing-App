<?php
require('./read.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>CREATE</title>
  <head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Tracing App</title>
</head>
<style>
  html, body {
    margin: 0;
    padding: 0;
  }
  .main {
    height: 100vh;

    /* Grid */
    display: grid;
    grid-template-rows: auto 1fr;
    justify-items: center;
    row-gap: 20px;

  }
.main .create-main {
  grid-row: 1/2;
  display: grid;
  grid-auto-rows: auto;
  row-gap: 2px;
}
.main .create-main h3 {
  text-align: center;
}
.main .read-main {
  grid-row: 2/3;
}
.main .read-main tr th {
  width: 200px;
}
.main .read-main tr td {
  text-align: center;
}
.main .read-main tr td:nth-child(4) {
  display: grid;
  grid-auto-flow: column;
}
</style>

<body>

<div class="main">
  <form class="create-main" action="/cts_qr/php-crud/create.php" method="post">
    <h3>CREATE USER</h3>
    <input type="text" name="LastName" placeholder="Enter your lastname" required />
    <input type="text" name="FirstName" placeholder="Enter your firstname" required />
    <input type="text" name="MiddleName" placeholder="Enter your middlename" required />
    <input type="text" name="Birthdate" placeholder="Enter your birthdate" required />
    <input type="text" name="HomeAddress" placeholder="Enter your homeaddress" required />
    <input type="text" name="PhoneNo" placeholder="Enter your phoneno" required />
    <input type="text" name="EmailAddress" placeholder="Enter your emailaddress" required />
    <input type="text" name="Username" placeholder="Enter your username" required />
    <input type="text" name="Course" placeholder="Enter your course" required />
    <input type="password" name="Password" placeholder="Enter your password" required />
    <input type="submit" name="create" value="SUBMIT">
</form>

<table class="read-main">
  <tr>
    <th>ID</th>
    <th>LastName</th>
    <th>FirstName</th>
    <th>MiddleName</th>
    <th>Birthdate</th>
    <th>HomeAddress</th>
    <th>PhoneNo.</th>
    <th>EmailAddress</th>
    <th>Course</th>
    <th>Username</th>
    <th>Password</th>
</tr>
<?php while($results = mysqli_fetch_array($sqlstudents)){?>
<tr>
  <td><?php echo $results ['ID'] ?></td>
  <td><?php echo $results ['Last Name'] ?></td>
  <td><?php echo $results ['First Name'] ?></td>
  <td><?php echo $results ['Middle Name'] ?></td>
  <td><?php echo $results ['Birthdate'] ?></td>
  <td><?php echo $results ['Home Address'] ?></td>
  <td><?php echo $results ['Phone No.'] ?></td>
  <td><?php echo $results ['Email Address'] ?></td>
  <td><?php echo $results ['Course'] ?></td>
  <td><?php echo $results ['Username'] ?></td>
  <td><?php echo $results ['Password'] ?></td>
  <td><?php echo $results ['Course'] ?></td>
  <td>
    <form action="#" method="get">
      <input type="submit" name="edit" value="EDIT">
</form>
<form action='#' method="get">
  <input type="submit" name="delete" value="DELETE">
</form>
</td>
</tr>
<?php } ?>
</table>
</div>

</body>
</html>