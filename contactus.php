<div>
	<script type="text/javascript">
		function Saved() {
		 var c = confirm("Do you want to save send your feedback");
		if (c) {
			return true;
			document.getElementById('demo').innerHTML="Your data have saved successfylly";
		}
		else
		{
			return false;
		 document.getElementById('demo').innerHTML="Your data was not saved";
		}
	}
	</script>

	<form method="post" action="index.php?q=save">
		
		<label> Enter a name</label><br>
		<input type="text" name="fname" id="fname"><br>

		<label>Enter email</label><br>
		<input type="mail" name="email" id="email"><br>
		
		<label>Enter Contact</label> <br>
		<input type="number" name="contact" id="contact"><br>
		
		<label>Enter Address</label><br>
		<input type="text" name="address" id="address"><br>

		<label>Enter a Message</label><br>
		<textarea name="message" id="message"></textarea><br>

		<input type="submit" name="Send" onclick=" Saved()">

		
	</form>
</div>