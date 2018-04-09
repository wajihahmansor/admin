<?php
  ob_start();
  include("../index.php");
  if(isset($_GET['ord_id'])!="")
  {
  $delete=$_GET['ord_id'];
  $delete="DELETE FROM orders, order_history WHERE ord_id='$delete'";
  $result_set =mysql_query($delete);
  if($delete)
  {
      header("Location:../index");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>