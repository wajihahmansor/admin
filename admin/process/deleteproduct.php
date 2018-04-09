<?php
  ob_start();
  include("../product.php");
  if(isset($_GET['product_id'])!="")
  {
  $delete=$_GET['product_id'];
  $delete=mysql_query("DELETE FROM product WHERE product_id='$delete'");
  if($delete)
  {
      header("Location:../product.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>