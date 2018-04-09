<?php include('process/session.php'); ?>
<?php include('layout/head1.php'); ?>

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
<div class="row" style="margin-top:5%;">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>UPLOAD WEBSTORE SLIDER <small></small></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">

<div class="container">
  <h2>Choose Images For Slider In WEBSTORE</labe></h2>

<form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="">   
<br>

<input type="file" name="slider_image" id="image_file" multiple >
<div class="file_uploading hidden">
    <label>&nbsp;</label>
    <img src="uploading.gif" alt="Uploading......"/>
</div>
</form>
<div id="uploaded_images_preview"></div>

</div>



<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:right;">

    <button class="btn btn-success" type="button" onclick="location.href='slider'">Done</button>

  </div>
</div>

</form>
</div>
</div>
</div>
</div>
<!-- /top tiles -->

<div class="row">
<div class="col-md-12">
<div class="x_panel">
<div class="x_title">
  <h2>Media Gallery <small> gallery design </small></h2>

  <div class="clearfix"></div>
</div>
<div class="x_content">

<div class="row">

<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT * FROM slider";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

<div class="col-md-55">
  <div class="thumbnail">
    <div class="image view view-first">
      <img style="width: 100%; display: block;" src="component/slider/<?php echo $row['slider_image']; ?>" alt="image" />
      <div class="mask">
        <p>Image Slider</p>
        <div class="tools tools-bottom">
          <!--<a href="#"><i class="fa fa-link"></i></a>
          <a href="#"><i class="fa fa-pencil"></i></a>-->
          <a href="process/deleteslider?slider_id=<?=$row['slider_id'];?>"><i class="fa fa-times"></i></a>
        </div>
      </div>
    </div>
    <div class="caption">
      <p style="text-align:center;"><?php echo $row['created_at']; ?></p>
    </div>
  </div>
</div>

<?php 
}
} else {
echo "0 results";
}
$dbcon->close();
?>

</div>

</div>
</div>
</div>
</div>

</div>
</div>
</div>
<!-- /page content -->
<?php include('layout/footer.php'); ?>


