<script type="text/javascript">
	function confirmMe(){
		var c = confirm("About Content was change Successfullu");
		if (c) {
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
<?php
function select_about($con){
$sql= "select * from tbl_contact where ID=2";
$compile=mysqli_query($con,$sql);
$fetch= mysqli_fetch_row($compile);
return $fetch;

}
$fetch =select_about($con)

?>
<form method="post" action="index.php?q=update_about">
	<label >Title</label><br>
	<input type="text" name="title" <?php echo $fetch[1]; ?>><br>

	<label>Description</label><br>
	<textarea name="description" style="width: 600px; height:300px"> <?php echo $fetch[2] ?> </textarea>
	<br><br>
	<input type="submit" value="Save" name="" onclick="confirmMe()">
</form>