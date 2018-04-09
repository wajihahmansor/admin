<?php
  ob_start();
  include("../category.php");
  if(isset($_GET['cat_id'])!="")
  {
  $delete=$_GET['cat_id'];
  $delete=mysql_query("DELETE FROM categories WHERE cat_id='$delete'");
  if($delete)
  {
      header("Location:../category.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>