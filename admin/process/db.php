<?php
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "mos";

// Create connection
$dbcon = mysqli_connect($servername, $usernameDB, $passwordDB, $dbname);
// Check connection
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}

?>