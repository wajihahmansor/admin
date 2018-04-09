<?php
include ('process/session.php');
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

<!-- Start Page -->
<div class="row">


<div class="col-md-6 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Form Basic Elements <small>different form elements</small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<ul class="dropdown-menu" role="menu">
  <li><a href="#">Settings 1</a>
  </li>
  <li><a href="#">Settings 2</a>
  </li>
</ul>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form action="uploadcompany" method="post" enctype="multipart/form-data">

<table class="" style="margin-left:5%;width:95%;">
<tr style="height: 40px;">
<td  style="text-align:right;width:15%;"><label>Company Logo <span class="required">* :</span></label></td>
<td width="30"></td> 
<td>
  <span id="wrapper" style=""></span>
  <img id="image_location"/><br><br>
  <input type="file" accept="image/*" onchange="preview_image(event)" name="company_image"></td>
</tr>
<tr style="height: 60px;">
    <td style="text-align:right;"><label>Company Name <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_name" name="company_name" required="required" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Email <span class="required">:</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_email" name="company_email" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Address 1<span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_address" name="company_address" required="required" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Address 2 <span class="required"> :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_address1" name="company_address1" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Poscode <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_poscode" name="company_poscode" required="required" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>City <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_city" name="company_city" required="required" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>State <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td>
    <select class="form-control" name="company_state" required="required" style="text-transform: capitalize">
            <option disabled selected>State</option>
            <option value="Johor">Johor</option>
            <option value="Kedah">Kedah</option>
            <option value="Kelantan">Kelantan</option>
            <option value="Melaka">Melaka</option>
            <option value="Negeri Sembilan">Negeri Sembilan</option>
            <option value="Pahang">Pahang</option>
            <option value="Perak">Perak</option>
            <option value="Perlis">Perlis</option>
            <option value="Pulau Pinang">Pulau Pinang</option>
            <option value="Sabah">Sabah</option>
            <option value="Sarawak">Sarawak</option>
            <option value="Selangor">Selangor</option>
            <option value="Terengganu">Terengganu</option>
            <option value="WP Kuala Lumpur">WP Kuala Lumpur</option>
            <option value="WP Labuan">WP Labuan</option>
            <option value="WP Putrajaya">WP Putrajaya</option>
          </select>
    </td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Phone Number <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_phone" name="company_phone" required="required" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Company Facebook <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_fb" name="company_fb" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Company Instagram <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_ig" name="company_ig" class="form-control col-md-5 col-xs-5"></td>
</tr>
</table>


<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
  <button type="button" class="btn btn-primary">Cancel</button>
  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-success" name="save">Save</button>
</div>
</div>

</form>
</div>
</div>
</div>


<div class="col-md-5 col-xs-12" style="margin-top:5%;padding-left:15%;">
<div class="x_content" >
<div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:4%;">
    
<?php
include ("db.php");

$sql = "SELECT * FROM company";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

<div class="profile_img">
<div id="crop-avatar">
<!-- Current avatar -->
<img src="images/company_logo/<?php echo $row['company_image']; ?>" width="200%" class="img-rounded">

</div>
</div>

<!-- start skills -->
<!-- end of skills -->

</div>
<div class="col-md-9 col-sm-9 col-xs-12"> 
<h3><?php echo $row['company_name']; ?></h3>

<ul class="list-unstyled user_data">
  <li>
    <i class="fa fa-map-marker user-profile-icon"></i> 
    <?php echo $row['company_address']; ?> <br>
    <i class="fa" style="margin-left:3%;"></i> <?php echo $row['company_address1']; ?> <?php echo $row['company_city']; ?>,<br> 
    <i class="fa" style="margin-left:3%;"></i> <?php echo $row['company_poscode']; ?>, <?php echo $row['company_state']; ?>.
</li>

<li>
  <i class="fa fa-phone user-profile-icon"></i> <?php echo $row['company_phone']; ?>
</li>

<li class="m-top-xs">
  <i class="fa fa-external-link user-profile-icon"></i>
  <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin/" target="_blank"> <?php echo $row['company_email']; ?></a>
</li>

<li>
  <i class="fa fa-facebook-square user-profile-icon"></i> <?php echo $row['company_fb']; ?>
</li>

<li>
  <i class="fa fa-instagram user-profile-icon"></i> <?php echo $row['company_ig']; ?>
</li>

<li><br>
    <a href="updatecompany?company_id=<?=$row['company_id'];?>" class="btn btn-xs btn-default" name="update"><i class="fa fa-edit m-right-xs"></i> Edit Profile</a>
</li>
</ul>
</br>
<!-- Page Content -->
</div>

<?php 
}
} else {
echo "";
}
$dbcon->close();
?>

</div>
</div>


</div>

<!-- top tiles -->
</div>
</div>
</div>
<!-- /page content -->

<?php include('layout/footer.php'); ?>