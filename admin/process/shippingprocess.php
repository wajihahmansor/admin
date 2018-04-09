<?php
session_start();
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['shipping'])) 
{

$shipping_type = $_POST['shipping_type'];
$shipping_description = $_POST['shipping_description'];
$employee_email = $_SESSION['employee_email'];

$sqly = "INSERT INTO shipping (shipping_type, shipping_description, employee_email, created_at) values ('$shipping_type', '$shipping_description', '$employee_email', now())";

$dbcon=mysql_query($sqly);
//echo $dbcon;
echo "<script>alert('Successfully Added!!!'); window.location='../shipping'</script>";

}
?>