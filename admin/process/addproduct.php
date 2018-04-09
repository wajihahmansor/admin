<?php
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['save_product'])) 
{
move_uploaded_file($_FILES["item_photo"]["tmp_name"],"../component/picture/product/" . $_FILES["item_photo"]["name"]);			
$item_photo=$_FILES["item_photo"]["name"];
$item_name= $_POST['item_name'];
$item_description = $_POST['item_description'];
//$item_ingredient = $_POST['item_ingredient'];
//$cat_id = $_POST['cat_id'];

/*for($i = 0; $i < count($_POST['item_price']); $i++)
{
    $item_price = $_POST['item_price'][$i];
    $item_size = $_POST['item_size'][$i];
    $item_color = $_POST['item_color'][$i];
    $item_instock = $_POST['item_instock'][$i];*/

$query = "INSERT INTO item (item_photo, item_name, item_description, created_at) VALUES ('$item_photo', '$item_name', '$item_description', now())";

$dbcon=mysql_query($query);
//echo $dbcon;
//echo "<script>alert('Successfully Added!!!'); window.location='../product.php'</script>";
// }

if (mysql_query($query) === TRUE) {
    echo $dbcon;
} else {
    echo "Error: " . $query. "<br>" . $dbcon->error;
}
}

?>