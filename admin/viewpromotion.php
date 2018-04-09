<?php include ('process/session.php'); ?>

<?php
include ('db.php');
if(isset($_GET['product_id']))
{
$query= "SELECT * FROM product WHERE product_id=".$_GET['product_id'];
$result =mysql_query($query);
$rows = mysql_fetch_array($result);
}
?>

<?php include('layout/head.php'); ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include('layout/sidebar.php'); ?>

<!-- top navigation -->
<?php include('layout/topbar.php'); ?>
<!-- /top navigation -->

<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>PROMOTION <small>Details</small></h3><br><br>
</div>

</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>PROMOTION DETAILS <small></small></h2>
<!--<ul class="nav navbar-right panel_toolbox">
  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
  </li>
</ul>-->
<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="get">

  <div class="form-group" align="center">
    <?php if($rows['product_image'] != ""): ?>
    <img src="images/<?php echo $rows['product_image']; ?>" width="20%" class="img-rounded">
    <?php else: ?>
    <img src="images/default.png" width="100px" height="100px" class="img-rounded">
    <?php endif; ?> <br><br>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Promotion ID
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      #<?php echo $rows['product_id']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Package
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rows['product_name']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Price
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      RM<?php echo $rows['product_price']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Instock
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rows['product_instock']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Duration
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rows['promo_start']; ?> - <?php echo $rows['promo_end']; ?>
    </div>
  </div><br><br>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rows['product_description']; ?>
    </div>
  </div><br><br>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Created
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rows['created_at']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Updated
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rows['updated_at']; ?>
    </div>
  </div>
  
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="" style="float:right;">
      <a href="promotion" type="submit" class="btn btn-success">Back <i class="fa fa-chevron-left"></i></a>
    </div>
  </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('layout/footer.php'); ?>
