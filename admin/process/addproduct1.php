<?php
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['save'])) 
{
move_uploaded_file($_FILES["product_image"]["tmp_name"],"../component/picture/product/" . $_FILES["product_image"]["name"]);			
$location=$_FILES["product_image"]["name"];
$product_name= $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_highlight = $_POST['product_highlight'];
$product_ingredient = $_POST['product_ingredient'];
$cat_id = $_POST['cat_id'];
$shipping_status = $_POST['shipping_status'];
$semenanjung = $_POST['semenanjung'];
$sabah_sarawak = $_POST['sabah_sarawak'];
$product_weight = $_POST['product_weight'];
$product_color = $_POST['product_color'];
$product_price = $_POST['product_price'];
$product_instock = $_POST['product_instock'];

for($i = 0; $i < count($_POST['product_weight']); $i++)
{
  $product_weight = $_POST['product_weight'][$i];
  $product_color = $_POST['product_color'][$i];
  $product_price = $_POST['product_price'][$i];
  $product_instock = $_POST['product_instock'][$i];

$sqli= "INSERT INTO product (product_image, product_name, product_description, product_highlight, product_ingredient, cat_id, shipping_status, semenanjung, sabah_sarawak, product_weight, product_color, product_price, product_instock, created_at) VALUES ('$location', '$product_name', '$product_description', '$product_highlight', '$product_ingredient', '$cat_id', '$shipping_status', '$semenanjung', '$sabah_sarawak', '$product_weight', '$product_color', '$product_price', '$product_instock', now())";

$dbcon=mysql_query($sqli);
echo $dbcon;
//echo "<script>alert('Successfully Added!!!'); window.location='../product.php'</script>";

/*if ($dbcon->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbcon->error;
}

$dbcon->close();*/
}
}

?>