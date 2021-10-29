<?php
require('./database.php');

if (isset($_POST['create'])) {
$LastName = $_POST['LastName'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$Birthdate = $_POST['Birthdate'];
$HomeAddress = $_POST['HomeAddress'];
$PhoneNo = $_POST['PhoneNo'];
$EmailAddress = $_POST['EmailAddress'];
$Course = $_POST['Course'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$querycreate = "INSERT INTO students VALUES (null,'$LastName', '$FirstName', '$MiddleName', '$Birthdate', '$HomeAddress', '$PhoneNo.', '$EmailAddress', '$Username', '$Password', '$Course')";
$sqlcreate = mysqli_query($connection,$querycreate);
echo '<script>alert("Successfully Inserted")</script>';
echo '<script>window.location.href = "/cts_qr/php-crud/index.php"</script>';
} else{
	echo '<script>window.location.href = "/cts_qr/php-crud/index.php"</script>';
}
?>