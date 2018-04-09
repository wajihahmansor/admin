<?php
session_start();
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['submit_promo'])) 
{
move_uploaded_file($_FILES["product_image"]["tmp_name"],"../images/" . $_FILES["product_image"]["name"]);			
$location=$_FILES["product_image"]["name"];
$product_name= $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_instock = $_POST['product_instock'];
$promo_start = $_POST['promo_start'];
$promo_end = $_POST['promo_end'];
$product_description = $_POST['product_description'];
$createdby = $_SESSION['employee_email'];

$sql= "INSERT INTO product (product_image, product_name, product_price, product_instock, promo_start, promo_end, product_description, created_at, createdby, level) VALUES ('$location', '$product_name', '$product_price', '$product_instock', '$promo_start', '$promo_end',  '$product_description', now(), '$createdby', 'promotion')";

$dbcon=mysql_query($sql);
//echo $dbcon;
echo "<script>alert('Successfully Added Promotion!!!'); window.location='../promotion'</script>";

/*if ($dbcon->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbcon->error;
}

$dbcon->close();*/

}

?>