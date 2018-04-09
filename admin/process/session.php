<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("mos", $connection);
session_start();

// Storing Session
$employee_email=$_SESSION['employee_email'];

$sql=mysql_query("SELECT employees.employee_id, employees.employee_email, employees.employee_image, employees.employee_name, employees.employee_address, employees.employee_city, employees.employee_poscode, employees.employee_state, employees.employee_phone, role.role_id, role.role_position FROM employees INNER JOIN role ON employees.role_id=role.role_id WHERE employee_email='$employee_email'", $connection);
$row=mysql_fetch_assoc($sql);

$employee_id = $row['employee_id'];
$employee_email = $row['employee_email'];
$employee_image = $row['employee_image'];
$employee_name = $row['employee_name'];
$employee_address = $row['employee_address'];
$employee_city = $row['employee_city'];
$employee_poscode = $row['employee_poscode'];
$employee_state = $row['employee_state'];
$role_position = $row['role_position'];
$role_id=$row['role_id'];

if(!isset($employee_email)){
mysql_close($connection); // Closing Connection
header('Location: ../../index.php'); // Redirecting To Home Page
}
?>