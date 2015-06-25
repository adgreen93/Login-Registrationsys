<?php

$dbCon = mysqli_connect("localhost","root","","logindb");
$dbConBars = mysqli_connect("localhost", "root", "", "barcalldb");

if (mysqli_connect_errno()) {

	echo "failed to connect:" . mysqli_connect_error();
}
?>
