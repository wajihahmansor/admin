<?php 
error_reporting(0);
include ('process/session.php'); 
$dbcon = mysql_connect('localhost', 'root', '');
mysql_select_db('mos', $dbcon);

if(isset($_POST['next']))
{
//error_reporting(0);

//finally, let's store our posted values in the session variables
move_uploaded_file($_FILES["product_image"]["tmp_name"],"component/picture/product/" . $_FILES["product_image"]["name"]);      
$product_image=$_FILES["product_image"]["name"];
//$product_image=$_POST["product_image"];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_highlight = $_POST['product_highlight'];
$product_ingredient =$_POST['product_ingredient'];

//now, let's register our session variables
$_SESSION["product_name"] = $product_name;
$_SESSION["product_image"] = $product_image;
$_SESSION["product_description"]= $product_description;
$_SESSION["product_highlight"] = $product_highlight;
$_SESSION["product_ingredient"] = $product_ingredient;

}
?>

<?php include('layout/head3.php'); ?>

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

<form method="post" action="additem2" enctype="multipart/formdata">   
<div class="row">
<div class="container">
<div class="row">
<div class="col-md-11" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"><a href="#"><i class="fa fa-cube"></i>General</a></li>
      <li role="presentation"  class="active"><a href=""><i class="fa fa-video-camera"></i>Video</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-truck"></i>Shipping</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-adjust"></i>Variation</a></li>
      <li style="float:right;">
      <button type="submit" class="btn btn-success" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Next</b></button>
      </li>
  </ul>
<!-- Tab panes -->
<div class="tab-content">

<div data-parsley-validate class="form-horizontal form-label-left" style="margin-top:3%;">

<div class="form-group">
  <label class="control-label col-md-2 col-sm-2 col-xs-2">Video <span class="required">*</span>
  </label>
  <div class="col-md-9 col-sm-9 col-xs-12">
    <textarea name ="product_video" class="form-control" id="textArea2" rows="3" placeholder="Textarea"></textarea>
      <script>
      //Load editor and replace it with textarea
      CKEDITOR.replace( 'textArea2' );
      </script>
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

<?php include('layout/footer1.php'); ?>
