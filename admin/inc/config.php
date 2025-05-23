<?php
$con = mysqli_connect("localhost","adminCMS","FaEWDYZrbeHXFeyi","admincms");

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}else{
	//die('ok');
}
?>
