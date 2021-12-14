<div style="text-align: center; color: red;">
<form method="post" action="index.php?q=bookticket&task=show">

	<label>Select Destination</label>
	<select name="destination">
		<?php
			$sql = "select * from tbl_destination";
			$compile = mysqli_query($con, $sql);
			while($row = mysqli_fetch_array($compile)) {
		?>
		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
		<?php } ?>
	</select>
	<input type="submit" value="Go" name="">
</form>

<?php
	if(isset($_GET['task'])) //isset check data
	{ 
		extract($_POST);
		$seat[]='';
		$sql = "select * from tbl_seat where destination_id = $destination";
		$compile = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($compile)) {
			$seat[]=$row[2];
		}
		if(in_array('1',$seat))
		{	
		$bgcolor1 = "background-color:red";
		}
		if(in_array('2',$seat))
		{	
		$bgcolor2 = "background-color:red";
		}
		if(in_array('3',$seat))
		{	
		$bgcolor3 = "background-color:red";
		}
		if(in_array('4',$seat))
		{	
		$bgcolor4 = "background-color:red";
		}
		if(in_array('5',$seat))
		{	
		$bgcolor5 = "background-color:red";
		}
		if(in_array('6',$seat))
		{	
		$bgcolor6 = "background-color:red";
		}
		if(in_array('7',$seat))
		{	
		$bgcolor7 = "background-color:red";
		}
		if(in_array('8',$seat))
		{	
		$bgcolor8 = "background-color:red";
		}
?>
<!-- Creating html seat design -->
<table border="1" cellspacing="5" cellpadding="5" width="300" align="center">
	<tr>
		<td>A</td>
		<td>&nbsp;</td>
		<td>B</td>
	</tr>

	<tr>
		<td><span style="padding: 5px;<?php echo $bgcolor1; ?>">1</span>
		 &nbsp;&nbsp; <span style="padding: 5px;<?php echo $bgcolor2; ?>"> 2</span></td>
		<td>&nbsp;</td>
		<td><span style="padding: 5px;<?php echo $bgcolor3; ?>">3</span> &nbsp;&nbsp; <span style="<?php echo $bgcolor4; ?>">4 </span></td>
	</tr>
	<tr>
		<td><span style="padding: 5px;<?php echo $bgcolor5; ?>"> 5 &nbsp;&nbsp;</span> <span style="<?php echo $bgcolor6; ?>">6</span> </td>
		<td>&nbsp;</td>
		<td><span style="padding: 5px;<?php echo $bgcolor7; ?>">7</span> &nbsp;&nbsp; <span style="<?php echo $bgcolor8; ?>"> 8</span></td>
	</tr>
</table>
<!-- Customer Info -->
<form method="post" action="index.php?q=customer_save">
	<input type="hidden" name="destination" value="<?php echo $destination; ?>">
	<label>Enter name:</label><br>
	<input type="text" name="c_name" id="c_name">
	<br>
	<label>Enter Contact:</label><br>
	<input type="number" name="c_num" id="c_num">
	<br>
	<label>Enter Email:</label><br>
	<input type="email" name="c_email" id="c_email">
	<br>
	<label>Enter date:</label><br>
	<input type="date" name="c_date" id="c_date">
	<br>
	<label>Enter Address:</label><br>
	<input type="text" name="c_address" id="c_address">
	<br>

	<label>Select Seat</label>
	<br>
	<input type="checkbox" name="seat[]" value="1">1
	<input type="checkbox" name="seat[]" value="2">2<br>
	<input type="checkbox" name="seat[]" value="3">3
	<input type="checkbox" name="seat[]" value="4">4<br>
	<input type="checkbox" name="seat[]" value="5">5
	<input type="checkbox" name="seat[]" value="6">6<br>
	<input type="checkbox" name="seat[]" value="7">7
	<input type="checkbox" name="seat[]" value="8">8<br>
	<input type="submit" value="Book" name="">
</form>
<?php } ?>

</div>