<?php include ('process/session.php');?>
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
  <h3>PRODUCT CATEGORY</h3><br>
</div>

<div class="title_right">
</div> 
</div>

<!-- top tiles -->
<div class="col-md-8 col-sm-8 col-xs-8" style="float:none;margin:0 auto;">
<div class="x_panel">
<div class="x_title">
<h2>CATEGORY<small>OF PRODUCT</small></h2>

<label class="nav navbar-right panel_toolbox" style="margin-top:1%;">
<a href="addcategory"><i class="fa fa-plus-circle"></i> Add New Category</a>     
</label>

<div class="clearfix"></div>
</div>
<div class="x_content">
<table id="datatable" class="table table-striped table-bordered" style="margin-top:3%;">
  <thead>
    <tr>
      <th style="width:2%;text-align:center;">No</th>
      <th style="width:25%;text-align:center;">Category</th>
      <th style="width:25%;text-align:center;">Sub Category</th>
      <th style="width:25%;text-align:center;">Created</th>
      <th style="width:30%;text-align:center;">Updated</th>
      <th style="width:7%;">Setting</th>
    </tr>
  </thead>

  <tbody>

<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT * FROM categories";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

?>
    <tr>
      <td><?=$bil++;?></td>
      <td><?=$row['cat_name'];?></td>
      <td><?=$row['cat_sub'];?></td>
      <td><?=$row['created_at'];?></td>
      <td><?=$row['updated_at'];?></td>
      <td align="center">
        <a href="updatecategory.php?cat_id=<?=$row["cat_id"];?>" title="click for edit"><i class="fa fa-edit" ></i></a>
        <a href="process/deletecategory.php?cat_id=<?=$row["cat_id"];?>" title="click for delete" onclick="return confirm('Are you sure to remove this item?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>

<?php 
}
} else {
echo "0 results";
}
$dbcon->close();
?>    

</tbody>
</table>
</div>
</div>
</div>
<!-- /top tiles -->
</div>
</div>
</div>
<!-- /page content -->

<?php include('layout/footer.php'); ?>