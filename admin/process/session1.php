<?php
session_start();
$dbcon = mysqli_connect("localhost","root","","mos");
	
$message="";

if(!empty($_POST["login"])) {
	$result = mysqli_query($dbcon,"SELECT * FROM users WHERE user_email='" . $_POST["user_email"] . "' and user_password = '". $_POST["user_password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_id"] = $row['user_id'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["user_id"] = "";
	session_destroy();
}
?>