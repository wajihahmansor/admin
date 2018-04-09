<?php include ('process/session.php'); ?>
<?php
 $pdo = new PDO('mysql:host=localhost;dbname=mos', 'root', '');
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT cat_id, cat_name FROM category ORDER BY cat_name ASC";
//Prepare the select statement.
$stmt = $pdo->prepare($sql);
//Execute the statement.
$stmt->execute();
//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();
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
    <h3>PRODUCT <small>Update Product</small></h3>
  </div>
</div>

<div class="clearfix"></div>
      
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
        <h2>VARIATION</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li style="width:60%;"><a class="collapse-link"></a>
          </li>
          <li class="dropdown">
          </li>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
  <div class="x_content">
    <br />

<form method="post" action="process/addvariation.php"  enctype="multipart/form-data">
<div data-parsley-validate class="form-horizontal form-label-left">

      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-2">Variation <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <label><input type="text" class="form-control" id="product_weight" name="product_weight[]" placeholder="Weight" size="20"></label>
          <label><input type="text" class="form-control" id="product_color" name="product_color[]" placeholder="Color" size="17"></label>
          <label><input type="text" class="form-control" id="produc_price" name="product_price[]" placeholder="RM" size="3" style=""></label>
          <label><input type="text" class="form-control" id="product_instock" name="product_instock[]" placeholder="Stock" size="3" style=""></label>
          <label>
            <a href=""  onclick="education();return false;"> <span class="fa fa-plus-circle" aria-hidden="true" style="color:#000080;"></span> </a>
          </label><br><br>
          <label id="education"></label>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-2" for="last-name">Category <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <select class="form-control" name="cat_id" required="">
            <?php foreach($users as $user): ?>
            <option value="<?= $user['cat_id']; ?>"><?= $user['cat_name']; ?></option>
            <?php endforeach; ?>
          </select><br>
        </div>
      </div>

      <div align="center">
<button type="submit" name="add" id="add" class="btn btn-info">Save</button>
</div>

    </div>
  </div>
</div>
</div>
<!-- COLLAPSE INPUT ADD ITEM -->
<script type="text/javascript">
var room = 1;
function education() {
 
    room++;
    var objTo = document.getElementById('education')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="form-group"><div class="col-md-9 col-sm-9 col-xs-10" style="float: left;display: block;padding: 0 0px 0 0px;width:100%;margin-top:0%;"><label><input type="text" class="form-control" id="product_weight" name="product_weight[]" placeholder="Weight" size="20"></label>&nbsp<label><input type="text" class="form-control" id="product_color" name="product_color[]" placeholder="Color" size="17"></label>&nbsp<label><input type="text" class="form-control" id="product_price" name="product_price[]" placeholder="RM" size="3" style=""></label>&nbsp<label><input type="text" class="form-control" id="product_instock" name="product_instock[]" placeholder="Stock" size="3" style=""></label>&nbsp<label><a href=""  onclick="remove_education('+ room +');return false;"> <span class="fa fa-minus-circle" aria-hidden="true" style="color:red;"></span> </a></label><label id="education"></label></div></div>';
  
objTo.appendChild(divtest)
}
function remove_education(rid) {
 $('.removeclass'+rid).remove();
}
</script>
<!--./COLLAPSE INPUT ADD ITEM -->
</div>
</form>

</div>
</div>

<?php include('layout/footer.php'); ?>
