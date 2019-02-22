<?php 
	include ('../db/conexion.php');
	//informacion del formulario con el atributo NAME
	if($_POST){
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
	}
	
	include('../header.php');
?>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="../images/img-01.png" alt="IMG">
			</div>


			<!-- Este es su formulario damas y caballeros -->

			<form class="contact1-form validate-form" action="add.php" method="POST">
				<span class="contact1-form-title">
					Registrarse
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Nombre es necesario">
					<input class="input1" type="text" name="nombre" placeholder="Nombre">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Nombre de usuario">
					<input class="input1" type="text" name="nombreUsuario" placeholder="Nombre de usuario">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Contrasena">
					<input class="input1" type="text" name="contrasena" placeholder="Contrasena">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Coloque un email correcto">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Posicion de trabajo requerido">
					<input class="input1" type="text" name="posicion" placeholder="Posicion de trabajo requerido">
					<span class="shadow-input1"></span>
				</div>
				
				

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit" >
						<span>
							Registrar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<?php include('../footer.php'); ?>
