<?php
  include ('process/session.php');
?>
<?php include('layout/head4.php'); ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include('layout/sidebar.php'); ?>

<!-- top navigation -->
<?php include('layout/topbar.php'); ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="page-title">
  <div class="title_left">
    <!--<h3>Users <small>Some examples to get you started</small></h3>-->
  </div>

<div class="title_right">
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
</div>
</div>
</div>
</br>

<div class="clearfix"></div>

<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
  <h2>Button Example <small>Users</small></h2>
  <div class="clearfix"></div>
</div>

<div class="x_content">

<table id="datatable-buttons" class="table table-striped table-bordered" method="get">
  <thead>
    <tr>
      <th style="width:2%;align:center;">No</th>
      <th>Customer Name</th>
      <th style="width:10%;">Phone Number</th>
      <th style="width:15%;">Email</th>
      <th>Date Joined</th>
      <th>Details</th>
      <th style="width:4%;">Action</th>
      <!--<th>Total Payment</th>-->
    </tr>
  </thead>

  <tbody>
<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT * FROM users";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

<tr>
  <td><?=$bil++;?></td>
  <td><?=$row['user_name'];?></td>
  <td><?=$row['user_phone'];?></td>
  <td><?=$row['user_email'];?></td>
  <td style="width:15%;"><?=$row['created_at'];?></td>
  <td align="center" style="width:10%;">
    <a href="viewcustomer.php?user_id=<?=$row["user_id"];?>">More Details</a>
  </td>
  <td align="center">
    <button onclick="location.href='updatecustomer.php?user_id=<?=$row["user_id"];?>'" class="btn btn-xs btn-primary">Update</button>
    <button onclick="location.href='process/deletecustomer.php?user_id=<?=$row["user_id"];?>'" class="btn btn-xs btn-danger">Delete</button>
  </td>
  <!--<td></td>-->
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

</div>
</div>
</div>
<!-- /page content -->

<?php include('layout/footer2.php'); ?>