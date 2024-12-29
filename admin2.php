<style type="text/css">
	.selectadmin{
		width: 100%;
		display: flex;
	}
	.selectadmin1{
		width: 80%;
		margin: auto;
		margin-top: 20px;
		height: 40px;
		border-radius: 10px;
	}

	.tabla{
		width: 100%;
		font-family: !important;
		align-content: center;
		justify-items: center;
		text-align: center;	
		
	}
	
	.tabla1{
		width: 100%;	

	}
	.tabla1col{
		width: 25%;	

	}
</style>
<?php

	include 'cabeceraadmin.php';
	include 'db.php';

	$selectadmi = $_POST['selectadmin1'];

	$conectar= coneet();

	if ($selectadmi=='0') {
		header ('location:administrador.php');
	}

	if ($selectadmi== '1') {
		?>
		<p><a href="administrador.php" style="text-decoration: none; margin-left:20px; margin-top: 50px; font-size:20px;"><-Realiza otra consulta </p>
		<div class="selectadmin1">
			<table class="tabla">
				<tbody class="tabla1">
					<tr>
					<td>item</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Usuario</td>
					<td>Correo</td>
					<td>Referido</td>
				</tr>
				<?php
				$conteo =1;
				$consulta=$conectar->query("SELECT * from registro");				
				while ($mostrar=mysqli_fetch_array($consulta)){
					?>
				<tr>
					<td><?php echo $conteo++;?></td>
					<td><?php echo $mostrar["nombre"];?></td>
					<td><?php echo $mostrar["apellido"];?></td>
					<td><?php echo $mostrar["usuario"];?></td>
					<td><?php echo $mostrar["email"];?></td>
					<td><?php echo $mostrar["referido"];?></td>
				</tr>
				<?php 
				}
				?>
				</tbody>
				
			</table>
			
		</div>
		
		<?php 		
	
	}
	if ($selectadmi== '2') {
		
		?>
		<p><a href="administrador.php" style="text-decoration: none; margin-left:20px; margin-top: 50px; font-size:20px;"><-Realiza otra consulta </p>
		
		
		<div class="selectadmin1">
			<table class="tabla">
				<tbody class="tabla1">
					<tr>
					<td>item</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Correo</td>
					<td>Telefono</td>
					<td>Departamento</td>
					<td>Municipio</td>
					<td>Puesto</td>
					<td>Mesa</td>
					
				</tr>
				<?php 
				$conteo =1;
				$consulta=$conectar->query("SELECT * from registro_testigo");
				while ($mostrar=mysqli_fetch_array($consulta)){?>
				<tr>
					<td><?php echo $conteo++;?></td>
					<td><?php echo $mostrar["nombre"];?></td>
					<td><?php echo $mostrar["apellido"];?></td>
					<td><?php echo $mostrar["email"];?></td>
					<td><?php echo $mostrar["telfw"];?></td>
					<td><?php echo $mostrar["departamento"];?></td>
					<td><?php echo $mostrar["municipio"];?></td>
					<td><?php echo $mostrar["puesto"];?></td>
					<td><?php echo $mostrar["mesa"];?></td>
				</tr>
				<?php 
			}
			?>
				</tbody>
				
			</table>
			
		</div>			
		
		<?php 	
	
	}
	if ($selectadmi== '3') {
		
		?>
		<p><a href="administrador.php" style="text-decoration: none; margin-left:20px; margin-top: 50px; font-size:20px;"><-Realiza otra consulta </p>
		
		
		<div class="selectadmin1">
			<table class="tabla">
				<tbody class="tabla1">
					<tr>
					<td>item</td>
					<td>Usuario</td>					
					<td>Departamento</td>
					<td>Municipio</td>
					<td>Puesto</td>
					<td>Mesa</td>
					<td>Inscritos</td>
					<td>Votantes</td>
					<td>Comentario</td>
					<td>Fecha</td>


					
				</tr>
				<?php  
				$conteo =1;
				$consulta=$conectar->query("SELECT * from registro_dia_d");
				while ($mostrar=mysqli_fetch_array($consulta)){?>
				<tr>
					<td><?php echo $conteo++;?></td>
					<td><?php echo $mostrar["usuario"];?></td>	
					<td><?php echo $mostrar["departamento"];?></td>
					<td><?php echo $mostrar["municipio"];?></td>
					<td><?php echo $mostrar["puesto"];?></td>
					<td><?php echo $mostrar["mesa"];?></td>
					<td><?php echo $mostrar["inscritos"];?></td>
					<td><?php echo $mostrar["votantes"];?></td>
					<td><?php echo $mostrar["comentario"];?></td>
					<td><?php echo $mostrar["fecha"];?></td>
				</tr>
				<?php 
			}
			?>
				</tbody>
				
			</table>
			
		</div>			
		
		<?php 	
	}
	if ($selectadmi== '4') {
		
		?>
		<p><a href="administrador.php" style="text-decoration: none; margin-left:20px; margin-top: 50px; font-size:20px;"><-Realiza otra consulta </p>
		
		
		<div class="selectadmin1">
			
			<table class="tabla">
				<tbody class="tabla1">
					<tr>
					<td>item</td>
					<td>Usuario</td>					
					<td>Departamento</td>
					<td>Municipio</td>
					<td>Puesto</td>
					<td>Mesa</td>
					<td>Comentario</td>
					<td>Archivo</td>
					
				</tr>
				<?php 
				$conteo =1;
				$consulta=$conectar->query("SELECT * from reportar_e14");
				while ($mostrar=mysqli_fetch_array($consulta)){?>
				<tr>					
					<td><?php echo $conteo++;?></td>
					<td><?php echo $mostrar["usuario"];?></td>	
					<td><?php echo $mostrar["departamento"];?></td>
					<td><?php echo $mostrar["municipio"];?></td>
					<td><?php echo $mostrar["puesto"];?></td>
					<td><?php echo $mostrar["mesa"];?></td>
					<td><?php echo $mostrar["comentario"];?></td>
					<td height="50px"><a href="data:image/png;base64,<?php echo base64_encode($mostrar['archivo']); ?>" download>descargar</a> </td>
				</tr>
				<?php 
				}
				?>
				</tbody>
				
			</table>
			
		</div>

			
		
		<?php 
		
		
	
	}
	
?>


