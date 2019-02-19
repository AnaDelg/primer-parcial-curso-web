<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "contacto";

	//conexion a la base de datos
	
	$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

	//informacion del formulario con el atributo NAME
	
	$nombreConsulta = $_POST['nombre'];
    $usuarioConsulta = $_POST['nombreUsuario'];
    $contrasenaConsulta = $_POST['contrasena'];
	$emailConsulta = $_POST['email'];
    $posicionConsulta = $_POST['posicion'];

	//comandos de SQL agregar

	$agregar = "INSERT INTO usuarios (nombre, nombreUsuario, contrasena, email, posicion)
	VALUES ('$nombreConsulta', '$usuarioConsulta', '$contrasenaConsulta', '$emailConsulta', '$posicionConsulta')";

	if (mysqli_query($conexion, $agregar)) 
		{
        echo "<h4> Todo se agrego correctamente</4>";
	} else {
		echo "<h4 class='red'> Hay un error</h4>";
	}

    mysqli_close($conexion);


?>