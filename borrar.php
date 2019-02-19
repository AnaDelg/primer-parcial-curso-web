<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "contacto";

	//conexion a la base de datos
	
	$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

	//informacion del formulario con el atributo NAME
	
	$usuarioConsulta = $_POST['nombreUsuario'];
   
    //comandos de SQL agregar

	$borrar = "DELETE FROM usuarios WHERE nombreUsuario= '$usuarioConsulta'";
    // echo $borrar; die;
	if (mysqli_query($conexion, $borrar)) 
		{
        echo "<h4> Usuario borrado correctamente</4>";
	} else {
		echo "<h4 class='red'> Hay un error, no se borro el usuario</h4>";
	}

    mysqli_close($conexion);


?>