<?php
extract($_POST);
$query = "update tbl_contact set  title='$title', description='$description'  where ID = 4";
$compile = mysqli_query($con, $query);
header("Location:index.php?q=change_footer");

?>