<?php
extract($_POST);
$sql = "insert into tbl_inquiry(contact_name, email, address, contact_number, contact_message) values('$fname','$email', '$address', '$contact', '$message')";

$compile = mysqli_query ($con, $sql);
header("locatopn:index.php?q=contactus&msg=show");

?>