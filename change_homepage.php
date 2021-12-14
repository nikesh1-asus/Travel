<?php
function select_home($con){
$sql= "select * from tbl_contact where ID=1";
$compile=mysqli_query($con,$sql);
$fetch= mysqli_fetch_row($compile);

}

$fetch=select_home($con);
?>

<form method="post" action="index.php?q=update_homepage">
	<label >Title</label><br>
	<input type="text" name="title" value="<?php echo $fetch[1]; ?>"><br>

	<label>Description</label><br>
	<textarea name="description" style="width: 600px; height:300px"> <?php echo $fetch[2] ?> </textarea>
	 <br>

	<input type="submit" value="Save" name="">

</form>