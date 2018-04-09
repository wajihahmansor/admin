<?php
 $pdo = new PDO('mysql:host=localhost;dbname=mos', 'root', '');
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT role_id, role_position FROM role ORDER BY role_position ASC";
//Prepare the select statement.
$stmt = $pdo->prepare($sql);
//Execute the statement.
$stmt->execute();
//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="pic.png" type="image/ico" />

    <title>ANNONA HR</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <!-- upload image -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

<style type="text/css">
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>

</head>

<body class="login">
<div>

<div class="login_wrapper">
<div class="animate form login_form">
<section class="login_content">
  <form method="POST" action="process/register.php" enctype="multipart/form-data">
    <input type="hidden" name="new" value="1">
  <h1>Create Account</h1>
    
    <table width="100%">
      <tr>
        <td>
          <div class="form-group">
          <label>Upload Image</label>
          <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="employee_image" name="employee_image">
                </span>
            </span>
            <br><input type="text" class="form-control" readonly>
          </div>
          <img id='img-upload' name="employee_image" width="100px" height="350px"/>
          </div>
        </td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Full Name" name="employee_name" required="" style="text-transform: capitalize"/></td>
      </tr>
      <tr>
        <td><input type="email" class="form-control" placeholder="Email" name="employee_email" required="" /></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Phone Number" name="employee_phone" required="" /></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Address" name="employee_address" required="" style="text-transform: capitalize;"/></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="City" name="employee_city" required="" style="text-transform: capitalize;"/></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Poscode" name="employee_poscode" required="" /></td>
      </tr>
      <tr>
        <td>
          <select class="form-control" name="employee_state" required="" style="text-transform: capitalize">
            <option disabled selected>State</option>
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
          </select><br>
        </td>
      </tr>
      <tr>
        <td>
          <select class="form-control" name="role_id" required="">
            <option disabled selected>Choose your position</option>
            <?php foreach($users as $user): ?>
            <option value="<?= $user['role_id']; ?>"><?= $user['role_position']; ?></option>
            <?php endforeach; ?>
          </select><br>
        </td>
      </tr>
      <tr>
        <td><input type="password" class="form-control" placeholder="Password" name="employee_password" required="" /></td>
      </tr>
    </table>

    <div>
      <button class="btn btn-default" type="submit" name="submit_register">Submit</button>
    </div>

    <div class="clearfix"></div>

    <div class="separator">
      <p class="change_link">Already a member ?
        <a href="index" class="to_register"> Log in </a>
      </p>

      <div class="clearfix"></div>
      <br />

      <div>
        <h1><i class=""></i> MOS NUCTRACEUTICAL</h1>
        <p>©2018 All Rights Reserved. MOS Nuctraceutical .</p>
      </div>
    </div>
  </form>
</section>
</div>

<div class="animate form registration_form">
    
  </div>
</div>
</div>
</body>
</html>

<script type="text/javascript">
$(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#employee_image").change(function(){
        readURL(this);
    });   
  });
</script>