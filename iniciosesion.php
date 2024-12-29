<?php
include 'cabecerainicio.php';

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
<div class="iniciosesion-general ">
	<div class="iniciosesionlogo animate__animated animate__backInDown">

		<img src="imagenes/logo-CEb.png">
	</div> 

	<div class="iniciosesion-cont">
		<div class="iniciosesion animate__animated animate__zoomInUp">

			<div class="iniciosesionform">
				<form class="iniciosesion1" action="iniciosesion1.php" method="post">

					<label>Usuario</label><br>
					<input type="text" name="usuario" placeholder="inserte su usuario" required><br><br><br>
					<label>Contraseña</label><br>
					<input type="password" name="clave" placeholder="digite su clave" required><br><br><br>
					
					<div class="btn-iniciar"> <input type="submit" name="Iniciar" id="iniciar" value="Inicie sesión"></div> <br><br><br>
					<!-- <center><p id="inicio_p"><h3>Regístrese <a href="registro.php">Aquí</a></h3></p></center>  -->
				</form>

			</div>

		</div>
	</div>
</div>

<?php

include 'pie.php';

?>