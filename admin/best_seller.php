<?php include ('process/session.php');?>

<?php include('layout/head1.php'); ?>

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
    <h3>PRODUCT <small>Product Details</small></h3><br>
  </div>

  <div class="title_right">
  </div>
</div>

<!-- top tiles -->
<div class="col-md-12 col-sm-12 col-xs-12" style="float:none;margin:0 auto;">
<div class="x_panel">
  <div class="x_title">
    <h2>LIST OF BEST SELLER</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li style="width:60%;"><a class="collapse-link"></a>
            </li>
            <li class="dropdown">
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
    <label class="nav navbar-right panel_toolbox" style="margin-top:1%;">
    <a href="additem"><i class="fa fa-plus-circle"></i> Add Product</a>     
    </label>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    
    <table id="datatable-buttons" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="width:1%;text-align:center;">No</th>
          <th style="width:15%;text-align:center;">Product</th>
          <th style="width:2%;text-align:center;">Price</th>
          <th style="width:1%;text-align:center;">Instock</th>
          <th style="width:8%;text-align:center;">Date</th>
          <th style="width:8%;text-align:center;">Details</th>
          <th style="width:2%;text-align:center;">Restock</th>
          <th style="width:5%;text-align:center;">Action</th>
        </tr>
      </thead>

      <tbody>
<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT * FROM product WHERE level = 'best seller'";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
      <tr>
        <td><?=$bil++;?></td>
        <td><img src="images/<?php echo $row['product_image']; ?>" width="10%" class="img-rounded"> &nbsp <?=$row['product_name'];?></td>
        <td>RM<?=$row['product_price'];?></td>
        <td><?=$row['product_instock'];?></td>
        <td style="text-align:center;"><?=$row['created_at'];?></td>
        <td align="center" style="width:10%;">
          <a href="viewproduct?product_id=<?=$row["product_id"];?>">More Details</a>
        </td>
        <td style="text-align:center;">
          <form method="post" action="process/restock?product_id=<?=$row["product_id"];?>">
            <input type="hidden" name="new" value="1" />
            <input class="form-control" name="add" size="1">
            <button title="click for edit" name="restock" class="btn btn-success btn-xs" style="">+</button>
          </form>
        </td>
        <td align="center" style="width:8%;">
            <button class="btn btn-xs btn-primary" onclick="location.href='updateproduct1?product_id=<?=$row["product_id"];?>'">Update</button>
            <button class="btn btn-xs btn-danger" onclick="location.href='process/deleteproduct?product_id=<?=$row["product_id"];?>'">Delete</button>
        </td>
      </tr>
<?php 
   }
} else {
    echo "";
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

<?php include('layout/footer1.php'); ?>