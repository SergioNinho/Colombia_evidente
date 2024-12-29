<?php
include "cabecerainicio.php";
?>

<body>
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
					<!-- <button href="registro.php">QUIERO SER TESTIGO</button> -->
				</div>
			</div><br>	
		</div>
	</div><br>
	<div class="inicio_par">
		<h3>¡Agradecemos tu compromiso con la democracia! Si deseas
		ingresar a este portal debes registrarte
		</h3>
		<a href="registro.php"><input type="button" name="aqui" value='PRIMER REGISTRO'></a> 
	</div>
	<div class="inicio_cons_tit">
		<div class="inicio_cons_tit1">
			<div class="inicio_cons_tit_cont">
				<h2 id="que">AL REGISTRARTE &nbsp;</h2>
				<h2 id="cons">PODRAS REALIZAR</h2>
			</div>
		</div>
	</div>
	<div class="inicio_img">
		<div class="inicio_superior">
			<div class="super1">
				<img src="imagenes/PAGINA WEB ESTRICTURA-17.png">
				<h3>SER TESTIGO ELECTORAL</h3>
			</div>
			<div class="super1">
				<img src="imagenes/PAGINA WEB ESTRICTURA-18.png">
				<h3>REPORTAR DELITO</h3>
			</div>
			<div class="super1">
				<img src="imagenes/PAGINA WEB ESTRICTURA-19.png">
				<h3>REPORTAR E-14</h3>
			</div>
		</div>
		<div class="inicio_inferior">
			<div class="super1">
				<img src="imagenes/PAGINA WEB ESTRICTURA-20.png">
				<h3>CAPACITACIÓN SOBRE FRAUDE ELECTORAL</h3>
			</div>
			<div class="super1">
				<img src="imagenes/PAGINA WEB ESTRICTURA-21.png">
				<h3>INVITAR AMIGO</h3>
			</div>
			<div class="super1">
				<img src="imagenes/PAGINA WEB ESTRICTURA-22.png">
				<h3>REPORTE DEL DIA-D</h3>
			</div>

		</div>
		<!-- <input type="button" name="registro" value='REGISTRATE'> -->
	</div>
	<div class="inicio_quienes">
		<div class="inicio_quienes_tit">
			<div class="inicio_quienes_tit1">
				<h1>¿QUI&Eacute;NES &nbsp; </h1>
			</div>
			<div class="inicio_quienes_tit2">
				<h1>SOMOS?</h1>
			</div>
			
		</div>
		<div class="inicio_quienes_p">
			<p>Somos una iniciativa civil, suprapartidista y
				transparente que organiza a los ciudadanos
				para presentarse como posibles testigos,
				veedores o jurados electorales voluntarios
				ante la Registraduría General de la Nación
				para servir de “veedores” durante los
				comicios en Colombia.</p>
		</div>
		<div class="inicio_quienes_button" >
			<a href="quienessomos.php"><input type="button" name="vermas" value="VER MAS"></a>
		</div>
	</div>
	<div class="regresivo"> 
        <div class="regreso">
            <strong><h1>AÚN NOS FALTAN:</h1></strong>
            <div class="contador">
                <div class="responsivo1">
                	<div class="cartel">
                		<div id="dias"></div>
                		<div class="h3"><h3>Días</h3></div>
                  		</div>
                	<div class="cartel">
                		<div id="horas"></div>
                		<div class="h3"><h3>Horas</h3></div>
             		 	</div>
                    </div>
                  	<div class="responsivo2">
                  		<div class="cartel">
                    		<div id="minutos"></div>
                    		<div class="h3"><h3>Minutos</h3></div>
                  	</div>
                  	<div class="cartel">
                		<div id="segundos"></div>
                    	<div class="h3"><h3>Segundos</h3></div>
                 	</div>
                </div>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript">
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

	let countDown = new Date('Oct 29, 2023 07:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('dias').innerText = Math.floor(distance / (day)),
        document.getElementById('horas').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutos').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('segundos').innerText = Math.floor((distance % (minute)) / second);

    }, second)
</script>

<?php
  include 'pie.php';
?>