
<h1>User</h1>


<form method="post" action="user/create">
	<label>Login:</label><input type="text"  name="login"><br>
	<label>Password:</label><input type="password" name="password"><br>
	<label>Role:</label>
	<select name="role">
		<option value="default">default</option>
		<option value="admin">admin</option>
	</select><br>
	<label>&nbsp;</label><input type="submit"><br>

</form>
<table>
<?php 
    foreach ($this->userList as $key => $value) {
    	
    	echo '<tr>';
    	echo '<td>'. $value['userid'] . '</td>';
    	echo '<td>'. $value['login'] . '</td>';
    	echo '<td>'. $value['role'] . '</td>';
    	echo '<td> <a href="'.URL.'user/edit/'.$value['userid'].'">Edit </a><a href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
    	echo '</tr>';
    }

 ?>
 </table>