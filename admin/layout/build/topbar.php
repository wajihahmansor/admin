<?php
$conn = mysqli_connect("localhost","root","","mos");

$result = mysqli_query($conn,"SELECT * FROM employees WHERE employee_email='" . $_SESSION["employee_email"] . "'");
$row  = mysqli_fetch_array($result);
?>
<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
               
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/employee/<?php echo $employee_image; ?>" alt=""><?php echo $employee_name; ?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile"><i class="fa fa-user pull-right"></i> Profile</a></li>
                    <li><a href="../index"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                 <li class="">
                  <a href="">
                    <i class="fa fa-calendar"></i>  
                    <?php
                      $Today=date('y:m:d');
                      $new=date('l, F d, Y',strtotime($Today));
                      echo $new;
                    ?>
                  </a>
                </li>
                </li>

              </ul>
            </nav>
          </div>
        </div>