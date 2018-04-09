<?php
  include ('process/session.php');
?>
<?php
include ('db.php');
if(isset($_GET['product_id']))
{
  $sql_query= "SELECT product.product_id, product.product_name, product.product_price, product.product_image, product.product_description, product.product_highlight, product.product_ingredient, product.product_weight, product.product_color, product.product_instock, product.semenanjung, product.sabah_sarawak, product.shipping_status, product.created_at, product.updated_at, product.product_video, product.createdby, product.updatedby, categories.cat_id, categories.cat_name FROM product INNER JOIN categories ON product.cat_id=categories.cat_id WHERE product_id=".$_GET['product_id'];
  $result_set =mysql_query($sql_query);
  $rowed = mysql_fetch_array($result_set);
  //$rowed = mysql_query($sql_query) or die($sql_query."<br/><br/>".mysql_error());
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
    <h3>PRODUCT <small>Details</small></h3>
  </div>

</div>
<div class="clearfix"></div>
<br/>

<div class="row">
<div class="col-md-offset- col-md-10" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>General</a></li>
        <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-tint"></i>Ingredients</a></li>
        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-video-camera"></i>Video</a></li>
        <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-truck"></i>Shipping</a></li>
        <li role="presentation"><a href="#Section4" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-adjust"></i>Variation</a></li>
        <li style="float:right;">
        <button type="submit" onclick="location.href='product'" class="btn btn-success" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Back</b></button>
      </li>
    </ul>


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="get" action="">
<!-- Tab panes -->
<div class="tab-content">

<!-- Section 1-->
<div role="tabpanel" class="tab-pane fade in active" id="Section1">
<div class="form-group" align="center">
  <?php if($rowed['product_image'] != ""): ?>
  <img src="images/<?php echo $rowed['product_image']; ?>" width="20%" class="img-rounded">
  <?php else: ?>
  <img src="images/default.png" width="100px" height="100px" class="img-rounded">
  <?php endif; ?> <br><br>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product ID :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    #<?php echo $rowed['product_id']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Name :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_name'];?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Highlight:
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_highlight'];?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_description']; ?>
  </div>
</div>

</div>
<!--./Section 1 -->

<!--./Section 2 -->
<div role="tabpanel" class="tab-pane fade" id="Section2">
  <div class="x_title">
  <h2>Video </h2>
  <div class="clearfix"></div>
  </div><br><br>
  <center>
  <div class="video-container">
    <iframe width="753" height="380" src="<?php echo $rowed['product_video']; ?>" frameborder="0" allowfullscreen></iframe>
  </div>
  </center>
</div>
<!--./Section 2 -->

<!--./Section 3 -->
<div role="tabpanel" class="tab-pane fade" id="Section3">
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Free Shipping :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['shipping_status']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Semenanjung :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['semenanjung'];?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sabah / Sarawak :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['sabah_sarawak']; ?>
  </div>
</div>
</div>
<!--./Section 3 -->

<!--./Section 4 -->
<div role="tabpanel" class="tab-pane fade" id="Section4">
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category : 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['cat_name']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Weight : 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_weight']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Color : 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_color']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Price : 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_price']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Instock : 
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['product_instock']; ?>
  </div>
</div>
</div>
<!--./Section 4 -->

<!--./Section 5 -->
<div role="tabpanel" class="tab-pane fade" id="Section5">
<div class="form-group">
  
  <span><?php echo $rowed['product_ingredient'];?></span>
</div>
</div>
<!--./Section 5 -->

</div>
</form>
</div>
</div>
</div>
<!-- ./ row -->

</div>
</div>
</div>
</div>
<?php include('layout/footer.php'); ?>
