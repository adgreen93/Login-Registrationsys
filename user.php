
<?php


error_reporting(E_ALL & ~E_NOTICE);
session_start();


if (isset($_SESSION['id'])) {

	$userId = $_SESSION['id'];
	$username = $_SESSION['username'];
} else {
	header('Location: index.php');
	die();
}
?>




<!DOCTYPE html>


<html>

<head>


</head>

<body>
Welcome, <?php echo $username; ?>, You are logged in. Your user id is <?php echo $userId; ?>.


<form action="logout.php">
<input type="submit" value="Log me out!">
</form>

</body>

</html>
