<?php
include 'cabecera.php';
include 'db.php';

$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro_testigo where usuario='$miembro' ");

?>


	<br><br><br><br><br><br><br>
	 <section class="carnet">
		<form >
			<div class="frontal">
				<div class="cabecera">
					<h2>Colombia Evidente</h2>
					<img src="imagenes/logo-CEb.png">
				</div><br>
				<?php
			        $mostrar=$consulta->fetch_assoc();

			        if (("$mostrar[usuario]==$miembro")) {       

			    ?>
				<div class="contenido">
					<div class="info">
						<label>Nombre:</label><br>
						<input type="text" name="nombre" disabled value="<?php echo $mostrar['nombre']; ?>"><br>
						<label>Apellido:</label><br>
						<input type="text" name="apellido" disabled value="<?php echo $mostrar['apellido']; ?>"><br>
						<label>Número de identidad:</label><br>
						<input type="text" name="identificacion" disabled value="<?php echo $mostrar['documento']; ?>"><br>
						<div class="fecha">
							<div class="valido">
							<p><strong>Válido</strong> </p>	
							</div>
							<div class=" desde">
								<p><strong> Desde:</strong></p>
								<p><?php echo $mostrar['fecha'];} ?></p>

							</div>
							<div class="hasta">
								<p><strong>Hasta:</strong></p> 
								<p>2023/12/31</p>
							</div>
							
						
						

						</div>
						

					</div>
					

					<div style="text-align: center; align-content: center; padding-right : 15px; width: 37%; margin-left: 3%;">
						<?php

						require 'phpqrcode/qrlib.php';

						$dir='temp/';

						if (!file_exists($dir))

							mkdir($dir);

							$filemane= $dir .'test.png';

						$tamanio=3;
						$level='H';
						$framesize= 3;
						$contenido="Nombre"." " .$mostrar['nombre']."  ".$mostrar['apellido']." "."Documento" .$mostrar['documento'];

						QRcode::png("https://www.colombiaevidente.org/registro.php?code=".$miembro,$filemane,$level,$tamanio,$framesize);

						echo '<img src="'.$filemane.'"/> ';
 
						?>
						
					</div>
					
				</div>
				<div class="pie">
					<h3><strong>www.colombiaevidente.org</strong> </h3>
				</div>
				
				
			</div>
			<div class="reverso">
				
			</div>
			
		</form><br>
			<button style="background: radial-gradient(ellipse, #F4D03F,40%,#F39C12); border-radius: 10px; width: 35%; height: 40px; margin-left: 200px;"><a href="administrador/seccion/carnet_pdf.php" target="_blank" style="text-decoration: none; color: black; font-family:serif ; </section>font-style: italic;font-size: 120%;">Descargar</a> </button>
	</section><br><br><br>

	

<?php

include 'pie.php';

?>