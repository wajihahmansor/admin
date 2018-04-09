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
    <h3>PROMOTION <small></small></h3><br>
  </div>

  <div class="title_right">
  </div>
</div>

<!-- top tiles -->
<div class="col-md-10 col-sm-10 col-xs-10" style="float:none;margin:0 auto;">
  <div class="x_panel">
    <div class="x_title">
      <h2>LIST OF PROMOTION</h2>

      <label class="nav navbar-right panel_toolbox" style="margin-top:1%;">
      <a href="addpromotion"><i class="fa fa-plus-circle"></i> <u>Add New Promotion</u></a>     
      </label>

      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable" class="table table-striped table-bordered" style="margin-top:3%;">
        <thead>
          <tr>
            <th style="width:2%;align:center;">No</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Details</th>
            <th style="width:7%;">Setting</th>
          </tr>
        </thead>

        <tbody>
<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT * FROM product WHERE level = 'promotion'";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>

<tr>
  <td><?=$bil++;?></td>
  <td><img src="images/<?php echo $row['product_image']; ?>" width="10%" class="img-rounded"> &nbsp <?=$row['product_name'];?></td>
  <td style="width:10%;"><?=$row['product_instock'];?></td>
  <td style="width:10%;">RM<?=$row['product_price'];?></td>
  <td align="center" style="width:10%;">
    <a href="viewpromotion?product_id=<?=$row["product_id"];?>">More Details</a>
  </td>
  <td align="center">
    <a href="updatepromotion?product_id=<?=$row["product_id"];?>" title="click for edit"><i class="fa fa-edit" ></i></a>
    <a href="process/deletepromotion?product_id=<?=$row["product_id"];?>" title="click for delete" onclick="return confirm('Are you sure to remove this promotion?')"><i class="fa fa-trash"></i></a>
  </td>          
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

<?php include('layout/footer.php'); ?>