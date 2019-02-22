<?php include('header.php'); ?>
<style type="text/css">	
	* {
		margin:0px;
		padding:0px;
	}

	#header {
		margin:auto;
		width:500px;
		font-family:Arial, Helvetica, sans-serif;
	}

	ul, ol {
		list-style:none;
	}

	.nav > li {
		float:left;
	}

	.nav li a {
		background-color:#57b846;
		color:#fff;
		text-decoration:none;
		padding:10px 12px;
		display:block;

		min-width: 93px;
		height: 50px;
		border-radius: 25px;
		font-family: Montserrat-Bold;
		font-size: 15px;
		line-height: 1.5;
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0 25px;
	}

	.nav li a:hover {
		background-color:#434343;
	}

	.nav li ul {
		display:none;
		position:absolute;
		min-width:140px;
	}

	.nav li:hover > ul {
		display:block;
	}

	.nav li ul li {
		position:top;
	}

	.nav li ul li ul {
		right:-140px;
		top:0px;
	}

</style>

<div class="contact1">
	<div class="container-contact1">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="images/img-01.png" alt="IMG">
		</div>

		<div id="header">
		<ul class="nav">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="estudiantes">Estudiantes</a>
				<ul>
					<li><a href="estudiantes/add.php">Agregar</a></li>
				</ul>
			</li>
			<li><a href="profesores">Profesores</a>
				<ul>
				<li><a href="profesores/add.php">Agregar</a></li>
				</ul>
			</li>
			<li><a href="usuario">Usuarios</a>
				<ul>
				<li><a href="usuario/add.php">Agregar</a></li>
				</ul>
			</li>
		</ul>
	</div>

						
	</div>
</div>
<?php include('footer.php'); ?>