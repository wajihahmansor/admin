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
<h3>Form Elements</h3>
</div>
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Form Design <small>different form elements</small></h2>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form method="post" action="process/addimage.php" enctype="multipart/form-data">

<div class="">
<table class="" style="margin-left:18%;">
<tr style="height: 40px;">
	<td  style="text-align:right;"><label>Select your Image</label></td>
	<td width="30"></td>
	<td><input type="file" name="image_location"></td>
</tr>
<tr style="height: 40px;">
	<td style="text-align:right;"><label>Product</label></td>
	<td width="30"></td>
	<td><input type="text" id="item_name" name="item_name" required="required" class="form-control col-md-7 col-xs-12"></td>
</tr>
</table>

<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Upload</button>
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
