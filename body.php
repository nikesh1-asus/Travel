
<?php
$sql = "select * from tbl_contact";
$compile = mysqli_query($con, $sql);
$row = mysqli_fetch_row($compile);
?>

<div>

	<h2><?php echo $row[1];?> </h2><br>
	<?php echo $row[2]; ?>
</div>


