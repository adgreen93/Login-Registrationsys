
<?php 

error_reporting(E_ALL & ~E_NOTICE);


if ($_POST['submit']) { 
include_once("connection.php");

$newuser = strip_tags($_POST['newuser']);
$newpass = strip_tags($_POST['newpass']);


$userREQ ="INSERT INTO members(username, password, activated) VALUES ('$newuser', '$newpass', '1')";

$query2 = mysqli_query($dbCon, $userREQ);
}
?>




<!DOCTYPE html>


<html>

<head>

<h> Your account has been created! Login in here:</h></br>
<a href="./index.php">Click Me</a>

Welcome, <?php echo $newuser; ?>
</head>

<body>

</body>

</html>
