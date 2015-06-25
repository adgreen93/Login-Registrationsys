

<?php 

error_reporting(E_ALL & ~E_NOTICE);
session_start();


if ($_POST['submit']) { 
include_once("connection.php");
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

$sql = "SELECT id, username, password FROM members WHERE username ='$username' AND activated ='1' LIMIT 1";
$query = mysqli_query($dbCon, $sql);

if ($query) {

	$row = mysqli_fetch_row($query);
	$userId = $row[0];
	$dbUsername = $row[1];
	$dbPassword = $row[2];
}

if ($username == $dbUsername && $password == $dbPassword) {

	$_SESSION['username'] = $username;
	$_SESSION['id'] = $userId;
	header('Location: user.php');
} else {

	echo "Incorrect user or password.";
}

}


?>



<!DOCTYPE html>


<html>

<head>
<style>

body { 

	text-align: center;
	padding-top: 3cm;
}

</style>
</head>

<body>
<h1> Login Here </h1>
<form method="post" action="index.php">
<input type="text" placeholder="Enter Username" name="username"/></br>
<input type="password" placeholder="password" name="password"/></br>
<input type="submit" name="submit" value="Log In"/>
</form>

<h1> New User Register Here </h1>
<form method="post" action="registered.php">
<input type="text" placeholder="Enter Username" name="newuser"/></br>
<input type="password" placeholder="password" name="newpass"/></br>
<input type="submit" name="submit" value="Create User"/>
</form>
</body>

</html>
