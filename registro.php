<?php
include_once 'db.php';
include 'cabecerainicio.php';
$conectar= coneet();

if (isset($_GET['code'])) {
	// code...
setcookie('referido',$_GET['code'],time()+3600*12);
// $refer=($_COOKIE['referido']);
}
?>
<div class="inicio_enc">
	<div class="inicio_enc_cont">
		<div class="inicio_enc_cont1">
			<div class="line"></div>
			<div class="si_votamos">
			<h1>¡SI ELEGIMOS BIEN, GANA COLOMBIA,</h1>
			</div>
			<div class="line"></div>
		</div>			
		<div class="inicio_enc_conte">
			<div class="inicio_enc_conte1">
				<h1 id="gana">GANAMOS &nbsp; </h1>
				<h1 id="tod"> TODOS!</h1>
			</div>
			<div class="inicio_enc_conte2">
				<!-- <button>QUIERO SER TESTIGO</button> -->
			</div>
		</div><br>	
	</div>
</div><br>
<div class="general">
	<div class="registrologo-general">
		<div class="registrologo animate__animated animate__backInDown" >

			<img src="imagenes/logo-CEb.png">
		</div>

		<div class="registro animate__animated animate__backInDown">
			<div class="registroform">

					<form class="registro1" action="registro1.php" method="post">
						<label>Nombre</label><br>
						<input type="text" name="nombre" placeholder="Pedro antonio" required><br><br>
						<label>Apellido</label><br>
						<input type="text" name="apellido" placeholder="Perez diaz" required><br><br>
						<label>Correo electónico</label><br>
						<input type="email" name="email" placeholder="pedrop@xxx-com" required><br><br>
						<label>Usuario</label><br>
						<input type="text" name="usuario" placeholder="cree un seudonimo o utilice su email" required><br><br>
						<label>Contraseña</label><br>
						<input type="password" name="clave" placeholder="cree una contraseña" required><br><br>
						<!-- <input type="text" name="referido" value="<?php echo $refer;?>" hidden><br><br> -->
						<div class="registrar">
							<input type="submit" name="Registrar" id="registrar" value="Registrarse">
						</div>
						
					</form>
				
			</div>

		</div>
</div>

	
<?php

include 'pie.php';

?>