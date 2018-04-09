<?php
/*$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"mos");*/

$dbcon = mysqli_connect("localhost","root","","mos");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>