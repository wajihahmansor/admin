<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="" class="site_title"><i class="fa fa-asterisk"></i><span style="font-size:20px;"> MOS Nutraceutical</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="../images/employee/<?php echo $employee_image; ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo $role_position ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="index"><i class="fa fa-home"></i> Dashboard</a>
          </li>
          <!--<li><a href="orderdetails"><i class="fa fa-cube"></i> Order Details</a>-->
          </li>
          <li><a><i class="fa fa-barcode"></i> Products <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="product">Product</a></li>
              <li><a href="product_sales">Product Sales</a></li>
              <li><a href="best_seller">Best Seller</a></li>
              <li><a href="category">Category</a></li>
              <li><a href="promotion">Promotion</a></li>
              <!--<li><a href="addimage">Add Image</a></li>-->
            </ul>
          </li>
          <li><a><i class="fa fa-money"></i>Sales<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="customer">Customer</a></li>
              <li><a href="challenge">Challenge & Reward</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-cog"></i>Setting<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="ads">Product ADS</a></li>
              <li><a href="recordsale">Record Sales</a></li>
              <li><a href="shipping">Shipping</a></li>
              <li><a href="payment">Payment</a></li>
              <li><a href="user">Users</a></li>
              <li><a href="invoice">Invoice</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-windows"></i>Extension<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="slider">Slider</a></li>
              <li><a href="company">Company</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>