<?php

session_start();
if (empty($_SESSION['username'])) {
    header('location:index.php');
}



$miembro=$_SESSION['username'];

include ('../../db.php');

$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro_testigo where usuario='$miembro' ");


ob_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="carnet_pdf.css">
	
	<title>carnet</title>



</head>
<body>
	
	<form >

			<div class="frontal">
				<div class="cabecera">
					<div class="cabecera1">
						<h2>Colombia Evidente</h2>
						<img src="http://www.colombiaevidente.org/imagenes/logo-CEb.png">
					</div><br>

				</div><br><br>
					
				<?php
			        $mostrar=$consulta->fetch_assoc();

			        if (("$mostrar[usuario]==$miembro")) {       

			    ?>
				<div class="contenido">
					<div class="info">
						<div class="form">
							<label>Nombre:</label><br>
							<input type="text" name="nombre" disabled value="<?php echo $mostrar['nombre']; ?>"><br>
							<label>Apellido:</label><br>
							<input type="text" name="apellido" disabled value="<?php echo $mostrar['apellido']; ?>"><br>
							<label>Número de identidad:</label><br>
							<input type="text" name="identificacion" disabled value="<?php echo $mostrar['documento']; ?>"><br></div><br><br><br><br>

								
							<p><strong>Valido:  Desde:</strong><?php echo $mostrar['fecha'];} ?>  <strong>Hasta:</strong> 2023/12/31 </p>
									
								
						</div>
						
						
						
						

					</div>
					

					<div class="codigo">
						<?php

						require ('../../phpqrcode/qrlib.php');

						$dir='temp/';

						if (!file_exists($dir))

							mkdir($dir);





							$filemane= $dir .'test.png';

						$tamanio=2;
						$level='H';
						$framesize= 1;
						$contenido="Nombre"." " .$mostrar['nombre']." " .$mostrar['apellido']." "."Documento" .$mostrar['documento'] ;

						QRcode::png("https://www.colombiaevidente.org/registro.php?code=".$miembro,$filemane,$level,$tamanio,$framesize);

						echo '<img src="http://www.colombiaevidente.org/administrador/seccion/temp/test.png"/> ';

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
			
</body>

</html>

<?php
$html=ob_get_clean();
//echo $html;


require_once '../libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf= new Dompdf();

$options=$dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('latter');
//$dompdf->setPaper('A4','landscape');

$dompdf->render();
$dompdf->stream("carnet-Colombia_Evidente", array("Attachment"=> true));
echo $dompdf->output();


?>

