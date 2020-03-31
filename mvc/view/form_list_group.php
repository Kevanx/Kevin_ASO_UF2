<html>
	<head>Lista Grupos</head>
	<body>
		<?php
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
		?>
		<table>
	<tr><td>Grup</td><td>Grup</td><td>La resta</td></tr>
		</table>
		<?php
	foreach ($groups as $nom_group => $group){	
	if (!empty($group->group)){
	echo '<input type="radio" name="group" value="'.$group->group.'">'.$group->group.'&nbsp;&nbsp;&nbsp;&nbsp;'.'<br>';
		}


}
		?>
		<?php
	echo "<p><input type='submit' value='Menú principal ' name='principal'></p>
	<p><input type='submit' value='Delete Group' name='delete'></p>
	</form>";
		?>


	</body>
</html>