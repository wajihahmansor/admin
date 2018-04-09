<?php
$pdo = new PDO('mysql:host=localhost;dbname=mos', 'root', '');
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT cat_id, cat_name FROM categories ORDER BY cat_name ASC";
//Prepare the select statement.
$stmt = $pdo->prepare($sql);
//Execute the statement.
$stmt->execute();
//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();
?>

<?php
require('db.php');
include ('process/session.php');

if(isset($_GET['product_id']))
{
  $sql_query= "SELECT product.product_image, product.product_id, product.product_name, product.product_price, product.product_image, product.product_description, product.product_ingredient, product.product_weight, product.product_color, product.product_instock, product.created_at, product.updated_at, product.product_video, product.shipping_status, product.semenanjung, product.sabah_sarawak, categories.cat_id, categories.cat_name FROM product INNER JOIN categories ON product.cat_id=categories.cat_id WHERE product_id=".$_GET['product_id'];  
  $result = mysqli_query($dbcon, $sql_query) or die ( mysqli_error($sql_query));
  $fetched_row = mysqli_fetch_assoc($result);
}

if(isset($_POST['new']) && $_POST['new']==1)
{
move_uploaded_file($_FILES["product_image"]["tmp_name"],"images/" . $_FILES["product_image"]["name"]);      
$product_image=$_FILES["product_image"]["name"];
$product_name= $_REQUEST['product_name'];
$product_description = $_REQUEST['product_description'];
$product_ingredient = $_REQUEST['product_ingredient'];
$cat_id = $_REQUEST['cat_id'];
$product_price = $_REQUEST['product_price'];
$product_weight = $_REQUEST['product_weight'];
$product_color = $_REQUEST['product_color'];
$product_instock = $_REQUEST['product_instock'];
$product_video = $_REQUEST['product_video'];
//$product_highlight = $_REQUEST['product_highlight'];
$shipping_status = strtoupper($_REQUEST['shipping_status']);
$semenanjung = $_REQUEST['semenanjung'];
$sabah_sarawak = $_REQUEST['sabah_sarawak'];
$updatedby = $_SESSION["employee_email"];
//$link = mysql_connect('localhost', 'root', '');
//mysql_select_db('mos', $link);

// sql query for update data into database
$sql_query = "UPDATE product SET product_image='$product_image', product_name='$product_name', product_weight='$product_weight', product_color='$product_color', product_price='$product_price', product_instock='$product_instock', product_description='$product_description', product_ingredient='$product_ingredient', product_video='$product_video', cat_id='$cat_id', shipping_status='$shipping_status', semenanjung='$semenanjung', sabah_sarawak='$sabah_sarawak', updatedby='$updatedby', updated_at=now() WHERE product_id=".$_GET['product_id'];
  
  //$link=mysql_query($sql_query);
  //echo $link;
  //echo "<script>alert('Successfully Added!!!'); window.location='product.php'</script>";
mysqli_query($dbcon, $sql_query) or die(mysqli_error($dbcon));
echo "<script>alert('Successfully Updated!!!'); window.location='product.php'</script>";
}else {

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
    <h3><a href="product">PRODUCT</a> <small>Update Product</small></h3>
  </div>
</div>

<div class="clearfix"></div>


<div class="row">
<div class="col-md-offset- col-md-11" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
    <!-- Nav tabs -->
    <form data-parsley-validate method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="new" value="1" />

    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>General</a></li>
      <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-truck"></i>Shipping</a></li>
      <li role="presentation"><a href="#Section4" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-adjust"></i>Variation</a></li>
      <li style="float:right;">
      <button type="submit" class="btn btn-success" name="update_product" title="" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Update</b></button>
      </li>
    </ul>

<!-- Tab panes -->
<div class="tab-content">

<!-- SECTION 1 -->
<div role="tabpanel" class="tab-pane fade in active" id="Section1">

<table class="" style="margin-left:8%;width:85%;">
<tr style="height: 50px;">
  <td  style="text-align:right;"><label>Product Image <span>*</span></label></td>
  <td width="30"></td> 
  <td>
    <img src="images/<?php echo $fetched_row['product_image']; ?>" width="20%" class="img-rounded" name="product_image">
    <span id="wrapper" style="" name="product_image"></span>
    <img id="image_location" name="product_image"/><br><br>
    <input type="file" accept="image/*" onchange="preview_image(event)" name="product_image" id="product_image" class="img-rounded" required>
  </td>
</tr>
<tr style="height: 60px;">
  <td style="text-align:right;"><label>Product <span class="required">*</span></label></td>
  <td width="30"></td>
  <td><input type="text" name="product_name" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['product_name']; ?>">
</tr>
</tr></td>
<tr style="height: 40px;">
  <td style="text-align:right;vertical-align: top;"><label>Description <span class="required">*</span></label></td>
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
<!--<tr style="height: 60px;">
  <td></td>
    <td width="30"></td>
    <td>
      <label class="control-label text-left"><i class="mdi mdi-lightbulb-on-outline"></i>Highlight</label><br>
      <textarea placeholder="(Empty highlight)" rows="20" name="product_highlight" id="product_highlight" style="width:80%;height: 150px;background: rgba(0, 0, 0, 0.07);border-radius: 6px 6px 6px 6px;box-sizing: border-box;border: 5px  #ccc;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12);color: #555555;font-size: 1em;padding: 5px 8px;" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
      </textarea>--><br><br>
    </td>
</tr><br>

  <tr style="height: 50px;">
    <td style="text-align:right;vertical-align: top;"><label>Ingredients <span class="required">*</span></label></td>
    <td width="30"></td>
    <td>
      <textarea name ="product_ingredient" class="form-control" id="textArea1" rows="3" placeholder="Textarea">
          <?php echo $fetched_row['product_ingredient']; ?>
        </textarea>
        <script>
        //Load editor and replace it with textarea
        CKEDITOR.replace( 'textArea1' );
        </script><br>
    </td>
  </tr>
  <tr style="height: 60px;">
    <td style="text-align:right;"><label>Video <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="product_video" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['product_video']; ?>">
  </tr>
  
</table>
  
</div>
<!-- ./ SECTION 1 -->

<!-- SECTION 3 -->
<div role="tabpanel" class="tab-pane fade" id="Section3">

<table style="margin-left:13%;">
  <tr>
    <td style="text-align:right;"><label>Free Shipping *</label></td>
    <td width="30"></td>
    <td>
      <select class="form-control" name="shipping_status" style="margin-left:3%;width:94%;margin-bottom:3%;">
        <option value="YES">Yes</option>
        <option value="NO">No</option>
      </select>
    <td>
  </tr>

  <tr>
    <td style="text-align:right;"><label>Semenanjung *</label></td>
    <td width="30"></td>
    <td>
      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="semenanjung" name="semenanjung" placeholder="0000.00" value="<?php echo $fetched_row['semenanjung']; ?>">
        <span class=" form-control-feedback left" aria-hidden="true">RM</span>
      </div>
    </td>
  </tr>

    <tr>
    <td style="text-align:right;"><label>Sabah / Sarawak *</label></td>
    <td width="30"></td>
    <td>
      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="sabah_sarawak" name="sabah_sarawak" placeholder="0000.00" value="<?php echo $fetched_row['sabah_sarawak']; ?>">
        <span class=" form-control-feedback left" aria-hidden="true">RM</span>
      </div>
    </td>
  </tr>
</table>

</div>
<!-- ./ SECTION 3 -->

<!-- SECTION 4 -->
<div role="tabpanel" class="tab-pane fade" id="Section4">

<table class="" style="margin-left:10%;width:80%;">

<tr style="height: 30px;">
  <td style="text-align:right;"><label>Category <span class="required">*</span></label></td>
  <td width="30"></td>
  <td>
  <select class="form-control" name="cat_id" style="width:85%;">
    <option value="<?php echo $fetched_row['cat_id']; ?>"><?php echo $fetched_row['cat_name']; ?></option>
    <?php foreach($users as $user): ?>
    <option value="<?= $user['cat_id']; ?>"><?= $user['cat_name']; ?></option>
    <?php endforeach; ?>
  </select><br>
  </td>
</tr>
<tr style="height: 40px;">
  <td style="text-align:right;position:top;"><label>Variation <span class="required">*</span></label></td>
  <td width="30"></td>
  <td>
    <label>
      <input type="text" class="form-control" name="product_weight" value="<?php echo $fetched_row['product_weight']; ?>" placeholder="Weight" size="5">
    </label>
    <label>
      <input type="text" class="form-control" name="product_color" placeholder="Color" value="<?php echo $fetched_row['product_color']; ?>" size="13">
    </label>
    <label>
      <div class="has-feedback">
          <input type="text" class="form-control has-feedback-left" id="product_price" name="product_price" placeholder=" 0000.00" value=" <?php echo $fetched_row['product_price']; ?>" size="2" style="margin:0%;">
          <span class="form-control-feedback left" aria-hidden="true">RM </span>
        </div>
    </label>
    <label>
      <input type="text" class="form-control" name="product_instock" placeholder="Stock" value="<?php echo $fetched_row['product_instock']; ?>" size="5">
    </label>
  </td>
</tr>

</table>
</div>
<!-- ./ SECTION 4 -->

</div>
</form>

<?php } ?>

</div>
</div>
</div>

</div>

</div>
</div>

<?php include('layout/footer.php'); ?>