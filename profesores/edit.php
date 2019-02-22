<?php
	include('../db/conexion.php');
	include('../header.php');

	if($_GET){
		$id = $_GET['id'];

		$consultar = mysqli_query($conexion, "SELECT * FROM profesores WHERE idProfesores=".$id);

		if(mysqli_num_rows($consultar) <= 0){
			echo '<tr><td colspan="8">No hay datos.</td></tr>';
			die;
		}else{
			$profesor = mysqli_fetch_assoc($consultar);
		}

		mysqli_close($conexion);
	}else if($_POST){
		extract($_POST);

		$actualizar = "UPDATE profesores SET nombre='$nombre', apellido='$apellido', direccion='$direccion', materia='$materia'
		WHERE idProfesores='$id'";

		if (mysqli_query($conexion, $actualizar)) 
			{
			echo "<h4> Edicion completada.</4>";
		} else {
			echo "<h4 class='red'> Hay un error</h4>";
		}
		
		mysqli_close($conexion);

		die;
	}
?>

<div class="contact1">
	<div class="container-contact1">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="../images/img-01.png" alt="IMG">
		</div>

		<!-- Este es su formulario damas y caballeros -->

		<form class="contact1-form validate-form" action="edit.php" method="POST">
			<span class="contact1-form-title">
				Cambiar datos del profesor.<br />	
			</span>


			<span class="contact1-form-title">
				Campos a modificar
			</span>

			<input type="hidden" name="id" value="<?php echo $id; ?>">

			<div class="wrap-input1 validate-input" data-validate = "Nombre es necesario">
				<input class="input1" type="text" name="nombre" placeholder="Nombre" value="<?php echo $profesor['nombre'];?>">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Apellido es necesario">
				<input class="input1" type="text" name="apellido" placeholder="Nuevo Apellido" value="<?php echo $profesor['apellido'];?>">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Direccion">
				<input class="input1" type="text" name="direccion" placeholder="Nueva Direccion" value="<?php echo $profesor['direccion'];?>">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Materia">
				<input class="input1" type="text" name="materia" placeholder="Nueva Materia" value="<?php echo $profesor['materia'];?>">
				<span class="shadow-input1"></span>
			</div>

			
			<div class="container-contact1-form-btn">
				<button type="submit" class="contact1-form-btn">
					<span>
						Cambiar
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</span>
				</button>
			</div>
		</form>
	</div>
</div>
	
<?php include('../footer.php');