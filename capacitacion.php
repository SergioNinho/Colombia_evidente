<?php
include 'cabecera.php'
?>

<div class="capacitacion_tit">
	<h1>CAPACITACIONES PARA</h1>
	<h1>TESTIGOS ELECTORALES</h1>
</div>
<div class="capacitacion_cont">
	<div class="capacitacion_cont1">
		<table>
			<tr>
				<th>NOMBRE</th>
				<th>VIDEO</th>
			</tr>
			<?php
			 		include 'db.php';
			 		$conectar= coneet();
					$consulta=$conectar->query("SELECT * from capacitaciones ");
					while ($mostrar=mysqli_fetch_array($consulta)) {					

			 		?>
			<tr>

				<td><?php echo $mostrar['nombre'] ?></td>
				<td><a href="<?php echo $mostrar['link'] ?>" target="_blank"><input type="button" name="buttob_des" value="VER"> </a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
	<div class="capacitacion_cont2">
		<img src="imagenes/capacitaciones.png">
	</div>
</div>

<?php
include 'pie.php';
?>
