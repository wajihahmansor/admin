<?php
include ('process/session.php');
?>
<?php
include ('db.php');
if(isset($_GET['company_id']))
{
$sql_query= "SELECT * FROM company WHERE company_id=".$_GET['company_id'];
$result_set =mysql_query($sql_query);
$fetchrow = mysql_fetch_array($result_set);
}
if(isset($_POST['save']))
{

move_uploaded_file($_FILES["company_image"]["tmp_name"],"images/company_logo/" . $_FILES["company_image"]["name"]);      
$location=$_FILES["company_image"]["name"];
$company_name= ucwords($_POST['company_name']);
$company_email = $_POST['company_email'];
$company_address = ucwords($_POST['company_address']);
$company_address1 = ucwords($_POST['company_address1']);
$company_city = ucwords($_POST['company_city']);
$company_poscode = $_POST['company_poscode'];
$company_state = ucwords($_POST['company_state']);
$company_phone = $_POST['company_phone'];
$company_fb = $_POST['company_fb'];
$company_ig = $_POST['company_ig'];
$employee = $_SESSION['employee_email'];

// sql query for update data into database
$sqlquery = "UPDATE company SET company_image='$location', updated_at=now(), company_name='$company_name', company_email='$company_email', company_address='$company_address', company_address1='$company_address1', company_city='$company_city', company_poscode='$company_poscode', company_state='$company_state', company_phone='$company_phone', company_fb='$company_fb', company_ig='$company_ig', employee='$employee' WHERE company_id=".$_GET['company_id'];

$dbcon=mysql_query($sqlquery);
//echo $dbcon;
//echo "<script>alert('Successfully Added Data!!!'); window.location='company'</script>";

if (mysql_query($sqlquery) === TRUE) 
  {
  //echo "New records created successfully";
  echo "<script>alert('Successfully Updated!!!'); window.location='company'</script>";
  } 
  else
  {
  echo "Error: " . $sqlquery . "<br>" . mysql_error();
  }

  mysql_close();
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

<!-- page content -->
<div class="right_col" role="main">

<!-- Start Page -->
<div class="row">


<div class="col-md-7 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Form Basic Elements <small>different form elements</small></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form class="" method="post" enctype="multipart/form-data">

<table class="" style="margin-left:5%;width:95%;">
<tr style="height: 40px;">
<td  style="text-align:right;width:15%;"><label>Company Logo <span class="required">* :</span></label></td>
<td width="30"></td> 
<td>
  <img src="images/company_logo/<?php echo $fetchrow['company_image']; ?>" width="20%" class="img-rounded">
  <span id="wrapper" style=""></span>
  <img id="image_location"/><br><br>
  <input type="file" accept="image/*" onchange="preview_image(event)" name="company_image" required></td>
</tr>
<tr style="height: 60px;">
    <td style="text-align:right;"><label>Company Name <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_name" name="company_name" value="<?php echo $fetchrow['company_name']; ?>" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Email <span class="required">:</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_email" name="company_email" value="<?php echo $fetchrow['company_email']; ?>" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Address 1<span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_address" name="company_address" value="<?php echo $fetchrow['company_address']; ?>" required="required" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Address 2 <span class="required"> :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_address1" name="company_address1" value="<?php echo $fetchrow['company_address1']; ?>" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Poscode <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_poscode" name="company_poscode" value="<?php echo $fetchrow['company_poscode']; ?>" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>City <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_city" name="company_city" value="<?php echo $fetchrow['company_city']; ?>" class="form-control col-md-5 col-xs-5" style="text-transform: capitalize"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>State <span class="required">* :</span></label></td>
    <td width="30"></td>
    <td>
    <select class="form-control" name="company_state" style="text-transform: capitalize">
            <option value="<?php echo $fetchrow['company_state']; ?>"><?php echo $fetchrow['company_state']; ?></option>
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
    <td><input type="text" id="company_phone" name="company_phone" value="<?php echo $fetchrow['company_phone']; ?>" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Company Facebook <span class="required"> :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_fb" name="company_fb" value="<?php echo $fetchrow['company_fb']; ?>" class="form-control col-md-5 col-xs-5"></td>
</tr>
<tr style="height: 50px;">
    <td style="text-align:right;vertical-align:top;"><label>Company Instagram <span class="required"> :</span></label></td>
    <td width="30"></td>
    <td><input type="text" id="company_ig" name="company_ig" value="<?php echo $fetchrow['company_ig']; ?>" class="form-control col-md-5 col-xs-5"></td>
</tr>
</table>

<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
  <button type="button" class="btn btn-primary" onclick="location.href='company'">Cancel</button>
  <button type="submit" class="btn btn-success" name="save">Updated</button>
</div>
</div>
<br><br>

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
<img src="images/company_logo/<?php echo $row['company_image']; ?>" width="200%" class="img-rounded"><br><br><br>

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
    <i class="fa" style="margin-left:3%;"></i><?php echo $row['company_city']; ?>, <?php echo $row['company_poscode']; ?>, <?php echo $row['company_state']; ?>.
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
    <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
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