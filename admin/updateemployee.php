<?php include ('process/session.php'); ?>
<?php
 $pdo = new PDO('mysql:host=localhost;dbname=mos', 'root', '');
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT * FROM role ORDER BY role_position ASC";
//Prepare the select statement.
$stmt = $pdo->prepare($sql);
//Execute the statement.
$stmt->execute();
//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();
?>
<?php
include ('db.php');
if(isset($_GET['employee_id']))
{
  $sql_query= "SELECT employees.employee_id, employees.employee_email, employees.employee_image, employees.employee_name, employees.employee_address, employees.employee_city, employees.employee_poscode, employees.employee_state, employees.employee_phone, employees.employee_status, role.role_id, role.role_position FROM employees INNER JOIN role ON employees.role_id=role.role_id WHERE employee_id=".$_GET['employee_id'];
  $result_set =mysql_query($sql_query);
  $fetched_row = mysql_fetch_array($result_set);
}
if(isset($_POST['update_employee']))
{
  
move_uploaded_file($_FILES["employee_image"]["tmp_name"],"../images/employee/" . $_FILES["employee_image"]["name"]);      
$location=$_FILES["employee_image"]["name"];
//$employee_name= $_POST['employee_name'];
$employee_email = $_POST['employee_email'];
$employee_phone = $_POST['employee_phone'];
$employee_address = $_POST['employee_address'];
$employee_city = $_POST['employee_city'];
$employee_poscode = $_POST['employee_poscode'];
$employee_state = $_POST['employee_state'];
$employee_status = $_POST['employee_status'];
$role_id = $_POST['role_id'];
  
// sql query for update data into database
$sql_query = "UPDATE employees SET employee_image='$location', updated_at=now(), employee_phone='$employee_phone', employee_email='$employee_email', employee_address='$employee_address', employee_city='$employee_city', employee_poscode='$employee_poscode', employee_state='$employee_state', employee_status='$employee_status', role_id='$role_id' WHERE employee_id=".$_GET['employee_id'];
//$dbcon=mysql_query($sql_query);
//echo $dbcon;
//echo "<script>alert('Successfully Updated!!!'); window.location='user.php'</script>";

if ($dbcon->query($sql_query) === TRUE) {
    echo "<script>alert('Successfully Updated!!!'); window.location='user.php'</script>";
} else {
    echo "Error: " . $sql_query . "<br>" . $dbcon->error;
}

$dbcon->close();
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
<div class="">
<div class="page-title">
<div class="title_left">
<!--<h3>USERS OF MOS NUTRACEUTICAL SYSTEM<small></small></h3><br>-->
</div>
</div>
<div class="clearfix"></div>

</br>
<div class="row">
<div class="col-md-offset- col-md-12" style="float:none;margin:0 auto;">
<div class="tab" role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="user" aria-controls="home"><i class="fa fa-user"></i>Employee</a></li>
        <li role="presentation"><a href="" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Agent</a></li>
        <li role="presentation"><a href="" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Stokist</a></li>
        <li role="presentation"><a href="" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Dropship</a></li>
        <li style="float:right;">
        <!--<button type="submit" onclick="location.href='product'" class="btn btn-success" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Back</b></button>-->
      </li>
    </ul>


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
<!-- Tab panes -->
<div class="tab-content">

<!-- Section 1-->
<div role="tabpanel" class="tab-pane fade in active" id="Section1">
<br>

<div class="">
  <table class="" style="margin-left:15%;width:62%;">
  <tr style="height: 40px;">
    <td  style="text-align:right;"><label>Image<span>* :</span></label></td>
    <td width="30"></td> 
    <td>
      <img src="../images/employee/<?php echo $fetched_row['employee_image']; ?>" width="20%" class="img-rounded">
      <span id="wrapper" style=""></span>
      <img id="image_location"/><br><br>
      <input type="file" accept="image/*" onchange="preview_image(event)" name="employee_image" class="img-rounded" required></td>
    </td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Name : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="employee_name" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['employee_name']; ?>" required></td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Phone Number : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="employee_phone" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['employee_phone']; ?>" required></td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Email : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="employee_email" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['employee_email']; ?>" required></td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Address : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="employee_address" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['employee_address']; ?>" required></td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Poscode : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="employee_poscode" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['employee_poscode']; ?>" required></td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>City : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td><input type="text" name="employee_city" class="form-control col-md-7 col-xs-12" value="<?php echo $fetched_row['employee_city']; ?>" required></td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>State : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td>
      <select class="form-control" name="employee_state" required="" style="text-transform: capitalize">
            <option value="<?php echo $fetched_row['employee_state']; ?>"><?php echo $fetched_row['employee_state']; ?></option>
            <option value="Johor">JOHOR</option>
            <option value="Kedah">KEDAH</option>
            <option value="Kelantan">KELANTAN</option>
            <option value="Melaka">MELAKA</option>
            <option value="Negeri Sembilan">NEGERI SEMBILAN</option>
            <option value="Pahang">PAHANG</option>
            <option value="Perak">PERAK</option>
            <option value="Perlis">PERLIS</option>
            <option value="Pulau Pinang">PULAU PINANG</option>
            <option value="Sabah">SABAH</option>
            <option value="Sarawak">SARAWAK</option>
            <option value="Selangor">SELANGOR</option>
            <option value="Terengganu">TERENGGANU</option>
            <option value="WP Kuala Lumpur">WP KUALA LUMPUR</option>
            <option value="WP Labuan">WP LABUAN</option>
            <option value="WP Putrajaya">WP PUTRAJAYA</option>
          </select>
    </td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Position : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td>
          <select class="form-control" name="role_id">
            <option value="<?php echo $fetched_row['role_id']; ?>"><?php echo $fetched_row['role_position']; ?></option>
            <?php foreach($users as $user): ?>
            <option value="<?= $user['role_id']; ?>"><?= $user['role_position']; ?></option>
            <?php endforeach; ?>
          </select><br>
        </td>
  </tr>
  <tr style="height: 40px;">
    <td style="text-align:right;"><label>Status : <span class="required">*</span></label></td>
    <td width="30"></td>
    <td>
      <select class="form-control" name="employee_status" required="" style="text-transform: capitalize">
            <option value="<?php echo $fetched_row['employee_status']; ?>"><?php echo $fetched_row['employee_status']; ?></option>
            <option value="Pending">Pending</option>
            <option value="Approved">Approved</option>
          </select>
    </td>
  </tr>
</table>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button onclick="location.href='user'" class="btn btn-primary" type="button">Cancel</button>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success" name="update_employee">Submit</button>
  </div>
</div>
    
</div>
</form>

</div>
<!--./Section 1 -->

</div>
</form>
</div>
</div>
</div>
<!-- ./ row -->
</div>
</div>
<!-- /page content -->

<?php include('layout/footer.php'); ?>