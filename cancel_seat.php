<script type="text/javascript">
	function confirmMe(){
		var c = confirm("Ae you sure to Cancel Booking Ticket");
		if (c) {
			return true;
		}
		else
		{
			return false;
		}
	}
</script>

<table border="1" cellspacing="2" cellpadding="2" width="700">

<tr>
	<th>ID</th>
	<th>Destination ID</th>
	<th> Seat Number</th>
	<th>Booking Date</th>
</tr>
<?php
function select_booking($con)
$sql = "select *from tbl_seat";
$compile = mysqli_query ($con, $sql);
return $compile;
}
$compile = select_booking($con);
while($row = mysqli_fetch_array($compile)){
?>
<tr>
	<td><?php echo $row[0]; ?> </td>
	<td><?php echo $row[1]; ?></td>
	<td><?php echo $row[2]; ?></td>
	<td><?php echo $row[3]; ?></td>
	<td><a onclick="return confirmMe()" href="index.php?q=delete&id=<?php echo $row[0]; ?>">Cancel</a></td>
</tr>
<?php } ?>
</table>
	
