<?php
	include('../db/conexion.php');

	if ($_POST)	{

		extract($_POST);
		
		$agregar = "INSERT INTO profesores (nombre, apellido, direccion, materia)
		VALUES ('$nombre', '$apellido', '$direccion', '$materia')";
		
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
					Registrar Profesor
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Nombre es necesario">
					<input class="input1" type="text" name="nombre" placeholder="Nombre">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Apellido es necesario">
					<input class="input1" type="text" name="apellido" placeholder="Apellido">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Direccion">
					<input class="input1" type="text" name="direccion" placeholder="Direccion">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Materia">
					<input class="input1" type="text" name="materia" placeholder="materia">
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