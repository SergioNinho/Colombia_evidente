<?php

include 'cabecera.php';
include_once 'db.php';

$conectar= coneet();
$sql=$conectar->query("SELECT * from registro_testigo where usuario='$miembro'");

?>

<div class="testigo_regis_encab">
	<img src="imagenes/BANNER23.jpg">
</div>
<section class="datos_perfil">
	<div class="datos_perfil1">
		<div class="datos_perfil_logo animate__animated animate__backInDown" >

			<img src="imagenes/logo-CEb.png">
		</div>
	</div>
	

			<?php $mostrar=$sql->fetch_assoc();

			if (isset($mostrar['usuario'])==$miembro) {
				// code...
			

			?>
	<div class="actualizar_perfil_datos">

		<ul>				
		<li><?php echo "Nombre:"." " .$mostrar['nombre'];?></li>
		<li><?php echo "Apellido:"." " .$mostrar['apellido'];?></li>
		<li><?php echo "Usuario:"." " .$mostrar['usuario'];?></li>
		<li><?php echo "Email:"." " .$mostrar['email'];?></li>
		<li><?php echo "Contacto:"." " .$mostrar['tel'];?></li>
		<li><?php echo "Tipo de documento:"." " .$mostrar['tdd'];?></li>
		<li><?php echo "Número de documento:"." " .$mostrar['documento'];?></li>
		<li><?php echo "País:"." " .$mostrar['pais'];?></li>
		<li><?php echo "Estado/Ciudad:"." " .$mostrar['departamento'];?></li>
		<li><?php echo "Municipio/consulado:"." " .$mostrar['municipio'];?></li>
		<li><?php echo "Dirección:"." " .$mostrar['direccion'];?></li>
		<li><?php echo "Zona:"." " .$mostrar['zona'];?></li>
		<li><?php echo "Puesto:"." " .$mostrar['puesto'];?></li>
		<li><?php echo "Mesa:"." " .$mostrar['mesa'];?></li>			

		</ul>
		<div class="actualizar_datos_button">
			<a href="actualizar_datos.php"><input type="button" name="actualizardatos" id="act_dat" value="ACTUALIZAR DATOS"> </a><br>
			<a href="testigoregistrado.php"><input type="button" name="actualizardatos" id="volver" value="VOLVER"> </a>
		</div>
	</div>
	<br><br>
</section>

<?php }
	include 'pie.php';
?>