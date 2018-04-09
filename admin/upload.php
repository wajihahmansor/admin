<?php
include ('db.php');

$uploaded_images = array();

foreach($_FILES['slider_image']['name'] as $key=>$val){
	$upload_dir = "component/slider/";
	$upload_file = $upload_dir.$_FILES['slider_image']['name'][$key];
	$filename = $_FILES['slider_image']['name'][$key];

if(move_uploaded_file($_FILES['slider_image']['tmp_name'][$key],$upload_file)){
	$uploaded_images[] = $upload_file;
	$insert_sql = "INSERT INTO slider(slider_id, slider_image, created_at)VALUES('', '".$filename."', now())";
	mysqli_query($dbcon, $insert_sql) or die("database error: ". mysqli_error($dbcon));
}
}
?>

<div class="row">
<div class="gallery">
<?php
if(!empty($uploaded_images)){
foreach($uploaded_images as $image){ ?>
<ul>
<li >
<img class="images" src="<?php echo $image; ?>" alt="">
<?php
if(isset($_GET['slider_id']))
{
  $sql_query= "SELECT * FROM slider WHERE slider_id=".$_GET['slider_id'];
  $result_set =mysql_query($sql_query);
  $rowed = mysql_fetch_array($result_set);
}
?>
<form method="get">
<center><button class="btn btn-xs btn-danger" style="margin-top:5%;" type="submit" onclick="location.href='process/deleteslider?slider_id=<?$rowed['slider_id'];?>'">Delete</button></center>
</form>
</li>
</ul>
<?php }	}?>
</div>
</div>