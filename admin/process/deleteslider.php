<?php
  ob_start();
  include("../slider.php");
  if(isset($_GET['slider_id'])!="")
  {
  $delete=$_GET['slider_id'];
  $delete=mysql_query("DELETE FROM slider WHERE slider_id='$delete'");
  if($delete)
  {
      header("Location:../slider.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>