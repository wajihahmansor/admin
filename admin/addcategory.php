<?php include ('process/session.php'); ?>
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
<form method="post" action="process/addcategory.php" class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="cat_name" name="cat_name" required="required" placeholder="" class="form-control col-md-5 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub Category<span class="required">*</span>
  </label>
  <div class="col-md-5 col-sm-5 col-xs-10">
    <input type="text" id="cat_sub" name="cat_sub[]" placeholder="" class="form-control col-md-5 col-xs-12">
  </div>
  <div class="" style="padding-top:1%;">
    <a href="" onclick="education_field();return false;"> <span class="glyphicon glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a>
  </div>
</div>

<!--<div class="form-group">
  <div class="input-group">
    <div class="input-group-btn">
      <button class="btn btn-success" type="button"  onclick="education_field();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
    </div>
  </div>
</div>-->

<div class="clear"></div>

<div id="education_field"></div> 

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button onclick="location.href='category'" class="btn btn-primary" type="button">Cancel</button>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success" name="add">Save</button>
  </div>
</div>
</div>
<form>

<script type="text/javascript">
var room = 1;
function education_field() {
 
    room++;
    var objTo = document.getElementById('education_field')
    var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span></label><div class="col-md-5 col-sm-5 col-xs-10"><input type="text" id="cat_sub" name="cat_sub[]" placeholder="" class="form-control col-md-5 col-xs-12"></div><div class="" style="padding-top:1%;"><a href="" onclick="remove_education_field('+ room +');return false;"> <span class="glyphicon glyphicon glyphicon-minus-sign" aria-hidden="true"></span> </a></div></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_field(rid) {
     $('.removeclass'+rid).remove();
   }
</script>

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