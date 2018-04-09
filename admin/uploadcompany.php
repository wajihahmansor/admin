<?php
session_start();
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['save'])) 
{
move_uploaded_file($_FILES["company_image"]["tmp_name"],"images/company_logo/" . $_FILES["company_image"]["name"]);			
$location=$_FILES["company_image"]["name"];
$company_name= ucwords($_POST['company_name']);
$company_email = $_POST['company_email'];
$company_address = ucwords($_POST['company_address']);
$company_address1 = ucwords($_POST['company_address1']);
$company_city = ucwords($_POST['company_city']);
$company_poscode = $_POST['company_poscode'];
$company_state = ucwords($_POST['company_state']);
$company_phone = $_POST['company_phone'];
$company_fb = $_POST['company_fb'];
$company_ig = $_POST['company_ig'];
$employee = $_SESSION['employee_email'];

$sql= "INSERT INTO company (company_image, company_name, company_email, company_address, company_address1, company_city, company_poscode, company_state, company_phone, company_fb, company_ig, created_at, employee) VALUES ('$location', '$company_name', '$company_email', '$company_address', '$company_address1, '$company_city', '$company_poscode',  '$company_state', '$company_phone', '$company_fb', '$company_ig', now(), '$employee')";

$dbcon=mysql_query($sql);
//echo $dbcon;
echo "<script>alert('Successfully Added Data!!!'); window.location='company'</script>";

/*if (mysql_query($sql) === TRUE) 
	{
	//echo "New records created successfully";
	echo "<script>alert('Congratulation!'); window.location='company'</script>";
	} 
	else
	{
	echo "Error: " . $sql . "<br>" . mysql_error();
	}

	mysql_close();*/

}

?>