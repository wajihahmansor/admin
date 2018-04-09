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

<!-- Start Page -->
<div class="row">

<!-- Tab panes -->
<div class="col-md-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Shipping Form <small></small></h2>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form  data-parsley-validate class="form-horizontal form-label-left" method="post" action="process/shippingprocess.php">

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shipping Type <span class="required">* :</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
  <input type="text" id="shipping_type" name="shipping_type" required="required" class="form-control col-md-7 col-xs-12" style="text-transform:capitalize;">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Shipping Description <span class="required">* :</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
   <div data-toggle="buttons">
      <label class="btn btn-default" title=""><input type="radio" name="shipping_description" value="Weight not more than 500g">Weight not more than 500g</label>
      <label class="btn btn-default" title=""><input type="radio" name="shipping_description" value="Weight more than 500g">Weight more than 500g</label>
    </div>
</div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
  <button class="btn btn-primary" type="button">Cancel</button>
  <button class="btn btn-primary" type="reset">Reset</button>
  <button type="submit" class="btn btn-success" name="shipping">Submit</button>
</div>
</div>

</form>
</div>
</div>
</div>
</div>

<!--start right -->
<div class="col-md-12 col-sm-12 col-xs-12" style="float:none;margin:0 auto;">
<div class="x_panel">
  <div class="x_title">
    <h2>LIST OF SHIPPING</h2>
    <label class="nav navbar-right panel_toolbox" style="margin-top:1%;">  
    </label>

    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="width:1%;text-align:center;">No</th>
          <th style="width:;text-align:center;">Shipping Type</th>
          <th style="width:;text-align:center;">Description</th>
          <th style="text-align:center;">Action</th>
        </tr>
      </thead>

      <tbody>
<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT * FROM shipping";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
      <tr>
        <td><?=$bil++;?></td>
        <td style=""><?=$row['shipping_type'];?></td>
        <td style=""><?=$row['shipping_description'];?></td>
        <td style="width:9%;text-align:center;">
          <button class="btn btn-xs btn-danger" onclick="location.href='updateshipping?shipping_id=<?=$row['shipping_id'];?>'">Update</button>
          <a href="process/deleteshipping?shipping_id=<?=$row['shipping_id'];?>" onclick="return confirm('Are you sure to remove this item?')"><button class="btn btn-xs btn-primary">Delete</button></a>
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
<!--end right -->

</div>

<!-- top tiles -->
</div>
</div>
</div>
<!-- /page content -->

<?php include('layout/footer1.php'); ?>