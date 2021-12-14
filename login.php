<?php
extract($_POST);
$sql = "select * from tbl_admin where user_name='$user' and pass_word = md5('$pass')";
$compile = mysqli_query($con, $sql);
$data = mysqli_fetch_row($compile);
	if($data[1] != '')
	{
		$_SESSION['login']=1;
		$_SESSION['user']=$user;
	header("Location:index.php?q=dashboard");
	}
	else
	{
	header("Location:index.php?q=admin&msg=error");
	}
?>
