<?php
extract($_GET);
$sql="delete from tbl_seat where id = $id";
$compile = mysqli_query($con, $sql);
if ($compile) {
	header("Location:index.php?q=cancel_seat");
}
?>