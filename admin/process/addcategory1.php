<?php
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if (isset($_POST['add'])) 
{
$cat_name = $_POST['cat_name'];

for($i = 0; $i < count($_POST['cat_sub']); $i++)
{
  $cat_sub = $_POST['cat_sub'][$i];
  //$degree = $_POST['degree'][$i];

$sql = "INSERT INTO category (cat_name, cat_sub) values ('$cat_name', '$cat_sub')";

$dbcon=mysql_query($sql);
echo $dbcon;
//echo "<script>alert('Successfully Added!!!'); window.location='../addcategory1.php'</script>";

}
}
?>