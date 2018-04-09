<?php
include('process/session.php');
/*session_start();
$dbcon = mysqli_connect("localhost","root","","mos");
	
$result = mysqlI_query($conn,"SELECT * FROM users WHERE user_id='" . $_SESSION["user_id"] . "'");
$row  = mysqli_fetch_array($result);*/
?>

<?php include('layout/head.php'); ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include('layout/sidebar.php'); ?>

<!-- top navigation -->
<?php include('layout/topbar.php'); ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

<div class="row tile_count">
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
  <div class="count">2500</div>
  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
  <div class="count">123.50</div>
  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
  <div class="count green">2,500</div>
  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
  <div class="count">4,567</div>
  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
  <div class="count">2,315</div>
  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
  <div class="count">7,325</div>
  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
</div>

<div class="">
<div class="clearfix"></div>
<div class="row">

<!-- START ORDER DATA -->
<div class="col-md-11 col-sm-11 col-xs-11" style="float:none;margin:0 auto;">
<div class="x_panel">
<div class="x_title" style="background-color: #6A5ACD;color:white;">
<h2><b>ORDER DETAILS<small style="color:white;">Customers</small></b></h2>
<ul class="nav navbar-right panel_toolbox">
  <li style="width:60%;"><a class="collapse-link"></a>
  </li>
  <li class="dropdown">
  </li>
  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
  </li>
</ul>
<div class="clearfix"></div>
</div>

<div class="x_content">
<table id="datatable-buttons" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th style="width:2%;">No</th>
      <th style="width:16%;">Customer Name</th>
      <th style="width:17%;">Address</th>
      <th style="width:10%;">Phone Number</th>
      <th style="width:7%;">Order Status</th>
      <th style="width:10%;">Date</th>
      <th style="width:3%;">Total Payment :</th>
      <th style="width:3%;">Details</th>
      <th style="width:2%;">Action</th>
      <th>Tracking Number :</th>
    </tr>
  </thead>

  <tbody>
<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT orders.ord_id, orders.order_name, orders.order_address, orders.order_poscode, orders.order_city, orders.order_state, orders.order_phone, orders.order_status, orders.order_total, orders.created_at, orders.tracking_no, shipping.shipping_id, payment.payment_id FROM ((orders INNER JOIN shipping ON orders.shipping_id = shipping.shipping_id) INNER JOIN payment ON orders.payment_id = payment.payment_id)";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

?>
    <tr>
      <td><?=$bil++;?></td>
      <td><?=$row['order_name'];?></td>
      <td><?=$row['order_address'];?>, <?=$row['order_poscode'];?>, <?=$row['order_city'];?>, <?=$row['order_state'];?></td>
      <td><?=$row['order_phone'];?></td>
      <td><?=$row['order_status'];?></td>
      <td><?=$row['created_at'];?></td>
      <td> RM<?=$row['order_total'];?></td>
      <td style="text-align:center;"><button onclick="location.href='vieworder?ord_id=<?=$row["ord_id"];?>'" class="btn btn-xs btn-primary">More Details</button></td>
      <td align="center">
        <button onclick="location.href='process/deleteorder?ord_id=<?=$row["ord_id"];?>'" class="btn btn-xs btn-danger">Delete</button>
      </td>
      <td>  &nbsp&nbsp&nbsp <?=$row['tracking_no'];?></td>
    </tr>

<?php 
}
} else {
echo "0 results";
}
$dbcon->close();
?>

  </tbody>
</table>
</div>

</div>
</div>
<!-- END ORDER DATA -->

</div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<!-- footer content -->
<footer>
<div class="pull-right">
MOS NUTRACEUTICAL - Copyright 2018
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
