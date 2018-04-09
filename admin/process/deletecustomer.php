<?php
  ob_start();
  include("../customer.php");
  if(isset($_GET['user_id'])!="")
  {
  $delete=$_GET['user_id'];
  $delete=mysql_query("DELETE FROM users WHERE user_id='$delete'");
  if($delete)
  {
      header("Location:../customer.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>