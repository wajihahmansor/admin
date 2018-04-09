<?php include('process/session.php'); ?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color FROM calendar ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<?php
$conn = mysqli_connect("localhost","root","","mos");

$result = mysqli_query($conn,"SELECT employees.employee_email, employees.employee_image, employees.employee_name, employees.employee_address, employees.employee_city, employees.employee_poscode, employees.employee_state, employees.created_at, role.role_id, role.role_position FROM employees INNER JOIN role ON employees.role_id=role.role_id WHERE employee_email='" . $_SESSION["employee_email"] . "'");
$row  = mysqli_fetch_array($result);
?>

<?php include('layout/head.php'); ?>

<body class="nav-md" style="overflow:auto;">
<div class="container body">
<div class="main_container">
<?php include('layout/sidebar.php'); ?>

<!-- top navigation -->
<?php include('layout/topbar.php'); ?>

<!-- Page Content -->
<div class="right_col" role="main">

  <!-- top tiles -->
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h2>User Report <small>Activity report</small></h2>
    <div class="clearfix"></div>
  </div>
<div class="x_content">
<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
<div class="profile_img">
<div id="crop-avatar">
<!-- Current avatar -->
<img src="../images/employee/<?php echo $employee_image; ?>" width="90%" class="img-rounded">

</div>
</div>
<h3><?php echo $employee_name; ?></h3>

<ul class="list-unstyled user_data">
  <li>
    <i class="fa fa-map-marker user-profile-icon"></i> 
    <?php echo $employee_address; ?> <br>
    <i class="fa" style="margin-left:3%;"></i><?php echo $employee_city; ?>, <?php echo $employee_poscode; ?>, <?php echo $employee_state; ?>.
</li>

<li>
  <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $role_position; ?>
</li>

<li class="m-top-xs">
  <i class="fa fa-external-link user-profile-icon"></i>
  <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin/" target="_blank"> <?php echo $employee_email; ?></a>
</li>
</ul>

<a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
<br />

<!-- start skills -->
<!-- end of skills -->

</div>
<div class="col-md-9 col-sm-9 col-xs-12">

<div class="profile_title">
<div class="col-md-6">
  <h2><?php echo $role_position; ?> Information</h2>
</div>
</div>
</br>
<!-- Page Content -->
<div class="row">
<div class="col-lg-12 text-center">
    <div id="calendar" class="col-centered">
    </div>
</div>
</div>
<!-- /.row -->
		
<!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form class="form-horizontal" method="POST" action="addEvent.php">

  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title" id="myModalLabel">Add Event</h4>
  </div>
<div class="modal-body">

<div class="form-group">
<label for="title" class="col-sm-2 control-label">Title</label>
<div class="col-sm-10">
  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
</div>
</div>
<div class="form-group">
<label for="color" class="col-sm-2 control-label">Color</label>
<div class="col-sm-10">
  <select name="color" class="form-control" id="color">
	  <option value="">Choose</option>
	  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
	  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
	  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
	  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
	  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
	  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
	  <option style="color:#000;" value="#000">&#9724; Black</option>
	  
	</select>
</div>
</div>
<div class="form-group">
<label for="start" class="col-sm-2 control-label">Start date</label>
<div class="col-sm-10">
  <input type="text" name="start" class="form-control" id="start" readonly>
</div>
</div>
<div class="form-group">
<label for="end" class="col-sm-2 control-label">End date</label>
<div class="col-sm-10">
  <input type="text" name="end" class="form-control" id="end" readonly>
</div>
</div>

</div>
  <div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form class="form-horizontal" method="POST" action="editEventTitle.php">
  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
  </div>
<div class="modal-body">

<div class="form-group">
<label for="title" class="col-sm-2 control-label">Title</label>
	<div class="col-sm-10">
		<input type="text" name="title" class="form-control" id="title" placeholder="Title">
	</div>
</div>
<div class="form-group">
<label for="color" class="col-sm-2 control-label">Color</label>
<div class="col-sm-10">
  <select name="color" class="form-control" id="color">
	  <option value="">Choose</option>
	  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
	  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
	  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
	  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
	  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
	  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
	  <option style="color:#000;" value="#000">&#9724; Black</option>
	  
	</select>
</div>
</div>
<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
	<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
  </div>
</div>
</div>
  
<input type="hidden" name="id" class="form-control" id="id">

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
</div>
</div>
</div>

</div>
<!-- /.container -->

</div>
</div>
</div>
</div>
</div>

<!-- /top tiles -->

</div>
</div>

<?php include('layout/footer.php'); ?>
