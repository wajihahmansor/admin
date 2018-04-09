<?php
include('process/session.php');
include ('db.php');
if(isset($_GET['employee_id']))
{
  $queried= "SELECT employees.employee_id, employees.employee_email, employees.employee_image, employees.employee_name, employees.employee_phone, employees.employee_address, employees.employee_city, employees.employee_poscode, employees.employee_state, employees.created_at, employees.employee_status, role.role_id, role.role_position FROM employees INNER JOIN role ON employees.role_id=role.role_id WHERE employee_id=".$_GET['employee_id'];
  $set =mysql_query($queried);
  $select = mysql_fetch_array($set);
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


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="get" action="">
<!-- Tab panes -->
<div class="tab-content">

<!-- Section 1-->
<div role="tabpanel" class="tab-pane fade in active" id="Section1">

<div class="row">
  <div class="col-sm-3 profile_left">
    <div class="profile_img">
      <div id="crop-avatar">
      <!-- Current avatar -->
      <img src="../images/employee/<?php echo $select['employee_image']; ?>" width="90%" class="img-rounded">

      </div>
      </div>
  </div>

  <div class="col-sm-4">
    <h3><?php echo $select['employee_name']; ?></h3>
    <ul class="list-unstyled user_data">
      <li>
        <i class="fa fa-map-marker user-profile-icon"></i> 
        <?php echo $select['employee_address']; ?> <br>
        <i class="fa" style="margin-left:1%;"></i><?php echo $select['employee_city']; ?>, <?php echo $select['employee_poscode']; ?>, <?php echo $select['employee_state']; ?>.
    </li>

    <li>
      <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $select['role_position']; ?>
    </li>

    <li class="m-top-xs">
      <i class="fa fa-external-link user-profile-icon"></i>
      <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin/" target="_blank"> <?php echo $select['employee_email']; ?></a>
    </li>

    <li>
      <i class="fa fa-phone user-profile-icon"></i> <?php echo $select['employee_phone']; ?>
    </li>

    <li>
      <i class="fa fa-calendar user-profile-icon"></i> <?php echo $select['created_at']; ?>
    </li>
    <li>
    <form method="post">
      <i class="fa fa-user-md"></i> <?php echo $select['employee_status']; ?>
    </li>
    </ul>
  </div>

  <div class="col-sm-5" style="">
    
  </div>
</div>

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