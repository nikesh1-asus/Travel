<?php
extract($_POST);
$query = "select * from tbl_admin where id=1";
$compile = mysqli_query($con, $query);
$fetch = mysqli_fetch_row($compile);
if ($fetch[2]==md5($old_pass))
{
	if ($new_pass==$re_pass)
	 {
		$sql="update tbl_admin set pass_word = md5('$new_pass') where id=1";
		$compile1=mysqli_query($con, $sql);
		header("location:index.php?q=change_password&msg=success");
	}
	else
	{
		header("location:index.php?q=change_password&error1=TryAgain");
	}
}
else
{
	header("location:index.php?q=change_password&error=TryAgain");
}

?>