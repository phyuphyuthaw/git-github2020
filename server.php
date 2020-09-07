<?php

session_start();

//initialize variables
$fullname = "";
$username = "";
$email = "";
$phone = "";
$errors = array();

//connect to db
$db = mysqli_connect("localhost","root", "","attendance_employees") or die("Could not connect to database");

//Register users
if(isset($_POST['reg_user'])){
$fullname = mysqli_real_escape_string($db,$_POST['fullname']);
$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);

//form validation
if(empty($fullname)) {array_push($errors, "Fullname is required");}
if(empty($username)) {array_push($errors, "Username is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($phone)) {array_push($errors, "Phone Number is required");}


//if there are no errors, save user to database
if(count($errors) == 0){
	$password = md5($password);
	$sql = "INSERT INTO users(fullname, username, password, email, phone) VALUES ('$fullname', '$username', '$password', '$email', '$phone')";
	mysqli_query($db, $sql);
	echo "Registeration Successful!";
	
}
}

//log user in from login page
if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)) {array_push($errors, "Username is required");}
	if(empty($password)) {array_push($errors, "Password is required");}

	if(count($errors) == 0){

		$password=md5($password);
		$query = "SELECT  * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');

		}else{
			array_push($errors, "Wrong username or password combination.");
			header('location: login.php');
		}
	}


}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php ');
}
?>