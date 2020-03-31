<?php
	echo "<h2>Registro de users</h2> 
		<form action='".$_SERVER['PHP_SELF']."' method='POST'> 
			<p><label for='username'>Username: </label><br> 
			<input type='text' name='user'></p> 

			<p><label for='groupname'>Groupname: </label><br> 
			<input type='text' name='group'></p> 

			<p><label for='groupname'>Department: </label><br> 
			<input type='text' name='department'></p> 

			<p><label for='folder'>Folder: </label><br> 
			<input type='text' name='folder'></p>

			<p><label for='password'>Password: </label><br> 
			<input type='text' name='passw'></p>

			<p><input type='submit' value='Registrarse' name='create'></p>
			<p><input type='submit' value='Menú principal ' name='principal'></p>
		 </form>";
?>