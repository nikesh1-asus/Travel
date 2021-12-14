<?php
$sql="select * from tbl_contact where link ='about'";
$compile= mysqli_query($con,$sql);
$row = mysqli_fetch_row($compile);
//print_r($row);
//exit;
?>


<h2><?php echo $row[1];?></h2>
<p>
	<?php echo $row[2]; ?>
</p>
