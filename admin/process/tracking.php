<?php
session_start();
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if(isset($_POST['submit']))
{
$tracking_no = $_POST['tracking_no'];
$trackingby = $_SESSION['employee_email'];

// sql query for update data into database
$sqlies = "UPDATE orders SET tracking_no='$tracking_no', trackingby='$trackingby', tracking_date=now() WHERE ord_id=".$_GET['ord_id'];
  
$dbcon = mysql_query($sqlies);
//echo $dbcon;

if (mysql_query($sqlies) === TRUE) 
	{
	//echo "New records created successfully";
	echo "<script>alert('New product added successfully!!!'); window.location='../orderdetails.php'</script>";
	} 
	else
	{
	echo "Error: " . $sqlies . "<br>" . mysql_error();
	}

	mysql_close();

}
?>