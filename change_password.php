<?php if(isset($_GET['msg'])){ ?>
<p style="color: green;">Your Password has been changed Successfully!!</p>
<?php } ?>

<?php if(isset($_GET['error'])){ ?>
<p style="color: red;">Your OlD Password was not match Please re-try!!</p>
<?php } ?>

<?php if(isset($_GET['error1'])){ ?>
<p style="color: red;">Your New Password was not match Please re-try!!</p>
<?php } ?>

<form method="post" action="index.php?q=update_password">
	<label>Old Password</label><br>
	<input type="password" name="old_pass"><br>

	<label>New Password</label><br>
	<input type="password" name="new_pass"><br>

	<label>Re-Password</label><br>
	<input type="password" name="re_pass"><br>

	<input type="submit" value="Save" name="">
</form>