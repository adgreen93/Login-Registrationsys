
<?php
	
error_reporting(E_ALL & ~E_NOTICE);
session_start();

$userId = $_SESSION['id'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>


<html>

<head>

</head>

<body>
<h1 style="text-align:center"> My Blog </h1>
<?php 

include_once("connection.php");

$sql2 = "SELECT * FROM blog ORDER BY id DESC";
$result = mysqli_query($dbCon,$sql2);


while ($row = mysqli_fetch_array($result)) {

	$title = $row['title'];
	$subtitle = $row['subtitle'];
	$content = $row['content'];

?> <h2><?php echo $title; ?> - <small><?php echo $subtitle; ?></small></h2>
	<p><?php echo $content; ?></p><p>Written by <?php echo $username; ?></p>
	<br>
		
<?php 

}
?>




<a href="admin.php">User Page</a>
</body>

</html>
