<?php
require('./database.php');

$sqlstudents = "SELECT * FROM students";
$sqlstudents= mysqli_query($connection, $sqlstudents);
?>