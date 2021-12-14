<?php
function select_footer($con){
$sql = "select * from tbl_contact where ID = 4";
$compile = mysqli_query($con,$sql);
$fetch = mysqli_fetch_row($compile);
}
$fetch=select_footer($con);

?>


<form method="POST" action="index.php?q=update_footer">
	<label>Description for footer</label><br>
	<textarea name="description" style="width: 600px;height: 300px;"><?php echo $fetch[1];?></textarea>
	<input type="Submit"  value="Save"> 
</form>