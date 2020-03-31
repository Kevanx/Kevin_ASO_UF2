<html>
	<head>
		<title>Crear Grupo</title>
	</head>
	<body>
		<?php
    	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
	?>
	<form action="controller_create_group.php" method= "POST">
    	<p>Como se llama el grupo? : <input type="text" name="group" size="50"></p>
    	<input type="submit" name="create" value="Enviar">
    	<input type="submit" name="principal" value="Volver">
    	</p>
	</form>
	</body>
</html>
