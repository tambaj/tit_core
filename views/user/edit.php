<h1>User : Edit </h1>


<?php print_r($this->user) ?>

<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
	
	<label>Login:</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>"><br><br><input type="hidden" name="userid" value="<?php echo $this->user[0]['userid'] ?>">
	<label>Password:</label><input type="text" name="password" value=""><br>
	<label>Role:</label>
	<select name="role">
		<option value="default"<?php if($this->user[0]['role'] =='default') echo 'selected'; ?>>default</option>
		<option value="admin"<?php if($this->user[0]['role'] =='admin') echo 'selected'; ?>>admin</option>
		<option value="owner"<?php if($this->user[0]['role'] =='owner') echo 'selected'; ?>>Owner</option>
	</select><br>
	<label>&nbsp;</label><input type="submit"><br>

</form>