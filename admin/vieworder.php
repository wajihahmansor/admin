<?php
  include ('process/session.php');
  include ('db.php');
  if(isset($_GET['ord_id']))
  {

    $sql_query= "SELECT orders.ord_id, orders.order_name, orders.order_address, orders.order_poscode, orders.order_city, orders.order_state, orders.created_at, orders.order_phone, orders.order_status, orders.order_total, orders.tracking_no, shipping.shipping_id, shipping.shipping_type, payment.payment_id, payment.payment_type, payment.payment_description FROM ((orders INNER JOIN shipping ON orders.shipping_id = shipping.shipping_id) INNER JOIN payment ON orders.payment_id = payment.payment_id) WHERE ord_id=".$_GET['ord_id'];

    $result_set =mysql_query($sql_query);
    $rowed = mysql_fetch_array($result_set);
  }

if(isset($_POST['submit']))
{
$order_status = $_POST['order_status'];
$tracking_no = $_POST['tracking_no'];
$trackingby = $_SESSION['employee_email'];

// sql query for update data into database
$sqlies = "UPDATE orders SET order_status='$order_status', tracking_no='$tracking_no', trackingby='$trackingby', tracking_date=now() WHERE ord_id=".$_GET['ord_id'];
  
$dbcon = mysql_query($sqlies);
//echo $dbcon;

if (mysql_query($sqlies) === TRUE) 
  {
  //echo "New records created successfully";
  echo "<script>alert('Order Details Updated!!!'); window.location='index'</script>";
  } 
  else
  {
  echo "Error: " . $sqlies . "<br>" . mysql_error();
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

<div class="right_col" role="main">
<div class="">
<div class="page-title">
  <div class="title_left">
    <h3><a href="orderdetails">ORDER DETAILS</a></h3>
  </div>

</div>
<div class="clearfix"></div>
<div class="row">
</br>
<div class="col-md-11 col-sm-11 col-xs-11" style="float:none;margin:0 auto;">
<div class="x_panel">
  <div class="x_title">
    <h2>Order Details<small>Customer Details</small></h2>
    <div class="clearfix"></div>
  </div>
    
<div class="x_content">

<div class="" role="tabpanel" data-example-id="togglable-tabs">
<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-user"></i> Customer Information</a>
  </li>
  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-shopping-cart"></i> Product Details</a>
  </li>
  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-credit-card"></i> Payment Details</a>
  </li>
  <li role="presentation" class=""><a href="#shipping" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-truck"></i> Shipping Details</a>
  </li>
</ul>

<div id="myTabContent" class="tab-content">

<!-- TAB 1 -->
<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<?php 
include ('db.php');
if(isset($_GET['ord_id']))
{
    $queries="SELECT users.user_id, users.user_name, users.user_email, users.user_password, users.user_phone, users.user_address, users.user_city, users.user_poscode, users.user_state, order_history.created_at FROM users INNER JOIN order_history ON users.user_id = order_history.user_id WHERE ord_id=".$_GET['ord_id'];

    $set =mysql_query($queries);
    $result = mysql_fetch_array($set);
}
?>
<div class="form-group">
  <label style="font-size:16px;padding-top:3%;">USER DETAILS</label>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Customer Name :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $result['user_name']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone Number :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $result['user_phone']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $result['user_address']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Poscode :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $result['user_poscode']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $result['user_city']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">State :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $result['user_state']; ?>
  </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
  <label style="font-size:16px;">SHIPPING DETAILS</label>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Customer Name :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['order_name']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone Number :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['order_phone']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['order_address']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Poscode :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['order_poscode']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['order_city']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">State :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['order_state']; ?>
  </div>
</div>

</form>
</div>
<!-- ./TAB 1 -->


<!-- TAB 2 -->
<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="home-tab">
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">

<div class="col-sm-8" style="float:none;margin:0 auto;">

<br>
<div class="form-group" style="float:left;">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status 
</label>
<div class="col-md-9 col-sm-9 col-xs-9">
<select class="form-control btn-sm" name="order_status">
  <option value="<?php echo $rowed['order_status']; ?>"><?php echo $rowed['order_status']; ?></option>
  <option value="Pending">Pending</option>
  <option value="Being Prepared">Being Prepared</option>
  <option value="Missing Orders">Missing Orders</option>
  <option value="Canceled">Canceled</option>
  <option value="Canceled Reversal">Canceled Reversal</option>
  <option value="Chargeback">Chargeback</option>
  <option value="Complete">Complete</option>
  <option value="Denied">Denied</option>
  <option value="Expired">Expired</option>
  <option value="Failed">Failed</option>
  <option value="Processed">Processed</option>
  <option value="Processing">Processing</option>
  <option value="Refunded">Refunded</option>
  <option value="Reversed">Reversed</option>
  <option value="Shipped">Shipped</option>
  <option value="Voided">Voided</option>
</select>
</div>
</div>

<div style="float:right;">
  Date : <?php echo $result['created_at'];?><br>
  Order ID : # <?php echo $rowed['ord_id'];?>
</div>
<br><br><br>

<table class="table table-bordered">
<thead>
  <tr>
    <th style="width:3%;">#</th>
    <th>Product</th>
    <th style="width:20%;text-align:center;">Quantity</th>
    <th style="width:20%;text-align:center;">Price</th>
  </tr>
</thead>

<?php
$bil=1;
include ("process/db.php");

$sql = "SELECT order_history.product_id, order_history.order_quantity, product.product_id, product.product_name, product.product_price FROM order_history INNER JOIN product ON order_history.product_id = product.product_id WHERE ord_id=".$_GET['ord_id'];
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_array()) {

?>

<tbody>
  <tr>
    <th><?=$bil++;?></th>
    <td><?=$row['product_name'];?></td>
    <td style="text-align:center;"><?=$row['order_quantity'];?></td>
    <td style="text-align:center;">RM <?=$row['product_price'];?></td>
  </tr>

<?php 
}
} else {
    echo "";
}
$dbcon->close();
?>

  <tr>
    <td colspan="3" style="text-align:right;font-weight:bold;">TOTAL</td>
    <td style="text-align:center;">RM <?=$rowed['order_total']; ?></td>
  </tr>
</tbody>
</table>
</div>

</div>
<!-- ./TAB 2 -->

<!-- TAB 3 -->
<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="home-tab">
<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Payment ID :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    # <?php echo $rowed['payment_id']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Payment Method :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['payment_type']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Total :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    RM <?php echo $rowed['order_total']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date :
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['created_at']; ?>
  </div>
</div>

</div>
</div>
<!-- ./TAB 3 -->

<!-- TAB 4 -->
<div role="tabpanel" class="tab-pane fade" id="shipping" aria-labelledby="home-tab">
<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="" action="">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Shipping ID
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    # <?php echo $rowed['shipping_id']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Shipping Type
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <?php echo $rowed['shipping_type']; ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tracking Number
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left:5%;">
    <input class="form-control" id="" name="tracking_no" value="<?php echo $rowed['tracking_no'];?>"></input>
  </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="" style="float:right;">
    <button type="button" onclick="location.href='orderdetails'" class="btn btn-default">Close</button>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </div>
</div>
</div>
</form>
</div>
<!-- ./TAB 4 -->

</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<?php include('layout/footer.php'); ?>
