<h2 style=" font-size: 3em;font-weight: 300; color: black; 
display: inline-block;padding-bottom: 5px;">Sign Up</h2>
<?php
if (isset($_SESSION['login']))
{
header("location:index.php?q=dashboard");
}
 if(isset($_GET['msg']))
  { ?>
<div style="color: red">
	Invalid login Please Try again
</div>
<?php } ?>
<form method="post" action="index.php?q=login">

	<label>Username</label><br>
	<input type="text" name="user" id="user"><br>

	<label>Password</label><br>
	<input type="password" name="pass" id="pass"><br>

	<input type="submit" value="Login" name="">

	
</form>