<?php 
error_reporting(0);
include ('process/session.php'); 

//finally, let's store our posted values in the session variables
$product_video = $_POST['product_video'];

//now, let's register our session variables
$_SESSION["product_video"] = $product_video;

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



<form method="post" action="additem3" enctype="multipart/formdata"> 
<div class="row">
<div class="container">

<div class="row">
<div class="col-md-11" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"><a href="#"><i class="fa fa-cube"></i>General</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-video-camera"></i>Video</a></li>
      <li role="presentation" class="active"><a href=""><i class="fa fa-truck"></i>Shipping</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-adjust"></i>Variation</a></li>
      <li style="float:right;">
      <button type="submit" class="btn btn-success" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Next</b></button>
      </li>
  </ul>
<!-- Tab panes -->
<div class="tab-content">
<div data-parsley-validate class="form-horizontal form-label-left" style="padding-left:5%;margin-top:3%;width:100%;">

      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-2" for="first-name">Free Shipping <span class="required">*</span>
        </label>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <select class="form-control" name="shipping_status" style="margin-left:3%;width:124%;margin-bottom:3%;">
            <option value="YES">Yes</option>
            <option value="NO">No</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-2" for="last-name">Semenanjung <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="semenanjung" name="semenanjung" placeholder="0000.00">
            <span class=" form-control-feedback left" aria-hidden="true">RM</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-2" for="last-name">Sabah / Sarawak <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="sabah_sarawak" name="sabah_sarawak" placeholder="0000.00">
            <span class=" form-control-feedback left" aria-hidden="true">RM</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
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
