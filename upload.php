<?php 
extract($_POST);
$name = $_FILES['banner']['name'];
$path = $_FILES['banner']['tmp_name'];
$folder="image/";
move_uploaded_file($path, $folder.$name);
$query = "update tbl_banner set banner_name='$name' where id = 1";
$complie = mysqli_query($con, $query);
if($complie) 
{
	header("Location:index.php?q=dashboard");
}

 ?>