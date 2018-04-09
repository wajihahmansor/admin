<?php
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['add'])) 
{
$cat_name = $_POST['cat_name'];

for($i = 0; $i < count($_POST['cat_sub']); $i++)
{
  $cat_sub = $_POST['cat_sub'][$i];

$sql = "INSERT INTO categories (cat_name, cat_sub, created_at) values ('$cat_name', '$cat_sub', now())";

$dbcon=mysql_query($sql);
//echo $dbcon;
echo "<script>alert('Successfully Added!!!'); window.location='../category.php'</script>";

}
}
?>