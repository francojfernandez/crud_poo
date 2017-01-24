<?php 
	$controlador = new controladorEstudiantes();
	if(isset($_GET['id'])){
		$row = $controlador->ver($_GET['id']);
	}else{
		header('Location: index.php');
	}

	if(isset($_POST['enviar'])){
		$controlador->editar($_GET['id'], $_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['telefono']);
		header('Location: index.php');
	}
?>

<form action="" method="POST">
	Cedula: <br>
	<input type="number" name="cedula" value="<?php echo $row['cedula']; ?>" disabled>
	<br><br>
	Nombre: <br>
	<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
	<br><br>
	Apellido: <br>
	<input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required>
	<br><br>
	Edad: <br>
	<input type="text" name="edad" value="<?php echo $row['edad']; ?>" required>
	<br><br>
	Telefono: <br>
	<input type="number" name="telefono" value="<?php echo $row['telefono']; ?>" required>
	<br><br>
	Promedio: <br>
	<input type="number" name="promedio" value="<?php echo $row['promedio']; ?>" disabled>
	<br><br>
	<input type="submit" name="enviar" value="Editar">
</form>