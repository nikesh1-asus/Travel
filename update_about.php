<?php
if (!isset($_SESSION['login']))
{
header("location:index.php?q=admin");
}
?>
<?php
extract($_POST);
$query= "update tbl_contact set title='$title', description='$description' where ID=2";
$compile=mysqli_query($con, $query);
header("location:index.php?q=change_about");
?>