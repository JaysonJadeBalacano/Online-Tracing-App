<?php
require('./database.php');

$sqlstudents = "SELECT * FROM students";
$sqlstudents= mysqli_query($connection, $sqlstudents);

require('./database.php');

$sqlemployee = "SELECT * FROM employee";
$sqlemployee= mysqli_query($connection, $sqlemployee);
?>
