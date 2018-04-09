<?php
session_start();
include("db.php");

if(isset($_POST['login']))
{
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
	

    $check_login="select * from admin WHERE admin_email='$admin_email' AND admin_password='$admin_password'";

 
    $run=mysqli_query($dbcon,$check_login);

    if(mysqli_num_rows($run))
    {

    echo "<script>alert('You're successfully login!')</script>";       
    echo "<script>window.open('../admin/index','_self')</script>";
       
    $_SESSION['admin_email']=$admin_email;
    $_SESSION['admin_name']=$admin_name;

    }
    else
    {
    echo "<script>alert('Username or password is incorrect!')</script>";
	echo "<script>window.open('../index','_self')</script>";	
	exit();
		
    }
}
?>