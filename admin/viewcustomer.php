<?php
  include ('process/session.php');
?>

<?php
include ('db.php');
if(isset($_GET['user_id']))
{
  $sql_query= "SELECT * FROM users WHERE user_id=".$_GET['user_id'];
  $result_set =mysql_query($sql_query);
  $rowed = mysql_fetch_array($result_set);
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
    <!--<h3>CUSTOMER <small>Details</small></h3>-->
  </div>

</div>
<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:3%;">
<div class="x_panel">
<div class="x_title">
<h2>CUSTOMER <small>Details</small></h2>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form data-parsley-validate class="form-horizontal form-label-left" method="get" action="">


  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" name="user_id">Customer ID
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <label>#<?php echo $rowed['user_id']; ?></label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_name']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_email']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone Number 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_phone']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_address']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Poscode 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_poscode']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_city']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">State 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['user_state']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date Joined 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
      <?php echo $rowed['created_at']; ?>
    </div>
  </div>

  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="" style="float:right;">
      <button type="button" class="btn btn-primary" onclick="location.href='customer.php'">Back</button>
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
