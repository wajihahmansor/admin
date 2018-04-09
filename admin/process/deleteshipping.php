<?php
  ob_start();
  include("../shipping.php");
  if(isset($_GET['shipping_id'])!="")
  {
  $delete=$_GET['shipping_id'];
  $delete=mysql_query("DELETE FROM shipping WHERE shipping_id='$delete'");
  if($delete)
  {
      header("Location:../shipping");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>