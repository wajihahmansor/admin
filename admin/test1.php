<?php include('process/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/pic.png" type="image/ico" />

    <title>ANNONA HR</title>

    <!-- calendar -->
    <!-- Bootstrap Core CSS -->
    <link href="../css/calendar/bootstrap.min.css" rel="stylesheet">
    
    <!-- FullCalendar -->
    <link href='../css/calendar/fullcalendar.css' rel='stylesheet' />

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<title>ANNONA HR</title>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/upload.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
<script>
$(document).ready(function(){
$('#image_file').on('change',function(){
$('#upload_form').ajaxForm({
target:'#uploaded_images_preview',
beforeSubmit:function(e){
$('.file_uploading').show();
},
success:function(e){
$('.file_uploading').hide();
},
error:function(e){
}
}).submit();
});
});
</script>


</head>


<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include('layout/sidebar.php'); ?>

<!-- top navigation -->
<?php include('layout/topbar.php'); ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	
	<br>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Responsive Header -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-1169273815439326"
		 data-ad-slot="1311700855"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script><link type="text/css" rel="stylesheet" href="style.css" />
<div class="container">
	<h2>Upload Multiple Images using jQuery, PHP & MySQL</h2>
	<br>
	<br>	
	<form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="upload.php">   
    <label>Choose Multiple Images to Upload</label>
	<br>
	<br>
    <input type="file" name="upload_images[]" id="image_file" multiple >
    <div class="file_uploading hidden">
        <label>&nbsp;</label>
        <img src="uploading.gif" alt="Uploading......"/>
    </div>
	</form>
	<div id="uploaded_images_preview"></div>
	
</div>
<div class="insert-post-ads1" style="margin-top:20px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Responsive Header -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-1169273815439326"
		 data-ad-slot="7951723253"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
</div>

</div>
</div>
<!-- /page content -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49752503-1', 'auto');
  ga('send', 'pageview');

</script>

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
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
       
</body>
</html>

