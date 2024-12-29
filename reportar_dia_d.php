<?php

include 'cabecera.php';
include_once 'db.php';

$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro where usuario='$miembro' ");
$consultaDepart = $conectar->query("SELECT * from departamentos");
?>

<div class="testigo_regis_encab">
	<img src="imagenes/BANNER23.jpg">
</div>
<div class="inicio_cons_tit_cont">
	<h2 id="que">REPORTAR &nbsp;</h2>
	<h2 id="cons">DIA_D</h2>
</div><br><br>
<div class="dia_d_cont">
	
	<form action="reporte_Dia_D1.php" method="post" id="registro_dia_d" enctype="multipart/formdata"><br><br>

                <?php
                 $mostrar=$consulta->fetch_assoc();

                if (("$mostrar[usuario]==$miembro")); {?>

                <div class="fila1">
                    <div class="fila1columna1">
                       
                        <input type="text" name="usuario" value="<?php echo $mostrar['usuario']; ?>" maxlength="50" hidden><?php
                        }
                        
                        ?> <br>
                    </div> 
                    
                    <div class="fila1columna2">
                        
                        <input type="email" name="email" value="<?php echo $mostrar['email']; ?>" maxlength="50" hidden><br>
                    </div>   
                </div><br><br>
         
                <div class="fila1">

                    <div class="fila1columna1">
                        <label>Pais*</label><br>
                         <input type="text" name="Colombia" id="Colombia" value="Colombia" disabled>
                    </div>
                    <div class="fila1columna2">
                        <label>Departamento*</label><br>
                         <select class="form-select" type="text" name="departamento"required id="departamento" onchange="selectDepar()">
                            <option value="0">Seleccione departamento</option>
                            <?php 
                                while ($departamento=$consultaDepart->fetch_assoc()) {?>
                            <option id="<?php echo $departamento['departamento'];?>"><?php echo $departamento['departamento'];}?></option>
                            
                        </select><br>
                    </div>
                </div><br><br>

                <div class="fila1">
                    <div class="fila1columna1">
                        <label>Ciudad o município*</label><br>
                        <select class="form-select" name="municipio" id="municipio" onchange="selectMuni()"required>
                            <option>Seleccione munic&iacute;pio</option>                                  
                        </select><br>
                    </div>
                    <div class="fila1columna2">
                        <label>Barrio o sector*</label><br>
                        <input type="text" name="direccion" placeholder="cra 123#321-12" maxlength="50" required><br>
                    </div>
                </div><br><br>

                <div class="fila2">
                    <div class="fila2columna1">
                        <label>Zona*</label><br>
                        <input class="form-input" type="text" name="zona" id="zona">
                    </div> 
                    <div class="fila2columna2">
                        <label>Puesto*</label><br>
                        <select class="form-select" name="puesto"  id="puesto" required onchange="selectPuesto()" >
                            <option value="0" >Seleccione puesto</option>
                        </select>
                    </div>
                    <div class="fila2columna3">
                        <label>Mesa*</label><br>
                        <select class="form-select" name="mesa" id="mesa" required onchange="selectMesa()" >
                            <option value="0" >Seleccione mesa</option>
                        </select><br>
                    </div>   
                </div><br><br>

                <div class="fila1">
                    <div class="fila1columna1">
                        <label>Inscritos*</label><br>
                        <input type="number" name="inscritos"  maxlength="50"
                        placeholder="123" required>
                    </div>
                    <div class="fila1columna2">
                        <label>Votantes*</label><br>
                        <input type="number" name="votantes"  maxlength="50" 
                        placeholder="123" 
                        required><br>
                    </div>
                </div><br><br>
                <div class="dia_d_tex" >
                	<label id="textarea">Reporte*</label><br>
                	<textarea name="comentario" maxlength="200"  placeholder="maximo 200 car<bracteres" class="fila" required></textarea>
                </div><br><br>    
   
                <div class="registrar">
                	<input type="submit" name="Registro" class="enviar" value="Enviar">
                </div><br><br>

            </form>  
</div>

<?php
	include 'pie.php';
?>