<?php

include 'cabecera.php';
include_once 'db.php';

$conectar= coneet();
$sql=$conectar->query("SELECT * from registro_testigo where usuario='$miembro'");

?>

<div class="testigo_regis_encab">
	<img src="imagenes/BANNER23.jpg">
</div>
<br><br>
<div class="inicio_cons_tit_cont">
	<h2 id="que">YA TE ENCUEBTRAS &nbsp;</h2>
	<h2 id="cons">REGISTRADO</h2>
</div>
<div class="inicio_cons_tit_cont">
	<h2 id="registrado">¿QUE DESEAS&nbsp;</h2>
	<h2 id="hacer">HACER?</h2>
	
</div>
<br><br>
<div class="registrado_botones">
	<div class="registrado_botones1">
		<div class="registrado_botones1_1">
			<a href="reporte_e_14.php"><input type="button" name="e_14" value="REPORTAR E_14" id="e_14"></a>
			<a href="reportar_dia_d.php"><input type="button" name="DIA-D" value="REPORTAR DIA-D" id="dia_d"></a>  
		</div>
		<div class="registrado_botones1_2">
			<a href="actualizardatos.php"><input type="button" name="actualizar" value="ACTUALIZAR DATOS" id="datos"></a> 
			<a href="carnet.php" target="_blank"><input type="button" name="carne" value="DESCARGAR CARNET" id="carnet"></a> 
		</div>		

	</div>
</div>
<br><br>

			
<?php 
include'pie.php';
		
?>