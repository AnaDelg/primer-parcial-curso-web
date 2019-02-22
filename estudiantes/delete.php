<?php
	include('../db/conexion.php');

	if($_GET){
		$id = $_GET['id'];
		
		$borrar = "DELETE FROM estudiantes WHERE idEstudiantes= '$id'";
		
		if (mysqli_query($conexion, $borrar)) 
			{
			echo "<h4> Estudiante borrado correctamente</4>";
		} else {
			echo "<h4 class='red'> Hay un error, no se borro el usuario</h4>";
		}

		mysqli_close($conexion);
	}
