<?php include ('process/session.php'); ?>
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
    <h3><a href="product">PRODUCT</a> <small>Add New Product</small></h3><br>
  </div>
</div>

<div class="clearfix"></div>
  

<form method="post" action="additem1" enctype="multipart/form-data"> 
<div class="row">
<div class="container">
<div class="row">
<div class="col-md-11" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href=""><i class="fa fa-cube"></i>General</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-video-camera"></i>Video</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-truck"></i>Shipping</a></li>
      <li role="presentation"><a href="#"><i class="fa fa-adjust"></i>Variation</a></li>
      <li style="float:right;">
      <button type="submit" class="btn btn-success" name="next" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Next</b></button>
      </li>
  </ul>
<!-- Tab panes -->

<div class="tab-content">
      
<div class="">
<table width="85%" style="margin-left:5%;">
  <tr style="">
    <td  style="text-align:right;width:15%;"><label>Product Image <span class="required">*</span></label></td>
    <td width="30"></td> 
    <td>
      <span id="wrapper" style=""></span>
      <img id="image_location" name="product_image"/><br><br>
      <input type="file" accept="image/*" onchange="preview_image(event)" name="product_image"></td>
  </tr>
  <tr style="height: 60px;">
    <td style="text-align:right;"><label>Product <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="product_name" name="product_name" required="required" class="form-control col-md-7 col-xs-12"></td>
  </tr>
<tr>
  <td style="text-align:right;vertical-align: top;"><label>Description <span class="required">*</span></label></td>
  <td width="30"></td>
  <td>
     <textarea name ="product_description" class="form-control" id="textArea" rows="3" placeholder="Textarea"></textarea>
      <script>
      //Load editor and replace it with textarea
      CKEDITOR.replace( 'textArea' );
      </script>
  </td>
  </tr>
  <tr>
    <td></td>
    <td width="30"></td>
    <td><br>
      <label class="control-label text-left"><i class="mdi mdi-lightbulb-on-outline"></i>Highlight</label><br>
      <textarea placeholder="(Empty highlight)" rows="20" name="product_highlight" id="product_highlight" style="width:80%;height: 150px;background: rgba(0, 0, 0, 0.07);border-radius: 6px 6px 6px 6px;box-sizing: border-box;border: 5px  #ccc;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12);color: #555555;font-size: 1em;padding: 5px 8px;" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>
    </td>
  </tr><br><br>
</table>
</div>

</div>
</div>
</div>
</div>
<br/>

<div class="container" id="tab2">
<div class="row">
<div class="col-md-11" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
<div class="tab-content">

<div class="">
<div class="x_title">
<h2>Ingredient</h2>
<div class="clearfix"></div>
</div>
<div class="">
<table width="85%" style="margin-left:5%;">
  <tr>
  <td style="text-align:right;vertical-align: top;width:15%;"><label>Ingredient <span class="required">*</span></label></td>
  <td width="30"></td>
  <td>
    <textarea name ="product_ingredient" class="form-control" id="textArea1" rows="3" placeholder="Textarea"></textarea>
    <script>
      //Load editor and replace it with textarea
      CKEDITOR.replace( 'textArea1' );
      </script>
  </td>
  </tr>
</table>
</div>

</div>
</div>
</div>
</div>
</div>
<br/>
</div>

</div>
</div>
</div>
</div>
</form>

<?php include('layout/footer.php'); ?>
