<?php
  ob_start();
  include("../user.php");
  if(isset($_GET['employee_id'])!="")
  {
  $delete=$_GET['employee_id'];
  $delete=mysql_query("DELETE FROM employees WHERE employee_id='$delete'");
  if($delete)
  {
      header("Location:../user.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>