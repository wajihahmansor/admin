<?php 
error_reporting(0);
include ('process/session.php'); 

//finally, let's store our posted values in the session variables
$shipping_status = $_POST['shipping_status'];
$semenanjung = $_POST['semenanjung'];
$sabah_sarawak = $_POST['sabah_sarawak'];

//now, let's register our session variables
$_SESSION["shipping_status"] = $shipping_status;
$_SESSION["semenanjung"] = $semenanjung;
$_SESSION["sabah_sarawak"]= $sabah_sarawak;

?>

<?php
 $pdo = new PDO('mysql:host=localhost;dbname=mos', 'root', '');
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT cat_id, cat_name FROM categories ORDER BY cat_name ASC";
//Prepare the select statement.
$stmt = $pdo->prepare($sql);
//Execute the statement.
$stmt->execute();
//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();
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
<div class="page-title">
  <div class="title_left">
    <h3><a href="product">PRODUCT</a> <small>Add New Product</small></h3><br>
  </div>
</div>

<div class="clearfix"></div>

<form method="post" action="process/insertproduct.php" enctype="multipart/formdata">
<div class="row">
<div class="container">
<div class="row">
<div class="col-md-11" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"><a href="#"><i class="fa fa-cube"></i>General</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-video-camera"></i>Video</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-truck"></i>Shipping</a></li>
      <li role="presentation" class="active"><a href=""><i class="fa fa-adjust"></i>Variation</a></li>
      <li style="float:right;">
        <button type="submit" class="btn btn-success" name="save" style="border-radius:12px;padding:12px;width:80px;"><b>Save</b></button>
      </li>
  </ul>
<!-- Tab panes -->
<div class="tab-content">

<div data-parsley-validate class="form-horizontal form-label-left" style="margin-top:3%;">

<div class="form-group">
  <label class="control-label col-md-2 col-sm-2 col-xs-2">Variation <span class="required">*</span>
  </label>
  <div class="col-md-10 col-sm-10 col-xs-8">
    <label><input type="text" class="form-control" id="product_weight" name="product_weight[]" placeholder="Weight" size="20"></label>
    <label><input type="text" class="form-control" id="product_color" name="product_color[]" placeholder="Color" size="17"></label>
    <label><input type="text" class="form-control" id="product_price" name="product_price[]" placeholder="RM" size="3" style=""></label>
    <label><input type="text" class="form-control" id="product_instock" name="product_instock[]" placeholder="Stock" size="3" style=""></label>
    <label>
      <a href=""  onclick="education();return false;"> <span class="fa fa-plus-circle" aria-hidden="true" style="color:#000080;"></span> </a>
    </label><br>
    <label id="education"></label>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-2 col-sm-2 col-xs-2" for="last-name">Category <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-6">
    <select class="form-control" name="cat_id" required="">
      <?php foreach($users as $user): ?>
      <option value="<?= $user['cat_id']; ?>"><?= $user['cat_name']; ?></option>
      <?php endforeach; ?>
    </select><br>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-2 col-sm-2 col-xs-2" for="last-name">Type of Product <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-6">
    <select class="form-control" name="level" required>
        <option value="product">Product</option>
        <option value="new product">New Product</option>
        <option value="best seller">Best Seller</option>
        <option value="sale">Sale</option>
    </select><br>
  </div>
</div>

</div>
</div>
</div>
</div>
<!-- COLLAPSE INPUT ADD ITEM -->
<script type="text/javascript">
var room = 1;
function education() {
 
    room++;
    var objTo = document.getElementById('education')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="form-group"><div class="col-md-10 col-sm-10 col-xs-10" style="float: left;display: block;padding: 0 0px 0 0px;width:100%;margin-top:0%;"><label><input type="text" class="form-control" id="product_weight" name="product_weight[]" placeholder="Weight" style="width:2%;"></label>&nbsp<label><input type="text" class="form-control" id="product_color" name="product_color[]" placeholder="Color" size="17"></label>&nbsp<label><input type="text" class="form-control" id="product_price" name="product_price[]" placeholder="RM" size="8" style=""></label>&nbsp<label><input type="text" class="form-control" id="product_instock" name="product_instock[]" placeholder="Stock" size="8" style=""></label>&nbsp<label><a href=""  onclick="remove_education('+ room +');return false;"> <span class="fa fa-minus-circle" aria-hidden="true" style="color:red;"></span> </a></label><label id="education"></label></div></div>';
  
objTo.appendChild(divtest)
}
function remove_education(rid) {
 $('.removeclass'+rid).remove();
}
</script>
<!--./COLLAPSE INPUT ADD ITEM -->
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

<?php include('layout/footer.php'); ?>
