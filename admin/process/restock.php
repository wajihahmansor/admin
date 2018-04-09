<?php
session_start();
$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"mos");

if(isset($_POST['new']) && $_POST['new']==1)
{
$add = $_POST['add'];
$updatedby = $_SESSION['employee_email'];

// sql query for update data into database
$sql_query = "UPDATE product SET product_instock =  product_instock + $add, updatedby='$updatedby' WHERE product_id=".$_GET['product_id'];
  
mysqli_query($dbcon, $sql_query);
echo "<script>window.location='../product.php'</script>";

}
?>