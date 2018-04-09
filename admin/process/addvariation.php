<?php
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['add'])) 
{
$cat_id = $_POST['cat_id'];

for($i = 0; $i < count($_POST['product_weight']); $i++)
{
  $product_weight = $_POST['product_weight'][$i];
  $product_color = $_POST['product_color'][$i];
  $product_price = $_POST['product_price'][$i];
  $product_instock = $_POST['product_instock'][$i];

$db= "INSERT INTO product (cat_id, product_weight, product_color, product_price, product_instock, created_at) VALUES ('$cat_id', '$product_weight', '$product_color', '$product_price', '$product_instock', now())";

$dbcon=mysql_query($db);
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