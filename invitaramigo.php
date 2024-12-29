<?php
include 'cabecera.php';
include 'db.php';
?>
<br>
<div class="usuario_encab">
	<img src="imagenes/BANNER1.jpg">
</div>
<section class="invitar">
	<div class="invitar_cont">
		<h1>¡Invita a tus amigos a cuidar la democracia!</h1><br>
		<h1>Juntos somos invencibles</h1><br><br>

		<div style="width: 100%; display: flex; justify-content: center;">
			
			<input type="text" name="link" value="http://www.colombiaevidente.org/registro.php?code=<?php echo $miembro ; ?> " style="background-color: gainsboro ; width: 40%;margin-right: 5px;" id="text1" onClick="this.select()" readonly="readonly" >

			<input type="button" name="boton" value="Copiar enlace" style="border: solid 1px black; border-radius:5px; background-color: gray ; color: white; width: 20%; height: 40px; cursor: pointer;" id="copy" >
			<br>								

			<script type="text/javascript">
			var button= document.getElementById("copy"),
				input= document.getElementById("text1");
				
			button.addEventListener("click", function(event) {
				event.preventDefault();
				input.select();
				document.execCommand("copy");
				document.getElementById("parrafo").innerHTML="Enlace copiado en portapapeles, ya puedes pegarlo en whatsapp o en tus redes sociales y enviarlo a tus amigos";
			}	
			)
			
			</script>		
			
		
	</div><br>
	</div><br>
		<center><div id="parrafo" style="color:red;" ></div><center><br>
	<center> <strong> <h3>*Envía este enlace a tus amigos*</h3></strong> </center><br><br><br>

	<?php

	$conectar= coneet();
	$consulta=$conectar->query("SELECT * from registro where referido='$miembro' ");
	$contar=$consulta->num_rows;
	$conteo=1;
	

	if ($contar==0) {
	echo "<br><center><h2>*Aún no tienes referidos, ¿qué esperas para invitar a tus amigos?*</h2></center><br><br>";
	}else{
		?>
        
		<div style="width:100%;"><center><h3>Listado de referidos</h3> <table style="background: black; border-collapse: collapse;">
			<tr style="font-size:20px; font-style: !important; font-family: serif ; text-align: center; color: white; ">
				<td>item</td>
				<td>Nombre</td>
				<td>Apellido</td>
			</tr>
		
		<?php
		$conectar= coneet();
		$consulta=$conectar->query("SELECT * from registro where referido='$miembro' ");
		while ($mostrar=mysqli_fetch_array($consulta)) {?>

			<tr style=" background: white; font-size: 17px; border: hidden; text-align: center; 
			height: 20px; ">
				<td style="width:50px;"> <?php echo $conteo++ ; ?></td>
				<td style="width:200px;"><?php echo $mostrar['nombre']; ?></td>
				<td style="width:200px;"><?php echo $mostrar['apellido']; ?></td>
			</tr>
				<?php		
				}
				}

				
				?>

		</table></center> </div>

	
</section>
<?php
include'pie.php';
?>