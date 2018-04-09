<?php
  include ('process/session.php');
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
  <div class="page-title">
  <div class="title_left">
  </div>
</br>

  <div class="title_right">
  </div>
</div>
</br>

<!-- top tiles -->
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
  <h2>ORDER DETAILS <small>Users</small></h2>
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
  <!-- /top tiles -->
</div>
</div>
</div>
<!-- /page content -->

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
