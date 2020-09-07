<?php include("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
	<link rel = "stylesheet" type="text/css" href = "style.css">
</head>
<body>
	<div class = "header">
		<h2>Register</h2>
	</div>

	<form method = "post" action = "register.php">
			<?php include('errors.php');?>
			<div class = "input-group">
				<label>Fullname</label>
				<input type = "text" name = "fullname">	
			</div>

			<div class = "input-group">
				<label>Username</label>
				<input type = "text" name = "username">
			</div>
			<div class = "input-group">
				<label>Password</label>
				<input type = "text" name = "password" >
			</div>
			<div class = "input-group">
				<label>Email</label>
				<input type = "text" name = "email">
			</div>
			<div class = "input-group">
				<label>Phone</label>
				<input type = "text" name = "phone">
			</div>
			<div class = "input-group">
				<button type = "submit" name= "reg_user" class = "btn">Register</button>	
			</div>
			<p>
				Already an employee? <a href="login.php">Sign IN</a>
			</p>

	</form> 
</body>
</html>
