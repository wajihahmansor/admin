<?php
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('annona', $dbcon);

if (isset($_POST['Submit'])) 
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
move_uploaded_file($_FILES["image_location"]["tmp_name"],"../component/picture/" . $_FILES["image_location"]["name"]);			
$location=$_FILES["image_location"]["name"];
$item_name= $_POST['item_name'];


$sql = "INSERT INTO image (image_location, item_name) VALUES ('$location', '$item_name')";

$dbcon=mysql_query($sql);
echo $dbcon;
//echo "<script>alert('Successfully Added!!!'); window.location='../addimage.php'</script>";
// }
}
// }
?>