
<?php
$sql= "select * from tbl_contact where link='footer' ";
$compile = mysqli_query($con, $sql);
$row = mysqli_fetch_row($compile);
//print_r($row);
//exit;

?>
<p>
<?php echo $row[2]; ?> 
</p>