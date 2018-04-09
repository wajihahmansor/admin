<?php
  include ('process/session.php');
?>
<?php
include ('db.php');
if(isset($_GET['user_id']))
{
  $sql_query= "SELECT * FROM users WHERE user_id=".$_GET['user_id'];
  $result_set =mysql_query($sql_query);
  $fetched = mysql_fetch_array($result_set);
}
if(isset($_POST['update_customer']))
{
  // variables for input data
$user_email = $_POST['user_email'];
$user_address = $_POST['user_address'];
$user_poscode = $_POST['user_poscode'];
$user_city = $_POST['user_city'];
$user_state = $_POST['user_state'];
$user_phone = $_POST['user_phone'];

  // variables for input data
  
  // sql query for update data into database
  $sql_query = "UPDATE users SET user_email='$user_email', user_address='$user_address', user_poscode='$user_poscode', user_city='$user_city', user_state='$user_state' , updated_at=now(), user_phone='$user_phone' WHERE user_id=".$_GET['user_id'];
  // sql query for update data into database
  
  // sql query execution function
  if(mysql_query($sql_query))
  {
    
    ?>
    <script type="text/javascript">
    alert('Data Are Updated Successfully');
    window.location.href= 'customer.php';   
    </script>
    <?php
}
else
{
?>
<script type="text/javascript">
alert('error occured while updating data');
</script>

<?php
}
  // sql query execution function
}
if(isset($_POST['cancel']))
{
  header("Location: customer.php");
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
      <h3></h3>
    </div>

  </div>
  <div class="clearfix"></div>
  <div class="row">

<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:3%;">
<div class="x_panel">
  <div class="x_title">
    <h2>UPDATE<small>Customer Details</small></h2>
    <div class="clearfix"></div>
  </div>
    
<div class="x_content">

  <div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-user"></i> Profile</a>
      </li>
      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-home"></i> Address</a>
      </li>
    </ul>

    <div id="myTabContent" class="tab-content">
    <!-- TAB 1 -->
      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12" style="color:black;margin-top:0.5%;">
              <b><?php echo $fetched['user_name']; ?></b>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" name="user_email" placeholder="Default Input" value="<?php echo $fetched['user_email']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone Number 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" name="user_phone" placeholder="Default Input" value="<?php echo $fetched['user_phone']; ?>">
            </div>
          </div>
      </div>
    <!-- ./TAB 1 -->

    <!-- TAB 2 -->
    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
      <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" name="user_address"><?php echo $fetched['user_address']; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Poscode
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" placeholder="Default Input" name="user_poscode" value="<?php echo $fetched['user_poscode']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" placeholder="Default Input" name="user_city" value="<?php echo $fetched['user_city']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">State
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label style=""></label><br>
              <select class="form-control" required name="user_state">
                <option><?php echo $fetched['user_state']; ?></option>
                <option>Johor</option>
                <option>Kedah</option>
                <option>Kelantan</option>
                <option>Melaka</option>
                <option>Negeri Sembilan</option>
                <option>Pahang</option>
                <option>Perak</option>
                <option>Perlis</option>
                <option>Pulau Pinang</option>
                <option>Sabah</option>
                <option>Sarawak</option>
                <option>Selangor</option>
                <option>Terengganu</option>
                <option>Wilayah Persekutuan</option>
              </select>
            </div>
          </div>

          <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="button" onclick="location.href='customer'" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-success" name="update_customer">Update</button>
              </div>
            </div>

        </form>
    </div>
    <!-- ./TAB 2 -->
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<?php include('layout/footer.php'); ?>
