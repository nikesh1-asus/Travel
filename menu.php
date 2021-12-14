<div align="center" class="navmenu">
	<?php 
	if (isset($_SESSION['login']))
{
	?>
<span> welcome 
<?php	
echo $_SESSION['user'];
?>

</span>
<?php } ?>
	<a href="index.php">Home </a>
	<a href="index.php?q=about"> About  </a>
	<a href="index.php?q=contactus"> Contact </a>
	<a href="index.php?q=book_ticket">Book Ticket </a>
<?php
	if (isset($_SESSION['login']))
{
	?>
<a href="index.php?q=dashboard">Dashboard </a>
<?php }
else
{
 ?>
<a href="index.php?q=admin">Admin </a>
<?php	}
?>
</div>