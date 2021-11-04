<?php 
	include 'create.php';
	session_destroy();
	header('Location: login.php');	
?>