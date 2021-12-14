<script type="text/javascript">
	function confirmMe(){
		var c = confirm('Are you sure to Change Banner');
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
if (!isset($_SESSION['login']))
{
header("location:index.php?q=admin");
}
?>
<form method="post" action="index.php?q=upload" enctype="multipart/form-data">
<label> Upload new Banner</label>
<input type="file" name="banner"><br>
<input type="submit" name="Upload" onclick="return confirmMe()">
</form>