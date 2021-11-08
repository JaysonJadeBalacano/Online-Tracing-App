<?php
require('./read.php');
?>
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
<?php