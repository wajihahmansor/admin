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
<!-- top tiles -->

<div class="page-title">
<div class="title_left">
<h3>PROMOTION <small>Add New Promotion</small></h3><br>
</div>
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-md-10 col-sm-10 col-xs-10" style="float:none;margin:0 auto;">
<div class="x_panel">
  <div class="x_title">
    <h2>ADD NEW PROMOTION</h2>
    <div class="clearfix"></div>
  </div>

<div class="x_content">
<br />
<form method="post" action="process/addpromotion.php"  enctype="multipart/form-data">
  
<div class="">
<table class="" style="margin-left:10%;width:80%;">
<tr style="height: 40px;">
<td  style="text-align:right;width:15%;"><label>Promotion Image <span class="required">*</span></label></td>
<td width="30"></td> 
<td>
  <span id="wrapper" style=""></span>
  <img id="image_location"/><br><br>
  <input type="file" accept="image/*" onchange="preview_image(event)" name="product_image"></td>
</tr>
<tr style="height: 60px;">
<td style="text-align:right;"><label>Package <span class="required">*</span></label></td>
<td width="30"></td>
<td><input type="text" id="product_name" name="product_name" required="required" class="form-control col-md-7 col-xs-12"></td>
</tr>
<tr style="height: 50px;">
<td style="text-align:right;vertical-align:top;"><label>Description <span class="required">*</span></label></td>
<td width="30"></td>
<td>
<textarea name ="product_description" class="form-control" id="textArea" rows="3" placeholder="Textarea"></textarea>
  <script>
  //Load editor and replace it with textarea
  CKEDITOR.replace( 'textArea' );
  </script>
</td>
</tr>
<tr style="height: 60px;">
<td style="text-align:right;"><label>Price <span class="required">*</span></label></td>
<td width="30"></td>
<td>
  <label><input type="text" class="form-control" id="product_price" name="product_price" placeholder="RM" size="25"></label>
  <label><input type="text" class="form-control" id="product_instock" name="product_instock" placeholder="Stock" size="25"></td></label>
</tr>
<tr style="height: 30px;">
<td style="text-align:right;"><label>Promotion Date <span class="required">*</span></label></td>
<td width="30"></td>
<td>
<label>
<div class='input-group date col-md-13 col-sm-13' id='datetimepicker6'>
<input type='text' class="form-control" name="promo_start"/>
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div></label>

<label>
<div class='input-group date date col-md-13 col-sm-13' id='datetimepicker7'>
  <input type='text' class="form-control" name="promo_end"/>
  <span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
  </span>
</div></label>
</td>
</tr>
</table>

<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
<button onclick="location.href='promotion'" class="btn btn-primary" type="button">Cancel</button>
<button class="btn btn-primary" type="reset">Reset</button>
<button type="submit" class="btn btn-success" name="submit_promo">Save</button>
</div>
</div>

</div>
</form>

</div>
</div>
</div>
</div>

<!-- /top tiles -->
</div>
</div>
</div>
<!-- /page content -->

<?php include('layout/footer.php'); ?>
