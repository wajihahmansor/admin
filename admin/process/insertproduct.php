<?php
error_reporting(0);
session_start();
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if(isset($_POST['save']))
{			
$product_image=$_FILES["product_image"]["name"];
$product_image=$_SESSION["product_image"];
$product_name= ucwords($_SESSION['product_name']);
$product_description = $_SESSION['product_description'];
$product_highlight = $_SESSION['product_highlight'];
$product_ingredient = $_SESSION['product_ingredient'];
$shipping_status = $_SESSION['shipping_status'];
$semenanjung = $_SESSION['semenanjung'];
$sabah_sarawak = $_SESSION['sabah_sarawak'];
$product_video = $_SESSION['product_video'];
$createdby = $_SESSION['employee_email'];
$cat_id = $_POST['cat_id'];
$level = $_POST['level'];

for($i = 0; $i < count($_POST['product_weight']); $i++)
{
  $product_weight = $_POST['product_weight'][$i];
  $product_color = $_POST['product_color'][$i];
  $product_price = $_POST['product_price'][$i];
  $product_instock = $_POST['product_instock'][$i];

$test= "INSERT INTO product (product_image, product_name, product_description, product_highlight, product_ingredient, cat_id, shipping_status, semenanjung, sabah_sarawak, product_weight, product_color, product_price, product_instock, product_video, createdby, created_at, level) VALUES ('$product_image', '$product_name', '$product_description', '$product_highlight', '$product_ingredient', '$cat_id', '$shipping_status', '$semenanjung', '$sabah_sarawak', '$product_weight', '$product_color', '$product_price', '$product_instock', '$product_video', '$createdby', now(), '$level')";
//let's run the query
$dbcon = mysql_query($test);
//echo $dbcon;
echo "<script>alert('New product added successfully!!!'); window.location='../product'</script>";

/*if (mysql_query($test) === TRUE) 
	{
	//echo "New records created successfully";
	echo "<script>alert('New product added successfully!!!'); window.location='../product.php'</script>";
	} 
	else
	{
	echo "Error: " . $test . "<br>" . mysql_error();
	}

	mysql_close();*/

}
}
?>