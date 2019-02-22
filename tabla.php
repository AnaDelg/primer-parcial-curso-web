<?php 
	if (isset($_GET['nombre'])){
		$filter = $_GET['nombre'];
	}

	include('header.php');
?>

<div>
	<p>Buscar por nombre:</p>
	<form><input name="nombre" id="nombre" type="text"><button type="submit">Buscar</button> </form>
</div>
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>APELLIDO</th>
			<th>DIRECCION</th>
		</tr>
		<?php include('conexion.php');
		if($filter){
			$sql = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE nombre='$filter' ORDER BY codigo ASC");
		}else{
			$sql = mysqli_query($conexion, "SELECT * FROM estudiantes ORDER BY codigo ASC");
		}
		if(mysqli_num_rows($sql) == 0){
			echo '<tr><td colspan="8">No hay datos.</td></tr>';
		}else{
			$no = 1;
			while($row = mysqli_fetch_assoc($sql)){
				echo '
				<tr>
					<td>'.$row['idEstudiante'].'</td>
					<td>'.$row['NOMBRE'].'</td>
					<td>'.$row['APELLIDO'].'</td>
					<td>'.$row['DIRECCION'].'</td>
					
					
					<td>

						<a href="edit.phnip?k='.$row['idEstudiante'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						<a href="index.php?aksi=delete&nik='.$row['idEstudiante'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombres'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					</td>
				</tr>
				';
				
			}
		}
		?>
	</table>
	</div>
</div>
<?php include('footer.php'); ?>