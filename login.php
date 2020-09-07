<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
	<link rel = "stylesheet" type="text/css" href = "style.css">
</head>
<body>
	<div class = "container">
		<div class = "header">
			<h2>Log IN</h2>

		</div>

		<form action="login.php" method = "post">
			<?php include('errors.php'); ?>
			<div class = 'input-group'>
				<label>Username</label>
				<input type="text" name="username" required >
			</div>

			<div class= 'input-group'>
				<label>Password</label>
				<input type="text" name="password" required>
			</div>
			
			<button type = "submit" name = "login" class = "btn">Login</button>

			<p>Not an employee?<a href="register.php"><b>Register Here</b></a></p>
			
		</form>

</body>
</html>