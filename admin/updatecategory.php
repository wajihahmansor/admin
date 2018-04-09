<?php include ('process/session.php'); ?>
<?php
include ('db.php');
if(isset($_GET['cat_id']))
{
  $sql_query= "SELECT * FROM categories WHERE cat_id=".$_GET['cat_id'];
  $result_set =mysql_query($sql_query);
  $fetched = mysql_fetch_array($result_set);
}
if(isset($_POST['update_category']))
{

$cat_name = $_POST['cat_name'];
$cat_sub = $_POST['cat_sub'];

$sql_query = "UPDATE categories SET cat_name='$cat_name', cat_sub='$cat_sub', updated_at=now() WHERE cat_id=".$_GET['cat_id'];
$dbcon=mysql_query($sql_query);
//echo $dbcon;
echo "<script>alert('Successfully Updated!!!'); window.location='category.php'</script>";
/*if ($dbcon->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbcon->error;
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

<!-- page content -->
<div class="right_col" role="main">
<div class="page-title">
<div class="title_left">
  <h3>ADD PRODUCT CATEGORY</h3><br>
</div>
<div class="title_right"></div>
</div>

<!-- top tiles -->
<div class="col-md-8 col-sm-8 col-xs-8" style="float:none;margin:0 auto;">
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h3>ADD CATEGORY<small> Of Product</small></h3>
    <div class="clearfix"></div>
  </div>

<div class="x_content">
<br />
<form method="post" action=""  enctype="multipart/form-data">
      
<div class="">
<table class="" style="margin-left:15%;width:62%;">
  <tr style="height: 60px;">
    <td style="text-align:right;"><label>Category <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="cat_name" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched['cat_name']; ?>"></td>
  </tr>
  <tr style="height: 60px;">
    <td style="text-align:right;"><label>Sub Category <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="cat_sub" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched['cat_sub']; ?>"></td>
  </tr>
</table>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="" align="center">
    <button onclick="location.href='category'" class="btn btn-primary" type="button">Cancel</button>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success" name="update_category">Submit</button>
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