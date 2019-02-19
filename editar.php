<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "contacto";

	//conexion a la base de datos
	
	$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

	//informacion del formulario con el atributo NAME
	
    $usuarioConsulta = $_POST['nombreUsuario'];
    $contrasenaConsulta = $_POST['contrasena'];
	

    //comandos de SQL agregar
  

	$actualizar = "UPDATE usuarios SET contrasena='$contrasenaConsulta'
	WHERE nombreUsuario='$usuarioConsulta'";

	if (mysqli_query($conexion, $actualizar)) 
		{
        echo "<h4> Todo se agrego correctamente</4>";
	} else {
		echo "<h4 class='red'> Hay un error</h4>";
	}

    mysqli_close($conexion);


?>