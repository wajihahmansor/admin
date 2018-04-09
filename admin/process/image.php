<?php

require_once ('db.php');

if (isset($_POST['submit_product'])) 
{
// echo "";
// }else{
// $file=$_FILES['image']['tmp_name'];
// $image = $_FILES["image"] ["name"];
// $image_name= addslashes($_FILES['image']['name']);
// $size = $_FILES["image"] ["size"];
// $error = $_FILES["image"] ["error"];
// 
// if ($error > 0){
// die("Error uploading file! Code $error.");
// }else{
// 	if($size > 10000000) //conditions for the file
// 	{
// 	die("Format is not allowed or file size is too big!");
// 	}
// 	
// else
// 	{
move_uploaded_file($_FILES["item_image"]["tmp_name"],"uploads/" . $_FILES["item_image"]["name"]);			
$location=$_FILES["item_image"]["name"];
$item_name = $_POST['item_name'];
$item_size = $_POST['item_size'];
$item_color = $_POST['item_color'];
$item_price = $_POST['item_price'];
$item_quantity = $_POST['item_quantity'];
$item_description = $_POST['item_description'];
$item_ingredient = $_POST['item_ingredient'];
$item_category = $_POST['item_category'];

$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO items (item_image, item_name, item_size, item_color, item_price, item_quantity, item_description, item_ingredient, item_category, item_date)
VALUES ('$item_image', '$item_name', '$item_size', '$item_color', '$item_price', '$item_quantity', '$item_description', '$item_ingredient', '$item_category', CURDATE()))";

$dbcon->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='../product.php'</script>";
// }
}
// }
?>