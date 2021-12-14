<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<?php include('connection.php');?>
<table border ="5" cellpadding="5" cellspacing="5" width="800" align="center" >
<tr>
	<td><?php include('header.php');?></td>
</tr>

<tr>
	<td><?php include('menu.php');?></td>
</tr>

<tr>
	<td><?php 
	if (isset($_GET['q'])) {
		$page =$_GET['q'];
	}
 else
 {
 	$page ='home';
 }
	include("$page.php");?></td>
</tr>

<tr>
	<td><?php include('footer.php');?></td>
</tr>

</table>
</body>
</html>