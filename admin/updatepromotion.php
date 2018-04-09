<?php include ('process/session.php'); ?>
<?php
include ('db.php');
if(isset($_GET['product_id']))
{
$sql_query= "SELECT * FROM product WHERE product_id=".$_GET['product_id'];
$result_set =mysql_query($sql_query);
$fetched_row = mysql_fetch_array($result_set);
}
if(isset($_POST['update_promotion']))
{

move_uploaded_file($_FILES["product_image"]["tmp_name"],"images/" . $_FILES["product_image"]["name"]);      
$location=$_FILES["product_image"]["name"];
$product_name= $_POST['product_name'];
$product_instock = $_POST['product_instock'];
$product_price = $_POST['product_price'];
$promo_start = $_POST['promo_start'];
$promo_end = $_POST['promo_end'];
$product_description = $_POST['product_description'];
$updatedby = $_SESSION['employee_email'];

// sql query for update data into database
$sql_query = "UPDATE product SET product_image='$location', updated_at=now(), product_name='$product_name', product_price='$product_price', product_instock='$product_instock', promo_start='$promo_start', promo_end='$promo_end', product_description='$product_description', updatedby='$updatedby' WHERE product_id=".$_GET['product_id'];
$dbcon=mysql_query($sql_query);
//echo $dbcon;
echo "<script>alert('Successfully Updated!!!'); window.location='promotion.php'</script>";
/*if ($dbcon->query($sql_query) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql_query . "<br>" . $dbcon->error;
}

$dbcon->close();*/
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
<h3>PROMOTION <small>Update Promotion</small></h3>
</div>

</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
  <h2>UPDATE THE PROMOTION <small></small></h2>
  <!--<ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>
  </ul>-->
  <div class="clearfix"></div>
</div>

<div class="x_content">
<br />
<form method="post" action=""  enctype="multipart/form-data">

<div class="">
<table class="" style="margin-left:15%;width:62%;">
<tr style="height: 40px;">
<td  style="text-align:right;"><label>Product Image <span>*</span></label></td>
<td width="30"></td> 
<td>
<img src="images/<?php echo $fetched_row['product_image']; ?>" width="20%" class="img-rounded">
<span id="wrapper" style=""></span>
<img id="image_location"/><br><br>
<input type="file" accept="image/*" onchange="preview_image(event)" name="product_image" class="img-rounded" required></td>
</td>
</tr>
<tr style="height: 40px;">
<td style="text-align:right;"><label>Package <span class="required">*</span></label></td>
<td width="30"></td>
<td><input type="text" name="product_name" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['product_name']; ?>" required></td>
</tr>
<tr style="height: 40px;">
<td style="text-align:right;"><label>Price <span class="required">*</span></label></td>
<td width="30"></td>
<td>
<div class="col-md-13 col-sm-13 col-xs-13 form-group has-feedback">
  <input type="text" class="form-control has-feedback-left" id="product_price" name="product_price" placeholder="0000.00" value=" <?php echo $fetched_row['product_price']; ?>">
  <span class="form-control-feedback left" aria-hidden="true">RM</span>
</div>
</td>
</tr>
<tr style="height: 40px;">
<td style="text-align:right;"><label>Instock <span class="required">*</span></label></td>
<td width="30"></td>
<td><input type="text" name="product_instock" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['product_instock']; ?>" required></td>
</tr>
<tr style="height: 40px;">
<td style="text-align:right;vertical-align:top;"><label>Description <span class="required">*</span></label></td>
<td width="30"></td>
<td>
<textarea name ="product_description" class="form-control" id="textArea" rows="3" placeholder="Textarea">
  <?php echo $fetched_row['product_description']; ?>
</textarea>
<script>
//Load editor and replace it with textarea
CKEDITOR.replace( 'textArea' );
</script><br>
</td>
</tr>
<tr style="height: 50px;">
<td style="text-align:right;"><label>Promotion Date <span class="required">*</span></label></td>
<td width="30"></td>
<td>
    <label>
    <div class='input-group date col-md-15 col-sm-15' id='datetimepicker6'>
    <input type='text' class="form-control" name="promo_start" value="<?php echo $fetched_row['promo_start']; ?>" required/>
    <span class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
    </div></label>

    <label>
    <div class='input-group date date col-md-15 col-sm-15' id='datetimepicker7'>
      <input type='text' class="form-control" name="promo_end" value="<?php echo $fetched_row['promo_end']; ?>" required/>
      <span class="input-group-addon">
      <span class="glyphicon glyphicon-calendar"></span>
      </span>
    </div></label>
  </td>
</tr>
<tr style="height: 50px;">
<td style="text-align:right;"><label>Promotion Created <span class="required">*</span></label></td>
<td width="30"></td>
<td style="color:black;font-weight:bold;">
<?php echo $fetched_row['created_at']; ?>
</td>
</tr>
</table>

<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
<button onclick="location.href='promotion'" class="btn btn-primary" type="button">Cancel</button>
<button class="btn btn-primary" type="reset">Reset</button>
<button type="submit" class="btn btn-success" name="update_promotion">Submit</button>
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

<?php include('layout/footer.php'); ?>
