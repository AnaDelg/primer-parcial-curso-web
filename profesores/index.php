<?php 
	if (isset($_GET['id'])){
		$filter = $_GET['id'];
	}
	include('../db/conexion.php');
	include('../header.php');

?>
<h1>Profesores</h1>
<hr>
<div>
	<p>Buscar por id:</p>
	<form><input name="id" id="id" type="text"><button type="submit">Buscar</button> </form>
</div>

<br>

<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Materia</th>
		</tr>
		<?php 
		if(isset($filter)){
			$sql = mysqli_query($conexion, "SELECT * FROM profesores WHERE idProfesores='$filter' ORDER BY idProfesores ASC");
		}else{
			$sql = mysqli_query($conexion, "SELECT * FROM profesores ORDER BY idProfesores ASC");
		}

		if(mysqli_num_rows($sql) <= 0){
			echo '<tr><td colspan="8">No hay datos.</td></tr>';
		}else{
			$no = 1;
			while($row = mysqli_fetch_assoc($sql)){
				
				echo '
				<tr>
					<td>'.$row['idProfesores'].'</td>
					<td>'.$row['nombre'].'</td>
					<td>'.$row['apellido'].'</td>
					<td>'.$row['direccion'].'</td>
					<td>'.$row['materia'].'</td>
					
					
					<td>

						<a href="edit.php?id='.$row['idProfesores'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a href="delete.php?id='.$row['idProfesores'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
					</td>
				</tr>
				';
				
			}
		}
		?>
	</table>
	</div>
</div>
<?php include('../footer.php'); ?>