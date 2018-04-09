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
<form method="post" action="process/addcategory1.php">

<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="schoolname" name="schoolname" value="" placeholder="School name">
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="major" name="major[]" value="" placeholder="Major">
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="degree" name="degree[]" value="" placeholder="Degree">
  </div>
</div>

<div class="col-sm-3 nopadding">
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_field();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>

<div id="education_field"></div> 

<div align="center">
<button type="submit" name="add" id="add" class="btn btn-info">Save</button>
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
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Major" name="major[]" value="" placeholder="Major"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Degree" name="degree[]" value="" placeholder="Degree"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
    
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