
<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
session_start();


if (isset($_SESSION['id'])) {

	$userId = $_SESSION['id'];
	$username = $_SESSION['username'];
} else {
	header('Location: login.php');
	die();
}

if (isset($_POST['submit'])) {
$title = strip_tags($_POST['title']);
$subtitle = strip_tags($_POST['subtitle']);
$content = strip_tags($_POST['content']);

$dbCon2 = mysqli_connect("localhost","root","","logindb") or die ("could not connect to mysql");
$userREQ3 = " INSERT INTO `logindb`.`blog` (`title`, `subtitle`, `content`) VALUES ('$title', '$subtitle', '$content')";
mysqli_query($dbCon2, $userREQ3);
header('Location: index.php');
}


?>

<!DOCTYPE html>


<html>

<head>

</head>

<body>
Welcome, <?php echo $username; ?>, You are logged in. Your user id is <?php echo $userId; ?>.

<a href="index.php">Index</a>
<form action="logout.php">
<input type="submit" value="Log me out!">
</form>

<form method="post" action="admin.php">
Title: <input type="text" name="title"/><br>
Subtitle: <input type="text" name="subtitle"/><br>
<br>
<br>
Content: <textarea name="content"></textarea>
<input type="submit" name="submit" value="Write Post"/>
</form>

</body>

</html>
