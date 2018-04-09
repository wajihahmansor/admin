<?php
include('process/session.php');
include('db.php');
if(isset($_POST['check']))
{
$employee_status = $_POST['employee_status'];

// sql query for update data into database
$sqly = "UPDATE employees SET employee_status='$employee_status' WHERE employee_id=".$_GET['employee_id'];
  
$dbcon = mysql_query($sqly);
echo $dbcon;

/*if (mysql_query($sqly) === TRUE) 
  {
  //echo "New records created successfully";
  echo "<script>alert('Employee Approved!!!'); window.location='user'</script>";
  } 
  else
  {
  echo "Error: " . $sqly . "<br>" . mysql_error();
  }

  mysql_close();*/

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
        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Employee</a></li>
        <li role="presentation"><a href="#Section4" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Agent</a></li>
        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Stokist</a></li>
        <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Dropship</a></li>
        <li style="float:right;">
        <!--<button type="submit" onclick="location.href='product'" class="btn btn-success" style="border:none;border-radius:12px;padding:12px;width:80px;"><b>Back</b></button>-->
      </li>
    </ul>


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="get" action="">
<!-- Tab panes -->
<div class="tab-content">

<!-- Section 1-->
<div role="tabpanel" class="tab-pane fade in active" id="Section1">
<div class="x_panel">
<div class="x_title">
  <h2>Button Example <small>Users</small></h2>
  <div class="clearfix"></div>
</div>
<div class="x_content">
<table id="datatable-buttons" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Position</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Start Date</th>
      <th style="width:5%;">Status</th>
      <th>Details</th>
      <th style="width:3%;">Setting</th>
      <!--<th>Salary</th>-->
    </tr>
  </thead>

  <tbody>
<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT employees.employee_id, employees.employee_email, employees.employee_image, employees.employee_phone, employees.employee_name, employees.employee_address, employees.employee_city, employees.employee_poscode, employees.employee_state, employees.created_at, employees.employee_salary, employees.employee_status,  role.role_id, role.role_position FROM employees INNER JOIN role ON employees.role_id=role.role_id WHERE role_position in ('System Admin', 'Finance', 'Employee', 'Sales Person', 'Inventory', 'Super Admin', 'Master Admin')";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

?>
    <tr>
      <td><?=$bil++;?></td>
      <td><?=$row['employee_name'];?></td>
      <td><?=$row['role_position'];?></td>
      <td><?=$row['employee_phone'];?></td>
      <td><?=$row['employee_email'];?></td>
      <td><?=$row['created_at'];?></td>
      <td style="text-align:center;"><?=$row['employee_status'];?></td>
      <td>
        <a href="viewemployee?employee_id=<?=$row["employee_id"];?>">More Details</a>
      </td>
      <td align="center">
        <a href="updateemployee?employee_id=<?=$row["employee_id"];?>" class="btn btn-xs btn-primary">Update</a>
        <a href="process/deleteuser?employee_id=<?=$row["employee_id"];?>" title="click for delete" onclick="return confirm('Are you sure to remove this employee?')" class="btn btn-xs btn-danger">Delete</a>
      </td>
    </tr>

<?php 
}
} else {
echo "0 results";
}
$dbcon->close();
?>

  </tbody>
</table>
</div>
</div>

</div>
<!--./Section 1 -->

<!--./Section 2 -->
<div role="tabpanel" class="tab-pane fade" id="Section2">
<div class="x_panel">
<div class="x_title">
  <h2>Default Example <small>Users</small></h2>
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
  <p class="text-muted font-13 m-b-30">
    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
  </p>
  <table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
      </tr>
    </thead>


    <tbody>
      <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
      </tr>
    </tbody>
  </table>
</div>
</div>

</div>
<!--./Section 2 -->

<!--./Section 3 -->
<div role="tabpanel" class="tab-pane fade" id="Section3">
<div class="x_panel">
<div class="x_title">
<h2>Fixed Header Example <small>Users</small></h2>
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
<p class="text-muted font-13 m-b-30">
  This example shows FixedHeader being styling by the Bootstrap CSS framework.
</p>
<table id="datatable-fixed-header" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Office</th>
      <th>Age</th>
      <th>Start date</th>
      <th>Salary</th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
<!--./Section 3 -->

<!--./Section 4 -->
<div role="tabpanel" class="tab-pane fade" id="Section4">
<div class="x_panel">
<div class="x_title">
  <h2>KeyTable example <small>Users</small></h2>
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
<div class="row">
<div class="col-sm-12">
<div class="card-box table-responsive">
  <p class="text-muted font-13 m-b-30">
    KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
  </p>

<table id="datatable-keytable" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Office</th>
      <th>Age</th>
      <th>Start date</th>
      <th>Salary</th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!--./Section 4 -->

</div>
</form>
</div>
</div>
</div>
<!-- ./ row -->
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
<div class="pull-right">
MOS NUTRACEUTICAL - Copyright 2018
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
