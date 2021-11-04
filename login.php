<?php session_start(); ?>
<?php include('database.php'); ?>
<html> 
<head>

<title>SIGN IN</title>

<link rel="stylesheet" type="text/css" href="design.css">
</head>

   <div class ="header1">
  <h1 class="h1">CONTACT TRACING APPLICATION</h1>
<div class="form-wrapper">
	
  
  <form action="#" method="post">
    <h3>SIGN IN</h3>
	
    <div class="form-item">
		<input type="text" name="Username" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="Password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$Username = mysqli_real_escape_string($con, $_POST['Username']);
			$Password = mysqli_real_escape_string($con, $_POST['pass']);
			$query 		= mysqli_query($con, "SELECT * FROM students WHERE  password='$Password' and username='$Username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:hdf.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
<p>
<td>Don't have an account?</td> <a href="http://localhost/cts_qr/php-crud/create.php"> Register here </a>

    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>

