<?php
include 'cabecerainicio.php';

?>

<div class="iniciosesion-general ">
	<div class="iniciosesionlogo animate__animated animate__zoomInUp">

		<img src="imagenes/logo-CEb.png">
	</div> 

	<div class="iniciosesion-cont">
		<div class="iniciosesion animate__animated animate__zoomInUp">
			<div class="iniciosesionimg">
				<img src="imagenes/candado.png">

			</div>

			<div class="iniciosesionform">
				<form action="admin1.php" method="post">

					<label>Usuario</label><br>
					<input type="text" name="usuarioadmi" placeholder="inserte su uruario" required><br><br><br>
					<label>Contraseña</label><br>
					<input type="password" name="claveadmi" placeholder="digite su clave" required><br><br><br>
					
					<div class="btn-iniciar"> <input type="submit" name="Iniciar" id="iniciar" value="Inicie sesión"></div> <br><br><br>
					 
				</form>

			</div>

		</div>
	</div>
</div>
<?php
include 'pie.php';
?>